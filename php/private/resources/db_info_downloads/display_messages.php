<?php
    include("../functions.php");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Messages</title>
    <style type="text/css">
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            min-height: 100vh;
            background-color: #5d6d7d;
        }
        .container{
            max-width: 900px;
            margin: 100px auto;
            width: 100%;
        }
        table{
            border: 1px solid #fff;
            border-collapse: collapse;
            width: 100%;
        }
        table th{
            background-color: red;
            color: #fff;
            padding: 10px;
        }
        table td{
            padding: 12px;
            color: #fff;
            font-size: 1em;
            text-align: centre;
        }
        table tr:nth-child(odd){
            background-color: #797676;
        }
    </style>
</head>

<body>
    <div class="container">
    <table>
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
    <?php

// the if statement inside the while loop checks if any of the columns have a non-empty value. If any of the columns have a non-empty value, the code prints the row, and if not, the code skips the row.

    if ($num > 0) {
        while ($data = mysqli_fetch_assoc($result)) {
            if (!empty($data['pt_details_message_feedback']) ||
                !empty($data['care_home_details_message_feedback']) ||
                !empty($data['authorisations_message_feedback_details']) ||
                !empty($data['interested_persons_message_feedback_details']) ||
                !empty($data['advance_decision_feedback_details']) ||
                !empty($data['signature_date_message_feedback_details']) ||
                !empty($data['data_collection_message_feedback_details']) ||
                !empty($data['urgent_authorisation_message_feedback_details']) ||
                !empty($data['extend_urgent_auth_message_feedback_details'])) {
                echo "<tr>
                    <td>{$data['pt_details_message_feedback']}</td>
                    <td>{$data['care_home_details_message_feedback']}</td>
                    <td>{$data['authorisations_message_feedback_details']}</td>
                    <td>{$data['interested_persons_message_feedback_details']}</td>
                    <td>{$data['advance_decision_feedback_details']}</td>
                    <td>{$data['signature_date_message_feedback_details']}</td>
                    <td>{$data['data_collection_message_feedback_details']}</td>
                    <td>{$data['urgent_authorisation_message_feedback_details']}</td>
                    <td>{$data['extend_urgent_auth_message_feedback_details']}</td>
                </tr>";
            }
        }
    }
    ?>
</table>

            </tr>
            
        </table>
    </div>
</body>
</html>