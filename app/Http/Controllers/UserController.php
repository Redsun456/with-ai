<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // Display the user management page
    public function index()
    {
        // Fetch all users from the database
        $users = User::all();
    
        // Pass the $users variable to the view
        return view('admin.admin-user-account-management', compact('users'));
    }

    // Store a new user
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'student_number' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'student_number' => $request->student_number,
            'password' => bcrypt($request->password),
        ]);

        $users = User::all();

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    // Search for users
    public function search(Request $request)
{
    $search = $request->input('search'); // Get the search query from the form
    
    // Search for users whose student number matches the query
    $users = User::where('name', 'like', "%$search%")->get();

    // Pass the filtered users to the view
    return view('admin.admin-user-account-management', compact('users'));
}

public function update(Request $request, $id)
{
    $user = User::findOrFail($id);
    
    // Update other fields
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->student_number = $request->input('student_number');
    
    // Update password if provided
    if ($request->filled('password')) {
        $user->password = bcrypt($request->input('password'));
    }
    
    $user->save();

    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}


public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('users.index')->with('success', 'User deleted successfully.');
}

}
