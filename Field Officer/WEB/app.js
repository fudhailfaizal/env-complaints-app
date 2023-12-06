document.addEventListener("DOMContentLoaded", function () {
    const complaintsList = document.getElementById("complaints-list");
    const updateForm = document.getElementById("update-form");

    // Dummy data for illustration purposes
    const complaintsData = [
        { id: 1, status: "Pending" },
        { id: 2, status: "In Progress" },
        { id: 3, status: "Resolved" },
    ];

    // Function to render complaints
    function renderComplaints(complaints) {
        complaintsList.innerHTML = ""; // Clear existing list
        complaints.forEach(complaint => {
            const listItem = document.createElement("li");
            listItem.textContent = `Complaint ID ${complaint.id}: ${complaint.status}`;
            complaintsList.appendChild(listItem);
        });
    }

    // Fetch complaints from the backend
    async function fetchComplaints() {
        try {
            const response = await fetch('/api/complaints');
            const data = await response.json();
            renderComplaints(data);
        } catch (error) {
            console.error('Error fetching complaints:', error);
        }
    }

    // Update complaint status on form submission
    updateForm.addEventListener("submit", async function (event) {
        event.preventDefault();
        const complaintId = document.getElementById("complaint-id").value;
        const newStatus = document.getElementById("new-status").value;

        try {
            // Update status on the backend
            const response = await fetch('/api/update-status', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: complaintId, newStatus }),
            });

            const updatedComplaint = await response.json();

            // Dummy logic for updating UI (replace with actual logic)
            const index = complaintsData.findIndex(complaint => complaint.id === updatedComplaint.id);
            complaintsData[index].status = updatedComplaint.status;

            // Render updated complaints
            renderComplaints(complaintsData);
        } catch (error) {
            console.error('Error updating status:', error);
        }
    });

    // Dummy socket.io connection (replace with actual logic)
    const socket = io();

    // Listen for real-time updates
    socket.on('statusUpdate', (updatedComplaint) => {
        console.log('Real-time status update:', updatedComplaint);

        // Dummy logic for updating UI (replace with actual logic)
        const index = complaintsData.findIndex(complaint => complaint.id === updatedComplaint.id);
        complaintsData[index].status = updatedComplaint.status;

        // Render updated complaints
        renderComplaints(complaintsData);
    });

    // Fetch complaints when the page loads
    fetchComplaints();
});
