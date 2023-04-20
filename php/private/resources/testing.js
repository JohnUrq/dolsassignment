// Prefill values in the form for testing

// Text fields
document.querySelector("input[name=pt_name]").value = "Dilbert Flump";
document.querySelector("input[name=pt_dob]").value = "04/05/1966";
// Select dropdown - 1 value
document.querySelector("select[name='pt_MH_physical[]']").value = "NRMH";
// Select dropdown multiple values
document.querySelector(
  "select[name='pt_MH_mental[]'] option[value=DEP]"
).selected = true;
document.querySelector(
  "select[name='pt_MH_mental[]'] option[value=BIP]"
).selected = true;

// checkboxes
// check boxes removed 22 3 23
// pt_sex
document.querySelector("select[name='pt_sex']").value = "NB";
// Estimated age
document.querySelector("input[name=pt_estimated_age]").value = "73";
// Patient home address
document.querySelector("input[name=pt_home_address]").value =
  "5 Pier Hill, Southend-on-Sea, Essex, SS1 5EX";
// Date moved to nursing home
document.querySelector("input[name=date_moved_in]").value = "04/05/2022";
// pt MH physical (See above)

// pt_MH_mental (See above)

// pt_meds (see above)
document.querySelector(
  "select[name='pt_meds[]'] option[value=NSAID]"
).selected = true;
document.querySelector(
  "select[name='pt_meds[]'] option[value=AP]"
).selected = true;
// antipsychotic meds taken by pt.

document.querySelector("select[name='pt_antipsychotic_meds[]'] option[value=RIS]"
).selected = true;
// sedating meds prescribed.
document.querySelector("select[name='pt_sedating_meds[]']").value = "NO";

// pt_personal_care
document.querySelector("select[name='pt_personal_care[]']").value = "ASS1";
// pt_mobility
var radioButton_mobility = document.querySelector(
  'input[name="pt_mobility"][value="YES"]'
);
// Set the "checked" property to true
radioButton_mobility.checked = true;
// pt_sensory_loss
document.querySelector("select[name='pt_sensory_loss[]']").value = "HOH";

// pt_comms_preference
document.querySelector("select[name='pt_comms_pref[]']").value = "CB";
// pt_compliance
document.querySelector(
  "input[name='pt_compliance'][value='YES']"
).checked = true;
// Care home name & address
document.querySelector("input[name=care_home_address]").value =
  "Sunny Acres Care Home, Vange, Essex";
// Care home phone number
document.querySelector("input[name=care_home_tele]").value = "01428 824824";
// Care home contact
document.querySelector("input[name=care_home_contact]").value = "Horatio";
// email
document.querySelector("input[name=care_home_email]").value =
  "reception@sunnyacres.com";
// pt_care_plan
// document.querySelector("input[name=pt_care_plan]").value = "Attached.txt";
// Authorisation type
document.querySelector(
  "select[name=authorisation_type] option[value=FIRST]"
).selected = true;

// Funding type
document.querySelector("select[name='pt_antipsychotic_meds[]']").value = "LA";
// Restrictions_in_place
document.querySelector(
  "select[name='restrictions_in_place[]'] option[value=LD]"
).selected = true;
document.querySelector(
  "select[name='restrictions_in_place[]'] option[value=RC]"
).selected = true;
// Less restrictive options - radio button
document.querySelector(
  "input[name='less_restrictive_options'][value='N']"
).checked = true;
// Persons informed - Toggle
let toggleElements = document.querySelectorAll(
  "input[name='persons_informed[]'][value='FAM']"
);
toggleElements.forEach((element) => {
  element.checked = true;
});
// IMCA necessary
// document.querySelector(
//   "select[name=imca_necessary] option[value=YES]"
// ).selected = true;
// advance_decision - dropdown
document.querySelector("select[name='advance_decision']").value = "ADY";
// MHA_applies - Radio buttons
document.querySelector("input[name='MHA_applies'][value='Yes']").checked = true;
// MHA_applies_details_text
// Couldn't get this to work using name= therefore tried id=MHA_applies_details_text
document.getElementById("MHA_applies_details_text").value =
  "It is a truth universally acknowledged, that a single man in possession of a good fortune, must be in want of a wife";
// LPA health/welfare phone
document.querySelector("input[name=lpa_health_telephone]").value =
  "01428 824824";
// Name family member
document.querySelector("input[name=family_member_name]").value =
  "Barnaby Price";
// Address family member
document.querySelector("input[name=family_member_address]").value =
  "2 Bobbin Close, Farnham";
// Friend phone
document.querySelector("input[name=family_member_telephone]").value =
  "01232 789987";
