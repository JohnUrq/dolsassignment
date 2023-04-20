<?php
// Connect to the database
include("./php/src/init.php");

// Check for errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

// Query the database
$query = "SELECT pt_details_message_feedback, care_home_details_message_feedback, authorisations_message_feedback_details, interested_persons_message_feedback_details, advance_decision_feedback_details, signature_date_message_feedback_details, data_collection_message_feedback_details, urgent_authorisation_message_feedback_details, extend_urgent_auth_message_feedback_details FROM message_feedback ORDER BY submission_id";

$result = $mysqli->query($query);

// Fetch data as an associative array
$data = array();
while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Convert data to JSON format and return it
echo json_encode($data);
