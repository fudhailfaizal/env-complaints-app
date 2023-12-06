document.addEventListener("DOMContentLoaded", function () {
    const complaintsList = document.getElementById("complaints-list");
    const updateForm = document.getElementById("update-form");

    // Dummy data for illustration
    const complaintsData = [
        { id: 1, status: "Pending" },
        { id: 2, status: "In Progress" },
        { id: 3, status: "Resolved" },
    ];

    // Populate complaints list
    complaintsData.forEach(complaint => {
        const listItem = document.createElement("li");
        listItem.textContent = `Complaint ID ${complaint.id}: ${complaint.status}`;
        complaintsList.appendChild(listItem);
    });

    // Update complaint status
    updateForm.addEventListener("submit", function (event) {
        event.preventDefault();
        const complaintId = document.getElementById("complaint-id").value;
        const newStatus = document.getElementById("new-status").value;

        // Dummy logic for updating status (replace with actual API call)
        console.log(`Updating status of Complaint ID ${complaintId} to ${newStatus}`);
    });
});
