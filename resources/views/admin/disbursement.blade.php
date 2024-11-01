@php
    $page_label = "Disbursement";
@endphp

<x-admin-sidenav2 :pageLabel="$page_label">
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Disbursement</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset ('assets/css/disbursement.css') }}">
    <link rel="icon" href="{{ asset('assets/images/bcplg.png') }}" type="image/png">
</head>

<body>
<div class="disbursement-container">
    <div class="disbursement-filter">
        <input type="text" id="search-disbursement" placeholder="Search by SA name...">
        <select id="disbursement-status-filter">
            <option value="all">All Statuses</option>
            <option value="completed">Completed</option>
            <option value="pending">Pending</option>
        </select>
        <!-- Create New Disbursement Button -->
        <button id="create-disbursement-btn">Create New Disbursement</button>
    </div>

    <table id="disbursement-table">
        <thead>
            <tr>
                <th>Disbursement ID</th>
                <th>Student Number</th>
                <th>Student Assitant Name</th>
                <th>Amount</th>
                <th>Date</th>
                <th>Status</th>
                <th>Payout Method</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                
            </tr>
            <tr>
                
            </tr>
        </tbody>
    </table>
</div>

<!-- Popup Disbursement Form -->
<div id="disbursement-popup" class="popup">
    <div class="popup-content">
        <span class="close">&times;</span>
        <h2>Add New Disbursement</h2>
        <form id="disbursement-form">
            <div class="form-group">
                <label for="sa-no">SA Student Number</label>
                <input type="text" id="sa-no" name="sa-no" placeholder="Enter Student Number" required>
            </div>
            <div class="form-group">
                <label for="sa-name">SA Name</label>
                <input type="text" id="sa-name" name="sa-name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="disbursement-amount">Amount</label>
                <input type="number" id="disbursement-amount" name="disbursement-amount" placeholder="₱" required>
            </div>
            <div class="form-group">
                <label for="disbursement-date">Date</label>
                <input type="date" id="disbursement-date" name="disbursement-date" required>
            </div>
            <div class="form-group">
                <label for="payout-method">Payout Method</label>
                <select id="payout-method" name="payout-method" required>
                    <option value="cash">Cash (Allowance)</option>
                    <option value="miscellaneous">Add to Miscellaneous</option>
                </select>
            </div>
            <button type="submit">Add Disbursement</button>
        </form>
    </div>
</div>

<script>
    var popup = document.getElementById("disbursement-popup");
    var btn = document.getElementById("create-disbursement-btn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        popup.style.display = "flex";
    }
    span.onclick = function () {
        popup.style.display = "none";
    }
    window.onclick = function (event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    }
</script>
    

</body>

</html>

</x-admin-sidenav2>