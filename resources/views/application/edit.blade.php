@extends('layouts.app')

@section('content')
    <h2>Edit Application</h2>
    <form method="POST" action="{{ url('/application/update', $application->id) }}">
        @csrf
        <div class="input_box">
            <label for="Snumber">Student Number</label>
            <input type="number" name="Snumber" value="{{ $application->Snumber }}" required>
        </div>

        <div class="input_box">
            <label for="ea">Email Address</label>
            <input type="email" name="ea" value="{{ $application->ea }}" required>
        </div>

        <div class="input_box">
            <label for="pass">Password</label>
            <input type="password" name="pass" placeholder="Enter new password" required>
        </div>

        <div class="input_box">
            <label for="conp">Confirm Password</label>
            <input type="password" name="conp" placeholder="Confirm new password" required>
        </div>

        <button type="submit">Update</button>
    </form>
@endsection
