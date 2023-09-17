document.addEventListener("DOMContentLoaded", function () {
    var orderList = document.getElementById("orderList");

    // Retrieve orders from localStorage
    var orders = JSON.parse(localStorage.getItem("orders")) || [];

    // Function to display orders in the table
    function displayOrders() {
        orderList.innerHTML = "";

        orders.forEach(function (order, index) {
            var row = document.createElement("tr");
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${order.buyerName}</td>
                <td>${order.quantity}</td>
                <td>${order.price}</td>
                <td>
                    <button onclick="editOrder(${index})">Edit</button>
                    <button onclick="deleteOrder(${index})">Delete</button>
                </td>
            `;
            orderList.appendChild(row);
        });
    }

    // Function to edit an order
    function editOrder(orderIndex) {
        // Implement your edit logic here
        alert("Edit order with index: " + orderIndex);
    }

    // Function to delete an order
    function deleteOrder(orderIndex) {
        // Implement your delete logic here
        if (confirm("Are you sure you want to delete this order?")) {
            orders.splice(orderIndex, 1);
            localStorage.setItem("orders", JSON.stringify(orders));
            displayOrders(); // Update the displayed orders
        }
    }

    // Call the displayOrders function on page load
    displayOrders();
});
