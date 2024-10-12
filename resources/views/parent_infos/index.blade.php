@extends('layouts.app')

@section('content')
    <h1>Parent/Guardian Information</h1>
    <a href="{{ route('parent_infos.create') }}" class="btn btn-primary">Add Parent Information</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Father's Name</th>
                <th>Mother's Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($parentInfos as $parentInfo)
                <tr>
                    <td>{{ $parentInfo->father_name }}</td>
                    <td>{{ $parentInfo->mother_name }}</td>
                    <td>
                        <a href="{{ route('parent_infos.edit', $parentInfo->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('parent_infos.destroy', $parentInfo->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection