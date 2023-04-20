// Define the URL of the PHP file that will fetch data from the database
var url = "get_messages.php";

// Fetch data from the PHP file
fetch(url)
    .then(response => response.json())
    .then(data => {
        // Get the table element
        var table = document.querySelector("table");

        // Loop through the data and create table rows
        data.forEach(row => {
            // Check if all columns are empty
            if (Object.values(row).every(value => value === "")) {
                return;
            }

            // Create a new table row
            var tr = document.createElement("tr");

            // Loop through the columns and create table cells
            Object.values(row).forEach(value => {
                var td = document.createElement("td");
                td.textContent = value;
                tr.appendChild(td);
            });

            // Add the row to the table
            table.appendChild(tr);
        });
    })
    .catch(error => console.log(error));