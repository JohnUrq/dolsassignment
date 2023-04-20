<?php
include ('../functions.php');
include ('../.././src/dbh.php');
// Generic page to display results of js functions
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script.js" defer></script>
    <title>Document</title>
</head>
<body>
    
<?php
if(isset($_POST['message'])){
  $message = $_POST['message'];
  echo "<script>console.log('" . $message . "')</script>";
} else {
  echo "There is no console.log() message to display \n\n</br>";
}


$authorisations_max_id = check_id("authorisations");
$care_home_details_max_id = ("care_home_details");
$pt_details_max_id = check_id("pt_details");
$dols_request_signature_date_max_id = check_id("dols_request_signature_date");
$extend_urgent_authorisation_max_id = check_id("extend_urgent_authorisation");
$imca_nec_adv_dec_mha_max_id = check_id("imca_nec_adv_dec_mha");
$interested_persons_max_id = check_id("interested_persons");
$profiling_max_id = check_id("profiling");
$relevant_info_max_id = check_id("relevant_info");
$urgent_authorisation_max_id = check_id("urgent_authorisation");
$urgent_authorisation_criteria_max_id = check_id("urgent_authorisation_criteria");
$message_feedback_max_id = check_id("message_feedback");
?>

</body>
</html>


<!-- <!DOCTYPE html>
<html lang="en">
 <head>
    <script src="../../resources/script.js" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
<body>
    <H2>This is the HTML!</H2>

<div id="toast-interactive" class="w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400" role="alert">
    <div class="flex">

        <div class="ml-3 text-sm font-normal">
            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Thank you!</span>
            <div class="mb-2 text-sm font-normal">You can now return to the Form 1</div> 
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <a href="#" class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Form 1</a>
                </div>
                <div>
                    <a href="#" class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Get me out of here!</a> 
                </div>
            </div>    
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-interactive" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
</div>

</body>
</html>
<?php
exit();
?> -->
