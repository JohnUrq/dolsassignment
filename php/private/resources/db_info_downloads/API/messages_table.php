
<?php
    include(".././/resources/functions.php");
    include(".././../src/init.php");

    $read = "SELECT pt_details_message_feedback, care_home_details_message_feedback, authorisations_message_feedback_details, interested_persons_message_feedback_details, advance_decision_feedback_details, signature_date_message_feedback_details, data_collection_message_feedback_details, urgent_authorisation_message_feedback_details, extend_urgent_auth_message_feedback_details FROM message_feedback;";
$result = $mysqli->query($read);
$data = mysqli_fetch_assoc($result);
$num = mysqli_num_rows($result);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feedback Messages</title>
    <style>
        /* Your CSS styles here */
    </style>
    <script>
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
    </script>
</head>
<body>
    <table>
    <div class="container">
   
    <tr>
        <th>Pt details feedback</th>
        <th>Care Home Details Feedback</th>
        <th>Authorisations Feedback</th>
        <th>Interested Persons Feedback</th>
        <th>Advance Decision</th>
        <th>Signature</th>
        <th>Data Collection</th>
        <th>Urgent</th>
        <th>Extend</th>
    </tr>
    
    </table>
</body>
</html>
