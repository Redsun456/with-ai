@extends('layouts.app')

@section('content')
    <h1>Add Parent/Guardian Information</h1>

    <form action="{{ route('parent_infos.store') }}" method="POST">
        @csrf
        <h3>Father's Information</h3>
        <div class="form-group">
            <label>Father's Full Name</label>
            <input type="text" name="father_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" name="father_birthday" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Occupation</label>
            <input type="text" name="father_occupation" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="father_salary" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="father_address" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="father_contact_number" class="form-control" required>
        </div>

        <h3>Mother's Information</h3>
        <div class="form-group">
            <label>Mother's Full Name</label>
            <input type="text" name="mother_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Birthday</label>
            <input type="date" name="mother_birthday" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Occupation</label>
            <input type="text" name="mother_occupation" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Salary</label>
            <input type="number" name="mother_salary" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="mother_address" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Contact Number</label>
            <input type="text" name="mother_contact_number" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
@endsection
