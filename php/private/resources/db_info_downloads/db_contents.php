<?php
include('../functions.php');
include(".././../src/init.php");


// header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // include_once(".././../src/init.php");
    $read = "SHOW TABLES FROM dbname;";

    $result = $mysqli->query($read);

    if (!$result) {
        echo "There is no result." . $mysqli->error;
    }
    // array to store rows
    $api_response = array();

    while ($row = $result->fetch_assoc()) {
        // build up array from results
        array_push($api_response, $row);
    }
    // return as json
    $response = json_encode($api_response, JSON_PRETTY_PRINT);

    

    // echo it out as json
    echo ($response);
    // var_dump as PHP object
    // $response = json_decode($response);
    // print_data($response);
    
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    

    // Get the highest id for forms submissions and compare it with the highest id for each of the other tables to ensure this data is being updated on submission.
    // $read = "SELECT* FROM message_feedback ORDER BY submission_id DESC LIMIT 1";
    // Have put SQL query inot phpmyadmin and it works there.
    $read = "SELECT pt_details_message_feedback, care_home_details_message_feedback, authorisations_message_feedback_details, interested_persons_message_feedback_details, advance_decision_feedback_details, signature_date_message_feedback_details, data_collection_message_feedback_details, urgent_authorisation_message_feedback_details, extend_urgent_auth_message_feedback_details FROM message_feedback ORDER BY submission_id DESC LIMIT 1";



    $result = $mysqli->query($read);

    if (!$result) {
        echo "There are no results." . $mysqli->error;
    }
    // array to store rows
    $api_response = array();

     $row = $result->fetch_assoc();

    // echo out the data.
    //  can we loop through this array more elegantly?

    echo "pt_details_message_feedback: " . $row["pt_details_message_feedback"] . "<br>";
    echo "care_home_details_message_feedback: " . $row["care_home_details_message_feedback"] . "<br>";
    echo "authorisations_message_feedback_details: " . $row["authorisations_message_feedback_details"] . "<br>";
    echo "interested_persons_message_feedback_details: " . $row["interested_persons_message_feedback_details"] . "<br>";
    echo "advance_decision_feedback_details: " . $row["advance_decision_feedback_details"] . "<br>";
    echo "signature_date_message_feedback_details: " . $row["signature_date_message_feedback_details"] . "<br>";
    echo "data_collection_message_feedback_details: " . $row["data_collection_message_feedback_details"] . "<br>";
    echo "urgent_authorisation_message_feedback_details: " . $row["urgent_authorisation_message_feedback_details"] . "<br>";
    echo "extend_urgent_auth_message_feedback_details: " . $row["extend_urgent_auth_message_feedback_details"] . "<br>";
}

