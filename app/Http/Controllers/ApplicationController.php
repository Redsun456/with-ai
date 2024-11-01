<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ApplicationController extends Controller
{
    public function showStep1() {
        return view('application.step1');
    }

    public function storeStep1(Request $request)
    {
        $validated = $request->validate([
            'student_number' => 'required|numeric',
            'program_course' => 'required|string',
            'year_section' => 'required|string',
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'suffix' => 'nullable|string',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'contact_number' => 'required|numeric',
            'email' => 'required|email',
            'gender' => 'required|string',
            'id_file' => 'required|file|mimes:jpg,png,svg,gif|max:2048',
            'requirement_files' => 'required|array|min:3',
            'requirement_files.*' => 'file|mimes:jpg,png,svg,gif,pdf|max:4096',
        ]);

        // Store ID file in `public/uploads/ids`
    $validated['id_file'] = $request->file('id_file')->store('public/uploads/ids');

// Store multiple requirement files in `public/uploads/requirement_files`
    $files = [];
    if ($request->hasFile('requirement_files')) {
    foreach ($request->file('requirement_files') as $file) {
        $files[] = $file->store('public/uploads/requirement_files');
    }
}
$validated['requirement_files'] = json_encode($files);


        // Temporarily store the validated data in the session
        $request->session()->put('step1', $validated);

        // Redirect to Step 2
        return redirect()->route('application.step2');
    }

    public function showStep2() {
        return view('application.step2');
    }

    public function storeStep2(Request $request)
    {
        $validated = $request->validate([
            'father_name' => 'nullable|string',
            'father_birthday' => 'nullable|date',
            'father_occupation' => 'nullable|string',
            'father_salary' => 'nullable|numeric',
            'father_address' => 'nullable|string',
            'father_contact' => 'nullable|numeric',
            'mother_name' => 'nullable|string',
            'mother_birthday' => 'nullable|date',
            'mother_occupation' => 'nullable|string',
            'mother_salary' => 'nullable|numeric',
            'mother_address' => 'nullable|string',
            'mother_contact' => 'nullable|numeric',
            'guardian_name' => 'nullable|string',
            'guardian_birthday' => 'nullable|date',
            'guardian_occupation' => 'nullable|string',
            'guardian_salary' => 'nullable|numeric',
            'guardian_address' => 'nullable|string',
            'guardian_contact' => 'nullable|numeric',
        ]);

        // Save Step 2 data in the session
        $request->session()->put('step2', $validated);

        // Redirect to Summary Page
        return redirect()->route('application.summary');
    }


    public function showSummary()
    {
        // Retrieve data from the session
        $step1 = session()->get('step1');
        $step2 = session()->get('step2');

        // Ensure all steps have been completed before showing the summary
        if (!$step1 || !$step2) {
            return redirect()->route('application.step1')->with('error', 'Please complete all steps before proceeding to the summary.');
        }

        // Merge data for summary display
        $applicantData = array_merge($step1, $step2);

        // Return the summary view with the merged data
        return view('application.summary', compact('applicantData'));
    }

    public function confirmApplication(Request $request)
    {
        // Retrieve data from sessions
        $step1 = $request->session()->get('step1');
        $step2 = $request->session()->get('step2');

        if (!$step1 || !$step2) {
            return redirect()->route('application.step1')->with('error', 'Please complete all steps before confirming.');
        }

        try {
            // Save Applicant Record
            $applicant = new Applicant();
            $applicant->fill(array_merge($step1, $step2));
            $applicant->save();

            // Clear Session Data
            $request->session()->forget(['step1', 'step2']);

            // Redirect to Success Page
            return redirect()->route('application.success', ['id' => $applicant->id]);

        } catch (\Exception $e) {
            // Log error and show friendly message
            \Log::error($e);
            return redirect()->route('application.summary')->with('error', 'Something went wrong. Please try again.');
        }
    }

    public function showSuccess()
    {
        return view('welcome');
    }
    public function showReview()
    {
        // Fetch all applicants from the database
        $applicants = Applicant::all();

        // Pass applicants data to the view
        return view('admin.application-review', compact('applicants'));
    }

    public function index()
{
    // Fetch all applicants to display in the application review view
    $applicants = Applicant::all();
    return view('admin.application-review', compact('applicants'));
}

    public function viewApplication($id)
    {
    // Fetch the applicant's data using their ID
    $applicant = Applicant::findOrFail($id); // `findOrFail` throws an error if the applicant is not found
    $applicant->requirement_files = json_decode($applicant->requirement_files);

    // Pass the applicant data to the view
    return view('admin.view-application', compact('applicant'));
    }

    public function delete($id)
{
    // Find the applicant by ID and delete
    $applicant = Applicant::findOrFail($id);
    $applicant->delete();

    // Redirect back to the application review page with a success message
    return redirect()->route('application-review')->with('success', 'Application deleted successfully.');
}


    public function approve($id)
{
    $applicant = Applicant::find($id);
    if ($applicant) {
        $applicant->status = 'approved';
        $applicant->save();
        return redirect()->route('application-review')->with('success', 'Application approved successfully.');
    }
    return redirect()->route('application-review')->with('error', 'Applicant not found.');
}

public function reject($id)
{
    $applicant = Applicant::find($id);
    if ($applicant) {
        $applicant->status = 'rejected';
        $applicant->save();
        return redirect()->route('application-review')->with('success', 'Application rejected successfully.');
    }
    return redirect()->route('application-review')->with('error', 'Applicant not found.');
}


}