// welfare_consultant_name
document.querySelector("input[name=welfare_consultant_name]").value =
  "Wilson Phillips";
// welfare_consultant_address
document.querySelector("input[name=welfare_consultant_address]").value =
  "21 St Andrews Close, Ascot";
// welfare_consultant_telephone
document.querySelector("input[name=welfare_consultant_telephone]").value =
  "01428 824824";
// carer_name
document.querySelector("input[name=carer_name]").value = "Jeff Dalmer";
// carer_address
document.querySelector("input[name=carer_address]").value =
  "55 Sea Road, Eastbourne BN20 1QT";
// Carer phone
document.querySelector("input[name=carer_telephone]").value = "01232 789987";
// LPA_health_name
document.querySelector("input[name=lpa_health_name]").value = "Audrey Hepburn";
// lpa_health_address
document.querySelector("input[name=lpa_health_address]").value =
  "69 Connelly Road, Eastbourne BN20 1QT";
// lpa_health_telephone
document.querySelector("input[name=lpa_health_telephone]").value =
  "01232 789987";
// lpa_health_date
document.querySelector("input[name=lpa_health_date]").value = "12/12/2022";
// lpa_finance_name
document.querySelector("input[name=lpa_finance_name]").value = "Bonnie Langley";
// lpa_finance_address
document.querySelector("input[name=lpa_finance_address]").value =
  "123 Stewartstown Road, Polegate, BN20 1QT";
// lpa_finance_telephone
document.querySelector("input[name=lpa_finance_telephone]").value =
  "01232 789987";
// lpa_finance_date
document.querySelector("input[name=lpa_finance_date]").value = "12/11/2022";
// personal_welfare_deputy_name
document.querySelector("input[name=personal_welfare_deputy_name]").value =
  "Maria Ressa";
// personal_welfare_deputy_address
document.querySelector("input[name=personal_welfare_deputy_address]").value =
  "23 The Goffs, New Barnsley";
// personal_welfare_deputy_telephone
document.querySelector("input[name=personal_welfare_deputy_telephone]").value =
  "01232 789987";
// personal_welfare_deputy_date
document.querySelector("input[name=personal_welfare_deputy_date]").value =
  "12/11/2022";

// imca_name
document.querySelector("input[name=imca_name]").value = "Father Jack Hackett";
// imca_address
document.querySelector("input[name=imca_address]").value =
  "The Parochial House, Craggy Island";
// imca_telephone
document.querySelector("input[name=imca_telephone]").value = "01232 789987";
// personal_financial_deputy
document.querySelector("input[name=personal_financial_deputy]").value =
  "That money was only resting in my account";
// regular_visitors_name
document.querySelector("input[name=regular_visitors_name]").value =
  "Doc Holliday";
// Regular visitor phone
document.querySelector("input[name=regular_visitors_telephone]").value =
  "01232 789987";
// safeguarding_concerns
document.getElementById("safeguarding_concerns").value =
  "'Open the pod bay doors, HAL.'\n  'I'm sorry, Dave. I'm afraid I can't do that.'";

// Signature
document.querySelector("input[name=dols_request_signature]").value =
  "F Flintoff";

// dols_request_timestamp
// document.querySelector("input[name=dols_request_timestamp]").value =
//   "12/01/2023 1300hrs";
// dols_request_informed
document.querySelector(
  "input[name='dols_request_informed'][value='NO']"
).checked = true;
// racial_ethnic_national_origin
document.querySelector("select[name='racial_ethnic_national_origin']").value =
  "NK";
// sexual_orientation
document.querySelector("select[name='sexual_orientation']").value = "BI";
// persons_disability (checkbox) - now dropdown

document.querySelector(
  "select[name='persons_disability[]'] option[value=PDHI]"
).selected = true;
document.querySelector(
  "select[name='persons_disability[]'] option[value=PDVI]"
).selected = true;

// persons_beliefs (radio button)
document.querySelector(
  "input[name='persons_beliefs'][value='B']"
).checked = true;
// urgent_authorisation_required

// urgent_days
document.querySelector("select[name='urgent_days']").value = "3";
// extend_urgent_authorisation_granted_text
document.getElementById("extend_urgent_authorisation_granted_text").value =
  "Fortune, obdurate hitherto, showed her unexpected favour.";

// extend_urgent_authorisation_signed
document.querySelector("input[name=extend_urgent_authorisation_signed]").value =
  "Bob Paisley";

// ☞ Extension urgent_authorisation

// document.querySelector(
//   "input[name=extend_urgent_authorisation_signed_timestamps]"
// ).value = "14/01/2023 1400hrs";
