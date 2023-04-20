<?php
// This will recieve data from the HTML form and update the database
 error_reporting(E_ALL); ini_set('display_errors', 1);
 
 include_once __DIR__ . ("/../.././initialize.php");
 include_once __DIR__ . ('/../libs/helpers.php');
//  include PROJECT_PATH . "/resources";
// include __DIR__ . ("/../.././resources/functions.php");
$submission_id = insert_row("forms_submissions", ["date" => date("Y-m-d")]);


$pt_details = [
    "submission_id" => $submission_id,
    "pt_objection" => get_post_data('pt_objection'),
    "pt_name" => get_post_data('pt_name'),
    "pt_dob" => get_post_data('pt_dob'),

    "pt_estimated_age" => get_post_data('pt_estimated_age'),
    "pt_sex" =>  get_post_data('pt_sex'),
    "pt_home_address" => get_post_data('pt_home_address'),
    "date_moved_in" =>  get_post_data('date_moved_in'),
    "pt_MH_physical" => get_post_data('pt_MH_physical'),
    "pt_MH_mental" => get_post_data('pt_MH_mental'),
    "pt_meds" =>  get_post_data('pt_meds'),
    "pt_antipsychotic_meds" => get_post_data('pt_antipsychotic_meds'),
    "pt_sedating_meds" => get_post_data('pt_sedating_meds'),
    // "pt_has_capacity" => get_post_data('pt_has_capacity'),
    "pt_personal_care" => get_post_data('pt_personal_care'),
    "pt_mobility" => get_post_data('pt_mobility'),
    "pt_sensory_loss" => get_post_data('pt_sensory_loss'),
    "pt_comms_pref" => get_post_data('pt_comms_pref'),
    "pt_compliance" =>  get_post_data('pt_compliance')
    ];



insert_row("pt_details", $pt_details);



$care_home_details = [
    "submission_id" => $submission_id,
    "care_home_address" => get_post_data('care_home_address'),
    "care_home_tele" => get_post_data('care_home_tele'),
    "care_home_contact" => get_post_data('care_home_contact'),
    "care_home_email" => get_post_data('care_home_email'),
    "pt_care_plan" => get_post_data('pt_care_plan'),
];


// create other tables in db
// create insert statements for table
// code could be further refactored by adding function to populate the array eg $care_home_details would become $care_home_details = ["submission_id" => $submission_id, "care_home_address", "care_home_tele", "care_home_contact", "care_home_email", "pt_care_plan"];

//  Authorisations


$authorisations = [
    "submission_id" => $submission_id,
    "authorisation_type" => get_post_data('authorisation_type'),
    "authorisation_date" => get_post_data('authorisation_date'),
    "funding_type" => get_post_data('funding_type'),
    "restrictions_in_place" => get_post_data('restrictions_in_place'),
    "less_restrictive_options" => get_post_data('less_restrictive_options'),
    
    ];


//  Interested persons

$interested_persons = [
    "submission_id" => $submission_id,
    "persons_informed" => get_post_data('persons_informed'),
    "family_member_name" => get_post_data('family_member_name'),    
    "family_member_address" => get_post_data('family_member_address'),
    "family_member_telephone" => get_post_data('family_member_telephone'), 
    "welfare_consultant_name" => get_post_data('welfare_consultant_name'),
    "welfare_consultant_address" => get_post_data('welfare_consultant_address'),
    "welfare_consultant_telephone" => get_post_data('welfare_consultant_telephone'),
    "carer_name" => get_post_data('carer_name'),
    "carer_address" => get_post_data('carer_address'),
    "carer_telephone" => get_post_data('carer_telephone'),
    "lpa_health_name" => get_post_data('lpa_health_name'),
    "lpa_health_address" => get_post_data('lpa_health_address'),
    "lpa_health_telephone" => get_post_data('lpa_health_telephone'),
    "lpa_health_date" => get_post_data('lpa_health_date'), 
    "lpa_finance_name" => get_post_data('lpa_finance_name'),
    "lpa_finance_address" => get_post_data('lpa_finance_address'),
    "lpa_finance_telephone" => get_post_data('lpa_finance_telephone'),
    "lpa_finance_date" => get_post_data('lpa_finance_date'),
    "personal_welfare_deputy_name" => get_post_data('personal_welfare_deputy_name'),
    "personal_welfare_deputy_address" => get_post_data('personal_welfare_deputy_address'),
    "personal_welfare_deputy_telephone" => get_post_data('personal_welfare_deputy_telephone'),
    "personal_welfare_deputy_date" => get_post_data('personal_welfare_deputy_date'), 
    "imca_name" => get_post_data('imca_name'),
    "imca_address" => get_post_data('imca_address'),
    "imca_telephone" => get_post_data('imca_telephone'),
    "personal_financial_deputy" => get_post_data('personal_financial_deputy')
];


//  IMCA necessary
//  Advance Decision
//  MHA_applies
//  all rolled into one table imca_nec_adv_dec_mha
$imca_nec_adv_dec_mha = [
    "submission_id" => $submission_id,
    "imca_necessary" => get_post_data('imca_necessary'),
    "advance_decision" => get_post_data('advance_decision'),
    "MHA_applies" => get_post_data('MHA_applies'),
    "MHA_applies_details_text" => get_post_data('MHA_applies_details_text')
 ];
