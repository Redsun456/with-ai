<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ApplicationResource;
use App\Models\Application; 
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return ApplicationResource::collection(application::all());
    }

    public function show(string $id){

            $post = Application::findOrFail($id);
            return new ApplicationResource($post);

    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'Snumber' => 'required|numeric',
        'ea' => 'required|email',
        'pass' => 'required|min:6',
        'conp' => 'required|same:pass',
    ]);

    dd($validatedData);

    try {
        Application::create($validatedData);
    } catch (\Exception $e) {
        return back()->with('error', 'Error saving data: ' . $e->getMessage());
    }

    $post = Application::create ($validated);
    return new ApplicationResource ($post);
    return redirect('/application')->with('success', 'Application created successfully.');

}

    public function update(Request $request, string $id)
{
    $post = Application::findOrFail($id);
    $validated = $request->validate([
        'Snumber' => 'required|numeric',
        'ea' => 'required|email',
        'pass' => 'required|min:6',
        'conp' => 'required|same:pass',

    ]);

    $post = Application::create($validated);
    return new ApplicationResource($post);
}

    public function edit($id)
    {
        $application = Application::find($id);
        return view('Application.edit', compact('Application'));
    }


    public function destroy($id)
    {
        Application::destroy($id);
        return response()->noContent;
    }
}