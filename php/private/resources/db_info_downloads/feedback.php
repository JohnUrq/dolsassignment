<?php
include('../functions.php');




// require dirname(__DIR__) . '/../vendor/autoload.php';
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        include(".././../src/init.php");

    $read = "SELECT pt_details_message_feedback, care_home_details_message_feedback, authorisations_message_feedback_details, interested_persons_message_feedback_details, advance_decision_feedback_details, signature_date_message_feedback_details, data_collection_message_feedback_details, urgent_authorisation_message_feedback_details, extend_urgent_auth_message_feedback_details FROM message_feedback ORDER BY submission_id DESC";

    $result = $mysqli->query($read);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck != 0) {
        
        foreach ($result as $row) {
            
            foreach ($row as $key => $data) {
                if ($data != null) {
                    echo  $data; 
                   
                }
            }
           
        }
       
    }
}