//  Other relevant info
//  Safeguarding issues
$relevant_info = [
    "submission_id" => $submission_id,
    "regular_visitors_name" => get_post_data('regular_visitors_name'),
    "regular_visitors_telephone" => get_post_data('regular_visitors_telephone'),
    "safeguarding_concerns" => get_post_data('safeguarding_concerns')
];

//  Signature and date
$dols_request_signature_date = [
    "submission_id" => $submission_id,
    "dols_request_signature" => get_post_data('dols_request_signature'),
    "dols_request_date" => get_post_data('dols_request_date'),
    // "dols_request_timestamp" => get_post_data('dols_request_timestamp'),
    "dols_request_informed" => get_post_data('dols_request_informed'),
    "reasons_not_informed" => get_post_data('reasons_not_informed')
    ];
//  profiling
//  sexual_orientation
//  persons_disability
//  persons_beliefs
$profiling = [
    "submission_id" => $submission_id,
    "racial_ethnic_national_origin" => get_post_data("racial_ethnic_national_origin"),
    "sexual_orientation" =>get_post_data("sexual_orientation"),
    "persons_disability" =>get_post_data("persons_disability"),
    "persons_beliefs" =>get_post_data("persons_beliefs")
];

//  urgent_authorisation
$urgent_authorisation = [
    "submission_id" => $submission_id,
    "urgent_authorisation_required" => get_post_data('urgent_authorisation_required'),
    "urgent_days" => get_post_data('urgent_days'),
    "urgent_authorisation_granted_date" => get_post_data('urgent_authorisation_granted_date'),
    "urgent_authorisation_date_end" => get_post_data('urgent_authorisation_date_end')
];
//  urgent_authorisation_criteria
$urgent_authorisation_criteria = [
    "submission_id" => $submission_id,
    "urgent_authorisation_criteria" => get_post_data('urgent_authorisation_criteria')
];
//  Extension urgent_authorisation
$extend_urgent_authorisation = [
    "submission_id" => $submission_id,
    "urgent_authorisation_in_force" => get_post_data('urgent_authorisation_in_force'),
    "extend_urgent_authorisation_granted_text" => get_post_data('extend_urgent_authorisation_granted_text'),
    "extend_urgent_authorisation_signed" => get_post_data('extend_urgent_authorisation_signed'),
    
    // YYYY-mm-dd H:i:s
];

$message_feedback = [
        "submission_id" => $submission_id,
        "pt_details_message_feedback" => get_post_data('pt_details_message_feedback'),
        "care_home_details_message_feedback" => get_post_data('care_home_details_message_feedback'),
        "authorisations_message_feedback_details" => get_post_data('authorisations_message_feedback_details'),
        "interested_persons_message_feedback_details" => get_post_data('interested_persons_message_feedback_details'),
        "advance_decision_feedback_details" => get_post_data('advance_decision_feedback_details'),
        "signature_date_message_feedback_details" => get_post_data('signature_date_message_feedback_details'),
        "data_collection_message_feedback_details" => get_post_data('data_collection_message_feedback_details'),
        "urgent_authorisation_message_feedback_details" => get_post_data('urgent_authorisation_message_feedback_details'),
        "extend_urgent_auth_message_feedback_details" => get_post_data('extend_urgent_auth_message_feedback_details'),

];

insert_row("care_home_details",$care_home_details);
insert_row("authorisations",$authorisations);
insert_row("interested_persons",$interested_persons);
insert_row("imca_nec_adv_dec_mha",$imca_nec_adv_dec_mha);
insert_row("dols_request_signature_date",$dols_request_signature_date);
insert_row("relevant_info",$relevant_info);
insert_row("profiling",$profiling);
insert_row("urgent_authorisation",$urgent_authorisation);
insert_row("extend_urgent_authorisation", $extend_urgent_authorisation);
insert_row("urgent_authorisation_criteria",$urgent_authorisation_criteria);
insert_row("message_feedback",$message_feedback);

echo"</br>";


?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <script src="../../resources/script.js" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
<body>

<div id="toast-interactive" class=" ml-6 w-full max-w-xs p-4 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400" role="alert">
    <div class="flex">

        <div class="ml-3 text-sm font-normal">
            <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Thank you!</span>
            <div class="mb-2 text-sm font-normal">You can now return to the Form 1</div> 
            <div class="grid grid-cols-2 gap-2">
                <div>
                    <a href="http://localhost:8888/Assignment/php/public/#pt_details" class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Form 1</a>
                </div>
                <div>
                    <a href="https://findtheinvisiblecow.com/" class="inline-flex justify-center w-full px-2 py-1.5 text-xs font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-600 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">Find the invisible cow!</a> 
                </div>
            </div>    
        </div>
        <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" >
            <span class="sr-only">Close</span>

        </button>
    </div>
</div>
</body>
</html>
<?php
exit();




