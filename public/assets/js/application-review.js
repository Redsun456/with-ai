function searchTable() {
    const input = document.getElementById("search-bar").value.toLowerCase();
    const rows = document.getElementById("application-table").getElementsByTagName("tr");

    for (let i = 1; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName("td");
        let match = false;
        for (let j = 0; j < cells.length; j++) {
            if (cells[j].textContent.toLowerCase().includes(input)) {
                match = true;
                break;
            }
        }
        rows[i].style.display = match ? "" : "none";
    }
}

function filterTable() {
    const filter = document.getElementById("status-filter").value.toLowerCase();
    const rows = document.getElementById("application-table").getElementsByTagName("tr");

    for (let i = 1; i < rows.length; i++) {
        const statusCell = rows[i].getElementsByTagName("td")[6];
        if (filter === "all" || statusCell.textContent.toLowerCase().includes(filter)) {
            rows[i].style.display = "";
        } else {
            rows[i].style.display = "none";
        }
    }
}

function confirmDelete() {
    return confirm("Are you sure you want to delete this application? This action cannot be undone.");
}