@extends('layouts.app')

@section('content')
    <h2>Applications List</h2>
    <table>
        <thead>
            <tr>
                <th>Student Number</th>
                <th>Email Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->Snumber }}</td>
                    <td>{{ $application->ea }}</td>
                    <td>
                        <a href="{{ url('/application/edit', $application->id) }}">Edit</a>
                        <form action="{{ url('/application/delete', $application->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
