// Filter table based on status
function filterTable() {
    const filterValue = document.getElementById("status-filter").value;
    const rows = document.querySelectorAll("#application-table tbody tr");

    rows.forEach(row => {
        const status = row.classList.contains(filterValue) || filterValue === 'all';
        row.style.display = status ? '' : 'none';
    });
}

// Search functionality
function searchTable() {
    const input = document.getElementById("search-bar").value.toLowerCase();
    const rows = document.querySelectorAll("#application-table tbody tr");

    rows.forEach(row => {
        const name = row.cells[1].innerText.toLowerCase();
        row.style.display = name.includes(input) ? '' : 'none';
    });
}

// Simulate the "View Application" action
function viewApplication(studentNumber) {
    alert(`View Application: ${studentNumber}`);
    // You can redirect to an actual view page or handle it as needed:
    // window.location.href = `view_application.php?student_number=${studentNumber}`;
}