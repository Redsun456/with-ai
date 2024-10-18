@php
    $page_label = "Concerns";
@endphp

<x-admin-sidenav :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Concerns</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/concerns.css')}}">
</head>
<body>
    <div class="concerns-panel">
        <section class="controls">
            <div class="search-bar">
                <input type="text" placeholder="Search concerns..." id="search">
            </div>
            <div class="filter">
                <label for="status">Filter by Status:</label>
                <select id="status">
                    <option value="all">All</option>
                    <option value="pending">Pending</option>
                    <option value="resolved">Resolved</option>
                </select>
            </div>
        </section>

        <section class="concerns-table">
            <table>
                <thead>
                    <tr>
                        <th>Student No.</th>
                        <th>User</th>
                        <th>Concern</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>Issue with login</td>
                        <td>2024-10-08</td>
                        <td><span class="status pending">Pending</span></td>
                        <td>
                            <button class="btn resolve">Resolve</button>
                            <button class="btn delete">Delete</button>
                        </td>
                    </tr>
                    <!-- Repeat similar rows for each concern -->
                </tbody>
            </table>
        </section>
    </div>
</body>
</html>
</x-admin-sidenav>