<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        // Fetch data for the dashboard
        $pendingApplications = Applicant::where('status', 'pending')->count();
        $approvedApplications = Applicant::where('status', 'approved')->count();
        $rejectedApplications = Applicant::where('status', 'rejected')->count();

        $disbursedAmount = 0; // Example value, replace with actual data
        $pendingDisbursement = 0; // Example value, replace with actual data

        $adminCount = User::where('role', 'admin')->count();
        $userCount = User::where('role', 'user')->count();


        // Return data to the dashboard view
        return view('admin.dashboard', compact(
            'pendingApplications', 'approvedApplications', 'rejectedApplications',
           'adminCount', 'userCount'
        ));
    }
}
