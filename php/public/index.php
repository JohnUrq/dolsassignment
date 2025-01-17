<?php

include("../private/initialize.php");


// put helpers.php and dbh etc reference them in initialize.php
// then initialise.php - reference at the top of files
view('src/views/header', ['title' => 'Log In']);

?>


  <!--  bg = background color -->
  <body class="dark:bg-gray-800 md:bg-gray-100">
   


<div class="container  mx-auto my-10 mt-10"> 



<!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 1                   -->
        <!-- Patient details             -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section" id="pt_details" mx-auto
        aria-label="Patient Details section">
          <div>
            <a
              class="w-full block max-w-sm p-6 bg-white border border-gray-400 rounded-lg shadow"
            >
              <h5
                class="w-full mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"
              >
                To the user/tester:
              </h5>
              <p
                class="w-full font-normal text-gray-700 dark:text-gray-400"
              ></p>
              <ul style="list-style-type: disc">
                <li>
                  These forms have been prepopulated to save you time in
                  completing them.
                </li>
                <li>
                 Please do not use real patient data when testing the forms.
                </li>
                <li>
                  Once you click 'submit' you should get a 'Success' message. (and the opportunity to play a little game as a reward for all your hard work!)
                </li>
                <li>
                  If you press the reset button it will clear all the fields for
                  you.
                </li>
                <li>
                  To start again with the fields pre-populated just refresh your
                  browser.
                </li>
                <li>
                  Required items are marked with an asterisk (*).
                </li>
              </ul>
              <br />
              <b>Thank you</b> for taking the time to help with this project.<br />
            </a>
          </div>
          <h3 class="text-3xl mt-4 font-bold dark:text-white">
            Patient details
          </h3>
          <!-- --------------------------- -->
          <!-- Is patient objecting?       -->
          <!-- --------------------------- -->
          <div class="mt-4 field pt_objection"
          id="pt_objection">
            <h3
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              Is this person objecting to the Deprivation of Liberty?
            </h3>
            <!-- Yes/No-->
            <ul
              class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
            >
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="pt_objection"
                    id="pt_objection"
                    type="radio"
                    value="YES"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Yes</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="pt_objection"
                    id="pt_objection"
                    type="radio"
                    checked
                    value="NO"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >No</label
                  >
                </div>
              </li>
            </ul>
            <br />
          </div>
          <!-- --------------------------- -->
          <!-- Full legal Name             -->
          <!-- --------------------------- -->
          <div class="mt-4 field pt_name"
          id="pt_name">
            <label
            
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Full name of person being deprived of liberty *</label
            >
            <input
              name="pt_name"
              type="text"
              id="pt_name"
              aria-describedby="helper-text-explanation"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Full name of person being deprived of liberty"
              placeholder="eg. Mr Joe Grant (aka Bill) Bloggs"
              
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              FULL LEGAL NAME including middle names. If different also note any
              nicknames or alternative names the person uses. Check with
              family/previous notes if you are unsure. Example: Mr Joe Grant
              (aka Bill) Bloggs.
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- Date of Birth -->
          <div class="mt-4 field pt_dob"
          id="pt_dob">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Date of Birth (or estimated age if unknown) *</label
            >
            <input
              name="pt_dob"
              type="text"
              id="pt_dob"
              aria-describedby="helper-text-explanation"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Date of birth"
              placeholder="eg. 31/01/1937"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Please check DoB is correct. Do not just copy from care plan;
              check other documents.
            </p>
          </div>
                    <!-- --------------------------- -->
          <!-- Estimated age -->
          <div class="mt-4 field pt_estimated_age"
          id="pt_estimated_age">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Estimated age (If no dob available) </label
            >
            <input
              name="pt_estimated_age"
              type="text"
              id="pt_estimated_age"
              aria-describedby="helper-text-explanation"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="eg. 89 years old"
              
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Only complete if DoB is unknown.
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- Patient sex -->
          <div class="mt-4 field pt_sex"
          id="pt_sex">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Patient sex</label
            >

            <select
              name="pt_sex"
              id="pt_sex"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            >
              <option disabled selected="">Choose patient sex</option>
              <option value="M">Male</option>
              <option value="F">Female</option>
              <option value="NB">Non-Binary</option>
            </select>
            <label
              for="pt_sex"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
              >Select an option</label
            >
          </div>

          <!-- --------------------------- -- -->
          <!-- patients full postal address -->
          <div class="mt-4 field pt_home_address"
          id="pt_home_address">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Patients usual home address or the home address they were
              admitted from if different to care home address.*
            </label>
            <input
              name="pt_home_address"
              type="text"
              id="pt_home_address"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Patients full postal address"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Please include patients full postal address
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- Date moved to nursing home/hospital -->
          <div class="mt-4 field date_moved_in"
          id="date_moved_in">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Date moved to nursing home/hospital *</label
            >
            <input
              name="date_moved_in"
              type="text"
              id="date_moved_in"
              aria-describedby="helper-text-explanation"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Date moved into nursing home"
              placeholder="eg. 22/02/2022"
              
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>
          <!-- ------------------------ -->
          <!-- Relevant Physical Medical History, Diagnosis -->
          <div class="mt-4 field pt_MH_physical[]"
          id="pt_MH_physical[]">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
         
              >Relevant Physical Medical History, Diagnosis *</label
            >
<select name="pt_MH_physical[]" multiple="" id="pt_MH_physical[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required aria-label="Relevant Physical Medical History, Diagnosis"*</label>


              <option disabled value="">
                Command/Ctrl and select for multiple entries
              </option>
              <option value="NRMH">No relevant medical History</option>
              <option value="AS">Asthma</option>
              <option value="HD">Heart Disease</option>
              <option value="KD">Kidney Disease</option>
            </select>
            <!-- Can these remain highlighted after selection? -->
            <!-- Do we need a free text box for other conditions not mentioned? -->
          </div>
          <!-- --------------------------- -->
          <!-- Relevant Mental Health History, Diagnosis -->
          <div class="mt-4 field pt_MH_mental[]"
          id="pt_MH_mental[]">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Relevant Mental Health History, Diagnosis *</label
            >
            <select
              name="pt_MH_mental[]"
              multiple
              id="pt_MH_mental[]"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Relevant Mental Health History, Diagnosis"
            >
              <option disabled value="">Choose from available options</option>
              <option value="NRMHH">No relevant mental health History</option>
              <option value="SCH">Dementia</option>
              <option value="SCH">Alzheimers</option>
              <option value="DEP">Depression</option>
              <option value="BIP">Bipolar Disorder</option>
              <option value="ND">Neurodiverse</option>
              <option value="SCH">Schizophrenic</option>
            </select>
            <!-- Can these remain highlighted after selection? -->
          </div>
          <!-- --------------------------- -->
          <!-- Medications taken by patient -->
          <div class="mt-4 field pt_meds[]" id="pt_meds[]">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              Medications taken by patient *
            </label>
            <select
              name="pt_meds[]"
              multiple
              id="pt_meds[]"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Medications taken by patient"
            >
              <option disabled value="">Choose from available options</option>
              <option value="NPM">No prescribed medication</option>
              <option value="NSAID">Non steroidal antiinflammatories</option>
              <option value="ADEP">Antidepressants</option>
              <option value="BPM">Blood Pressure meds</option>
              <option value="LIT">Lithium</option>
              <option value="AC">Anticoagulants</option>
              <option value="PRG">Pregabalin</option>
              <option value="AP">Antipsychotics</option>
            </select>
            <!-- Can these remain highlighted after selection? Yes and command and click will also unselect them.-->
          </div>
          <!-- --------------------------- -->
          <!-- Antipsychotic medications taken by patient -->
          <div class="mt-4 field pt_antipsychotic_meds[]"
            id="pt_antipsychotic_meds[]">
            <label for=""></label>
            <h3
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              id="pt_antipsychotic_meds[]"
            >
              Antipsychotic medications taken by patient *
            </h3>
            <select
              name="pt_antipsychotic_meds[]"
              multiple
              id="pt_antipsychotic_meds[]"
              type="dropdown"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Antipsychotic medications taken by patient"
            >
              <option disabled value="">Choose from available options</option>
              <option value="N/A">No antipsychotic medicine prescribed</option>
              <option value="RIS">Risperidone</option>
              <option value="CLO">Clozapine</option>
              <option value="PAL">Paliperidone</option>
              <option value="QUE">Quetiapine</option>
            </select>
            <!-- Can these remain highlighted after selection? -->
          </div>
                <!-- --------------------------- -->
          <!-- Sedating medication prescribed -->
          <div class="mt-4 field pt_sedating_meds[]"
          id="pt_sedating_meds[]">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Sedating medication prescribed *</label
            >

            <select
              name="pt_sedating_meds[]"
              id="pt_sedating_meds[]"
              type="dropdown"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              aria-label="Sedating medication prescribed"
              required
                            oninvalid="setCustomValidity('Please complete this box regarding sedating medicines.')"
              oninput="setCustomValidity('')"
              
            >
              <option disabled selected value="">
                Have sedating medications been prescribed?
              </option>
              <option value="NO">No sedating medication prescribed</option>
              <option value="PRO">Promethazine</option>
              <option value="DIA">Diazepam</option>
              <option value="MIR">Mirtazapine</option>
            </select>
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
              >Select an option</label
            >
          </div>

          <!-- --------------------------- -->
          <!-- Personal care/assistance required -->
          <div class="mt-4 field pt_personal_care[]"
          id="pt_personal_care[]">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Personal care required *</label
            >

            <select
              name="pt_personal_care[]"
              id="pt_personal_care[]"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Personal care required"
              
            >
              <option disabled selected value="">personal care required</option>
              <option value="ASS1">Assistance of one</option>
              <option value="ASS2">Assistance of two</option>
              <option value="ASS3">Assistance of many</option>
            </select>
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
              >Select an option</label
            >
          </div>
          <!-- --------------------------- -->
          <!-- Patient mobility -->
          <div class="mt-4 field pt_mobility"
          id="pt_mobility">
            <h3
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              Is the patient mobile?
            </h3>
            <ul
              class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
            >
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
               
              >
                <div class="flex items-center pl-3">
                  <input
                    name="pt_mobility"
                    id="1"
                    type="radio"
                    value="YES"
                    class="pt_mobility_checked w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Yes</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="pt_mobility"
                    id="2"
                    type="radio"
                    value="NO"
                    class="pt_mobility_checked w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >No</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="pt_mobility"
                    id="3"
                    type="radio"
                    value="MIN"
                    class="pt_mobility_checked w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Minimal prompts</label
                  >
                </div>
              </li>
            </ul>
          </div>
          <!-- --------------------------- -->
          <!-- pt_sensory_loss -->
          <!-- checkbox multiple items -->
          <!-- --------------------------- -->
          <div class="mt-4 field pt_sensory_loss[]" id="pt_sensory_loss[]">
                <label
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >
                  Does the patient have sensory loss? *
                </label>

                <select
                  name="pt_sensory_loss[]"
                  id="pt_sensory_loss[]"
                  type="dropdown"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  required
                  aria-label="Does the patient have sensory loss?"
                >
                  <option disabled selected value="" required>
                    Describe any sensory loss experienced by the patient
                  </option>
                  <option value="NO">No sensory loss</option>
                  <option value="HOH">Hard of hearing</option>
                  <option value="RB">Registered Blind</option>
                  <option value="GLA">Glasses</option>
                  <option value="HA">Hearing aids</option>
                </select>

                <p
                  id="helper-text-explanation"
                  class="mt-2 text-sm text-gray-500 dark:text-gray-400"
                >
                  Select whichever options apply.
                </p>
              </div>
          <!-- --------------------------- -->
          <!-- Patients communication preferences -->
          <div class="mt-4 field pt_comms_pref[]" id="pt_comms_pref[]">
            <h3
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              Patients communication preferences *
            </h3>

            <select
              name="pt_comms_pref[]"
              multiple
              id="pt_comms_pref[]"
              type="dropdown"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Patients communication preferences"
            >
              <option disabled value="">Patient communication preferences</option>
              <option value="N/A">Not applicable</option>
              <option value="INT">Interpreter</option>
              <option value="CB">Communication board</option>
              <option value="BSL">Sign Language</option>
            </select>

            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Select whichever options apply.
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- patient compliance -->
            <div class="mt-4 field pt_compliance"
            id="pt_compliance"
            required>
            <h3
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              Is the patient compliant?
            </h3>
            <ul
              class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
              
            >
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="pt_compliance"
                    id="pt_compliance"
                    type="radio"
                    value="YES"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Yes</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="pt_compliance"
                    id="pt_compliance"
                    type="radio"
                    value="NO"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 mb-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >No</label
                  >
                </div>
              </li>
            </ul>
            </div>
            <!-- --------------------------- -->
            <!-- feedback                   -->
            <div>
              <label
                for=""
                id="pt_details_message_feedback"
                class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                >Thank you for helping with my project. Any feedback on the
                patient details section would be much appreciated.</label
              >
              <textarea
                name="pt_details_message_feedback"
                id="pt_details_message_feedback"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your observations here..."
              ></textarea>
            </div>
            <!-- --------------------------- -->
            <!-- buttons                     -->
            <!--NB - the errorCheck() function is called in script.js line 277 by an event handler for class="next_page_btn" -->
            <div>
              <button
                type="button"
                id="next_page_btn"
                class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
                onclick="showDetails(careHomeDetails)">

              
                Next page
              </button>
            </div>
          </div>
        
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 2                   -->
        <!-- Care home/Hospital Details  -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section care_home_details" id="care_home_details"
        aria-label="Care Home Details section">
         
           <h3 class="text-3xl font-bold dark:text-white">
            Care home/Hospital Details
          </h3>
          <!-- care home name/address -->
          <div class="mt-4 field care_home_address"
          id="care_home_address">
     
            <label
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Name and address of the care home or hospital requesting this
              authorisation *
            </label>
            <input
              name="care_home_address"
              type="text"
              id="care_home_address"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Name and address of the care home or hospital requesting this authorisation."
            
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Please include your full postal address
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- phone number -->
          <div class="mt-4 field care_home_tele"
          id="care_home_tele"
          required>
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Phone number *</label
            >
            <input
              name="care_home_tele"
              type="phone"
              id="care_home_tele"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Care home phone number"
              placeholder="01323 867951"
              pattern="[0-9]{5} [0-9]{6}"
           
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Full telephone number and extension number if needed.
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- Care home contact first name -->
          <div class="mt-4 field care_home_contact"
          id="care_home_contact">
            <label
              for="first_name"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >First name *</label
            >
            <input
              name="care_home_contact"
              type="text"
              id="first_name"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Care home contact name"
              placeholder="Joan Smith"
              
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Care home contact name.(This person needs to be available, know
              about DoLS and the application being made. )
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- email address -->
          <div class="mt-4 field care_home_email"
           id="care_home_email">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Email address *</label
            >
            <input
              name="care_home_email"
              type="email"
              id="care_home_email"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Care home email"
              placeholder="john.doe@nhs.net"
              
            />

            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Email address. This should be monitored and accessible as may be
              used for follow-up. Check spelling.
            </p>
          </div>
          <!-- --------------------------- -->
          <!-- Attach copy of patients care plan -->
          <!-- --------------------------- -->
          <div class="field pt_care_plan">
          <label
              name="pt_care_plan"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              for="file_input"
              >Attach copy of patients care plan</label
            >
            <input
              name="pt_care_plan"
              class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
              id="file_input"
              type="file"
            />
            </div>
          <!-- -------------------------- -->
          <!-- feedback                   -->
          <div>
            <label
              for=""
              name="care_home_details_message_feedback"
              id="care_home_details_message_feedback"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >Thank you for helping with my project. Any feedback on the care
              home details section would be much appreciated.</label
            >
            <textarea
              name="care_home_details_message_feedback"
              id="message"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your observations here..."
            ></textarea>
          </div>
          <!-- ----------------- -->
          <!-- buttons           -->
          <div>
            <button
              type="button"
              id="next_page_btn"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
              onclick="showDetails(authDetails)"
            >
              Next page
            </button>
          </div>
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
              onclick="showDetails(ptDetails); resetDate();"
            >
              Previous page
            </button>
          </div>
        </div>
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 3                   -->
        <!-- Authorisation Purpose       -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section auth_details" id="auth_details"
        aria-label="Authorisations section">
          <h3 class="text-3xl font-bold dark:text-white">
            Authorisation Purpose
          </h3>
          <!-- authorisation type - first/repeat etc -->
          <div class="mt-4 field">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Type of authorisation - Standard (First), Repeat or
              Urgent.*</label
            >

            <select
              name="authorisation_type"
              id="authorisation_type"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Type of Authorisation"
              
            >
              <option selected value="">Choose authorisation type</option>
              <option value="FIRST">Standard (First)</option>
              <option value="REPEAT">Repeat</option>

              <option value="URG_STA">Urgent + standard</option>
              <option value="URG_EXT">Urgent + extension</option>
              <option value="URG_EXT_STA">Urgent + extension + standard</option>
            </select>
          </div>

          <!-- --------------------------- -->
          <!-- Authorisation date -->
          <!-- date from script.js -->
          <!-- --------------------------- -->
          <div class="mt-4 field date authorisation_date"
          id="authorisation_date">
            <label
            name="authorisation_date"
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Today's date:
            </label>
            <input
              name="authorisation_date"
              type="text"
              id="date authorisation_date"
              class="date block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              onchange="resetDate()"
              
            />
            
          </div>

          <!-- --------------------------- -->
          <!-- funding type -->
          <!-- --------------------------- -->
          <div class="mt-4 field funding_type"
          id="funding_type">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              
              >Funding type</label
            >
            <select
              name="funding_type"
              id="funding_type"
              aria-label="Funding Type"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
            >
              <option disabled value="">Type of funding for care</option>
              <option value="CCG">CCG</option>
              <option value="LA">Local Authority</option>
              <option value="SEL">Self-funding</option>
              <option value="OTH">Insurance/other</option>
            </select>
          </div>
          <!-- --------------------------- -->
          <!-- Type of restrictions on liberty in place -->
          <!-- --------------------------- -->
          <div
            class="mt-4 field restrictions_in_place[]"
            id="restrictions_in_place[]"
            aria-label="Restrictions in place">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Restrictions in place *</label
            >
            <select
              name="restrictions_in_place[]"
              multiple
              id="restrictions_in_place[]"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              
            >
              <option disabled value="">Choose from available options</option>
              <option value="N/A">No restrictions in place</option>
              <option value="LD">Locked door</option>
              <option value="RC">Regular checks</option>
              <option value="MITTS">
                Mittens to minimise risk of removing tubes
              </option>
              <option value="BR">Bedrails</option>
              <option value="CM">Covert medicines</option>
              <option value="SUP">Supervision</option>

              <option value="RES">Restraints</option>
            </select>
            <!-- Can these remain highlighted after selection? -->
          </div>
          <!-- --------------------------- -->
          <!-- Have less restrictive options been discussed or considered?-->
          <!-- --------------------------- -->

<!-- Have less restrictive options been discussed or considered?-->
<div class="mt-4 field less_restrictive_options" id="less_restrictive_options"
aria-label="Have less restrictive options been discussed or considered?">
  <h3 class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" >Have less restrictive options been discussed or considered? *</h3>
  <!-- Less restrictive options radio buttons -->
  <div class="flex items-center mb-4">
    <input name="less_restrictive_options" 
    aria-label="Have less restrictive options been discussed or considered?" id="less_restrictive_options_yes" type="radio" value="Y" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
    <label for="less_restrictive_options_yes" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
  </div>
  <div class="flex items-center">
    <input name="less_restrictive_options" id="less_restrictive_options_no" type="radio" value="N" required class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" />
    <label for="less_restrictive_options_no" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
  </div>
</div>



          <!-- --------------------------- -->
          <!-- People informed of DOLS request -->
          <!-- --------------------------- -->
          <div class="mt-4 field persons_informed[]"
          id="persons_informed[]">
            <h3
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              People informed of DOLS request.
            </h3>
            <!-- family
          Friend
          LPA -->
            <label class="inline-flex relative items-center cursor-pointer">
              <input
                name="persons_informed[]"
                type="checkbox"
                value="FAM"
                class="sr-only peer"
              />
              <div
                class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
              ></div>
              <span
                class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Family</span
              >
            </label>
            
            <label class="inline-flex relative items-center cursor-pointer">
              <input
                name="persons_informed[]"
                type="checkbox"
                value="Friend"
                class="sr-only peer"
              />
              <div
                class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
              ></div>
              <span
                class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Friend</span
              >

              >
            </label>
            <br />
            <label class="inline-flex relative items-center cursor-pointer">
              <input
                name="persons_informed[]"
                type="checkbox"
                value="LPA"
                class="sr-only peer"
              />
              <div
                class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"
              ></div>
              <span
                class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300"
                >LPA for health and welfare</span
              >
            </label>
          </div>
          <!-- feedback -->
          <div>
            <label
              for=""
              name="authorisations_message_feedback_details"
              id="authorisations_message_feedback_details"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >Thank you for helping with my project. Any feedback on the
              Authorisations section would be much appreciated.</label
            >
            <textarea
              name="authorisations_message_feedback_details"
              id="authorisations_message_feedback_details"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your observations here..."
            ></textarea>
          </div>
          <!-- ---------------- -->
          <!-- buttons -->
          <!-- ---------------- -->
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
              onclick="showDetails(interestedPersonDetails)"
            >
              Next page
            </button>
          </div>
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
              onclick="showDetails(careHomeDetails)"
            >
              Previous page
            </button>
          </div>
        </div>
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 4                   -->
        <!-- Interested persons/Consultations -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section interested_persons_details" id="interested_persons_details"
        aria-label="Interested Persons section">
          <div>
            <h3 class="text-3xl font-bold dark:text-white">
              Interested persons/Consultations
            </h3>
          </div>
          <!-- --------------------------- -->
          <!-- family member name -->
          <!-- Family member or friendShort text. -->
          <div class="mt-4 field family_member_name"
          id="family_member_name">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Name of family member or friend *
            </label>
            <input
              name="family_member_name"
              id="family_member_name"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="Name of family member or friend"
              placeholder="Name of family member or friend"
              
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>
          <!-- --------------------------- -->

          <!-- --------------------------- -->
          <!-- family member address -->

          <div class="mt-4 field family_member_address"
          id="family_member_address">
            <label
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Address of family member or friend
            </label>
            <input
              name="family_member_address"
              type="text"
              id="family_member_address"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Address of family member/friend"
              
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>
          <!-- --------------------------- -->

          <!-- --------------------------- -->
          <!-- family member telephone -->
          <div class="mt-4 field family_member_telephone"
          id="family_member_telephone">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Phone number</label
            >
            <input
              name="family_member_telephone"
              type="phone"
              id="family_member_telephone"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="01323 867951"
              pattern="[0-9]{5} [0-9]{6}"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Full telephone number including area code.
            </p>
          </div>

          <!-- --------------------------- -->
          <!-- --------------------------- -->
          <!-- welfare consultant name -->

          <div class="mt-4 field welfare_consultant_name"
          id="welfare_consultant_name">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Anyone named by the person as someone to be consulted about their
              welfare
            </label>
            <input
              name="welfare_consultant_name"
              type="text"
              id="welfare_consultant_name"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Welfare consultant name"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->

          <!-- --------------------------- -->
          <!-- welfare consultant address -->

          <div class="mt-4 field welfare_consultant_address"
          id="welfare_consultant_address">
            <label
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Address of welfare consultant
            </label>
            <input
              name="welfare_consultant_address"
              id="welfare_consultant_address"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Welfare consultant address"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->

          <!-- --------------------------- -->
          <!-- welfare consultant telephone -->

          <div class="mt-4 field welfare_consultant_telephone"
          id="welfare_consultant_telephone">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Phone number</label
            >
            <input
              name="welfare_consultant_telephone"
              type="phone"
              id="welfare_consultant_telephone"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="01323 867951"
              pattern="[0-9]{5} [0-9]{6}"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Full telephone number and extension number if needed.
            </p>
          </div>

          <!-- --------------------------- -->
          <!-- --------------------------- -->
          <!-- carer name -->

          <div class="mt-4 field carer_name"
          id="carer_name">
            <label
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Name of carer
            </label>
            <input
              name="carer_name"
              id="carer_name"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Name of carer"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- carer address -->

          <div class="mt-4 field carer_address"
          id="carer_address">
            <label
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Address of carer
            </label>
            <input
              name="carer_address"
              id="carer_address"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Carers address"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- carer telephone -->

          <div class="mt-4 field carer_telephone"
          id="carer_telephone">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Phone number</label
            >
            <input
              name="carer_telephone"
              type="phone"
              id="carer_telephone"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="01323 867951"
              pattern="[0-9]{5} [0-9]{6}"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Full telephone number and extension number if needed.
            </p>
          </div>

          <!-- --------------------------- -->
          <!-- Name of person with Lasting Power of Attorney for Health and wellbeing -->

          <div class="mt-4 field lpa_health_name"
          id="lpa_health_name">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Name of person with Lasting Power of Attorney for Health and
              Welfare
            </label>
            <input
              name="lpa_health_name"
              id="lpa_health_name"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="LPA name"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- Address of person with Lasting Power of Attorney for Health and wellbeing -->

          <div class="mt-4 field lpa_health_address"
          id="lpa_health_address">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Address of person with Lasting Power of Attorney for Health and
              Welfare
            </label>
            <input
              name="lpa_health_address"
              type="text"
              id="lpa_health_address"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Address"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- Telephone number of person with Lasting Power of Attorney for Health and wellbeing -->

          <div class="mt-4 field lpa_health_telephone"
          id="lpa_health_telephone">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Phone number</label
            >
            <input
              name="lpa_health_telephone"
              type="phone"
              id="lpa_health_telephone"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="01323 867951"
              pattern="[0-9]{5} [0-9]{6}"
              
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Full telephone number and extension number if needed.
            </p>
          </div>

          <!-- --------------------------- -->
          <!-- Date of LPA for Health and Welfare -->
          <!-- Date picker -->

          <div class="relative field lpa_health_date"
          id="lpa_health_date">
            <label
              name="lpa_health_date"
              id="lpa_health_date"
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Date of LPA for Health & Welfare (Please have paperwork ready for
              BIA to check)</label
            >
            <div
              class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
            >
              <svg
                aria-hidden="true"
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              name="lpa_health_date"
              id="lpa_health_date
              datepicker=""
              type="text"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
              placeholder="Select date"
            />
          </div>

          <!-- --------------------------- -->
          <!-- Name of person with Lasting Power of Attorney for Finance -->

          <div class="mt-4 field lpa_finance_name"
          id="lpa_finance_name">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Name of person with Lasting Power of Attorney for Finance.
            </label>
            <input
              name="lpa_finance_name"
              id="lpa_finance_name"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="LPA name"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- Address of person with Lasting Power of Attorney for Finance -->

          <div class="mt-4 field lpa_finance_address"
          id="lpa_finance_address">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Address of person with Lasting Power of Attorney for Finance
            </label>
            <input
              name="lpa_finance_address"
              id="lpa_finance_address"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="LPA address"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- Telephone contact details for person with Legal Power of Attorney for Finance -->

          <div class="mt-4 field lpa_finance_telephone"
                        id="lpa_finance_telephone">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Phone number</label
            >
            <input
              name="lpa_finance_telephone"
              type="phone"
              id="lpa_finance_telephone"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="01323 867951"
              pattern="[0-9]{5} [0-9]{6}"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Full telephone number and extension number if needed.
            </p>
          </div>

          <!-- --------------------------- -->
          <!-- Date of LPA  for Finance (Please have paperwork ready for BIA to check) -->
          <!-- Date picker -->

          <div class="relative field lpa_finance_date"
          id="lpa_finance_date">
            <label
              name="lpa_finance_date"
              id="lpa_finance_date"
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Date of LPA for Finance (Please have paperwork ready for BIA to
              check)</label
            >
            <div
              class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
            >
              <svg
                aria-hidden="true"
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              name="lpa_finance_date"
              id="lpa_finance_date"
              datepicker=""
              type="text"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
              placeholder="Select date"
            />
          </div>

          <!-- --------------------------- -->
          <!-- Name of any Personal Welfare Deputy appointed for the person by the Court of Protection -->

          <div class="mt-4 field personal_welfare_deputy_name"
          id="personal_welfare_deputy_name">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Name of any Personal Welfare Deputy appointed for the person by
              the Court of Protection.
            </label>
            <input
              name="personal_welfare_deputy_name"
            id="personal_welfare_deputy_name"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Personal Welfare Deputy name"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- Address of any Personal Welfare Deputy -->

          <div class="mt-4 field personal_welfare_deputy_address"
          id="personal_welfare_deputy_address">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Address of any Personal Welfare Deputy
            </label>
            <input
              name="personal_welfare_deputy_address"
              id="personal_welfare_deputy_address"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Personal Welfare Deputy name"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>

          <!-- --------------------------- -->
          <!-- Telephone contact for Personal Welfare Deputy -->

          <div class="mt-4 field personal_welfare_deputy_telephone"
          id="personal_welfare_deputy_telephone">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Phone number</label
            >
            <input
              name="personal_welfare_deputy_telephone"
              type="phone"
              id="personal_welfare_deputy_telephone"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="01323 867951"
              pattern="[0-9]{5} [0-9]{6}"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 text-sm text-gray-500 dark:text-gray-400"
            >
              Full telephone number and extension number if needed.
            </p>
          </div>

          <!-- --------------------------- -->
          <!-- Date of Appointment for Personal Welfare Deputy (Please have paperwork ready for BIA to check) -->

          <div class="relative field personal_welfare_deputy_date"
          id="personal_welfare_deputy_date">
            <label
              name="personal_welfare_deputy_date"
              id="personal_welfare_deputy_date"
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Date of Appointment for Personal Welfare Deputy (Please have
              paperwork ready for BIA to check)</label
            >
            <div
              class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
            >
              <svg
                aria-hidden="true"
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              name="personal_welfare_deputy_date"
              id="personal_welfare_deputy_date"
              datepicker=""
              type="text"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
              placeholder="Select date"
            />
          </div>

          <!-- --------------------------- -->
          <!-- Personal Financial Deputy -->

          <div class="mt-4 field personal_financial_deputy"
          id="personal_financial_deputy">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Personal Financial Deputy
            </label>
            <input
              name="personal_financial_deputy"
              id="personal_financial_deputy"
              type="text"
              class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Personal Financial Deputy name"
            />
            <p
              id="helper-text-explanation"
              class="mt-2 mb-4 text-sm text-gray-500 dark:text-gray-400"
            ></p>
          </div>
          <!-- --------------------------- -->
          <!-- imca necessary -->
          <div class="field imca_necessary"
          aria-label="IMCA Necessary? ">
            <label
              for="t"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Is an IMCA necessary?
            </label>
            <div>
              <ul
                class="field text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
              >
                <li
                  class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
                >
                  <div class="flex items-center pl-3">
                    <input name="imca_necessary" value="NO" type="hidden" />
                    <!-- Hidden field to avoid error in store data (Provides fallback value when checkbox isn't ticked) -->
                    <input
                      name="imca_necessary"
                      id="imca_necessary"
                      type="checkbox"
                      value="YES"
                      class="urg_auth_check w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                      onclick="toggleElement(this,'imca_details')"
                    />
                    <label
                      for=""
                      class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                      >Is it necessary for an IMCA to be instructed?</label
                    >
                  </div>
                </li>
              </ul>
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-500"
              >
                <b>Yes</b> - Apart from professionals and other people who are
                paid to provide care or treatment, this person has no-one whom
                it is appropriate to consult about what is in their best
                interests. Or <b>No</b> - There is someone whom it is
                appropriate to consult about what is in the persons best
                interests who is neither a professional nor is being paid to
                provide care or treatment and their contact details are listed
                in the following section.
              </p>
            </div>

            <!-- --------------------------- -->
            <!-- Apart from professionals and other people who are paid to provide care or treatment,

          </div>
          <div class="hidden" id="imca_details">
            <!-- --------------------------- -->
            <!-- Name of IMCA instructed -->

            <div class="mt-4 field">
              <label
                for="large-input"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Name of IMCA instructed
              </label>
              <input
                name="imca_name"
                id="imca_name"
                type="text"
                class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="IMCA name"
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              ></p>
            </div>

            <!-- --------------------------- -->
            <!-- Address of IMCA instructed -->

            <div class="mt-4 field">
              <label
                for="large-input"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                id="imca_details"
                >Address of IMCA instructed
              </label>
              <input
                name="imca_address"
                type="text"
                class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                id="imca_details"
                placeholder="IMCA address"
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              ></p>
            </div>

            <!-- --------------------------- -->
            <!-- Telephone contact details for IMCA -->

            <div class="mt-4 field imca_telephone">
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Phone number</label
              >
              <input
                name="imca_telephone"
                type="phone"
                id="imca_telephone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="01323 867951"
                pattern="[0-9]{5} [0-9]{6}"
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              >
                Full telephone number and extension number if needed.
              </p>
            </div>
          </div>

            <!-- --------------------------- -->
            <!-- feedback -->
          <div>
            <label
              for=""
              name="interested_persons_message_feedback_details"
              id="interested_persons_message_feedback_details"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >Thank you for helping with my project. Any feedback on the
              interested persons section would be much appreciated.</label
            >
            <textarea
              name="interested_persons_message_feedback_details"
              id="message"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your reflections here..."
            ></textarea>
          </div>

            <!-- --------------------------- -->
            <!-- buttons -->
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
              onclick="showDetails(advanceDecisionDetails)"
            >
              Next page
            </button>
          </div>
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
              onclick="showDetails(authDetails)"
            >
              Previous page
            </button>
          </div>
        </div>
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 5                   -->
        <!-- Advance decision             -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section" id="advance_decision_details"
        aria-label="Advance Decision section">
          <!-- ----------------------------- -->
          <!-- Is there an advance decision? -->
          <div>
            <h3 class="field mt-4 text-3xl font-bold dark:text-white">
              Advance Decision
            </h3>

            <div class="mt-4">
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Is there a valid and applicable advance decision?
              </label>
              <select
                name="advance_decision"
                id="advance_decision"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              >
                <option>Which of the following statements applies?</option>
                <option value="ADY">
                  Yes - The person has made an Advance Decision that is valid
                  and applicable to some or all of the treatment
                </option>
                <option value="ADN">
                  No - The managing Authority is not aware that the person has
                  made an advance decision that may be valid and applicable to
                  some or all of the treatment
                </option>
                <option value="ADNA">
                  N/A - The proposed deprivation of liberty is not for the
                  purpose of giving treatment
                </option>
              </select>
            </div>
          </div>

          <!-- --------------------------- -->
          <!-- Is the person subject to some element of the Mental Health Act -->

          <div>
            <h3 class="field text-3xl font-bold dark:text-white">
              Does the Mental Health Act apply?
            </h3>
            <!-- --------------------------- -->
            <!-- Is the person subject to some element of the Mental Health Act -->
            <!-- Checkbox -->
            <div class="mt-4">
              <h3
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >
                Does the Mental Health Act apply in this case?
              </h3>
              <ul
                class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
              >
                <li
                  class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
                >
                  <div class="flex items-center pl-3">
                    <input
                      name="MHA_applies"
                      id="MHA_applies"
                      type="radio"
                      value="Yes"
                      class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                    />
                    <label
                      for=""
                      class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                      >Yes</label
                    >
                  </div>
                </li>
                <li
                  class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
                >
                  <div class="flex items-center pl-3">
                    <input
                      name="MHA_applies"
                      id="MHA_applies"
                      type="radio"
                      checked
                      value="No"
                      class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                    />
                    <label
                      for=""
                      class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                      >No</label
                    >
                  </div>
                </li>
              </ul>
              <br />
            </div>
            <!-- --------------------------- -->

            <!-- --------------------------- -->
            <!-- More details, e.g. application, order, direction, community treatment order, guardianship -->
            <!-- Long text -->

            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >More details, e.g. application, order, direction, community
              treatment order, guardianship</label
            >
            <textarea
              name="MHA_applies_details_text"
              id="MHA_applies_details_text"
              type="text"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Details regarding MHA"
            ></textarea>

            <!-- --------------------------- -->
          </div>
          <br />
          <!-- --------------------------- -->
          <!-- other relevant information -->
          <div>
            <h3 class="field text-3xl font-bold dark:text-white">
              Other revelant Information
            </h3>
            <!-- --------------------------- -->
            <!-- Please insert name of any regular visitors -->
            <!-- Short text -->

            <div class="mt-4">
              <label
                for="large-input"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Please insert name of any regular visitors
              </label>
              <input
                name="regular_visitors_name"
                type="text"
                class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Regular visitors name"
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              ></p>
            </div>

            <!-- --------------------------- -->
            <!-- --------------------------- -->
            <!-- Telephone contact details for any regular visitors-->
            <!-- Short text -->

            <div class="field mt-4 regular_visitors_telephone">
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Phone number</label
              >
              <input
                name="regular_visitors_telephone"
                type="phone"
                id="regular_visitors_telephone"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="01323 867951"
                pattern="[0-9]{5} [0-9]{6}"
                
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              >
                Full telephone number including area code.
              </p>
            </div>

            <!-- --------------------------- -->
          </div>
          
          <!-- --------------------------- -->
          <!-- Safeguarding                -->
          <div>
            <h3 class="field text-3xl font-bold dark:text-white">Safeguarding</h3>
            <!-- --------------------------- -->
            <!-- Other relevant issues or safeguarding concerns-->
            <!-- Long text -->
            <br />
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >Other relevant issues or safeguarding concerns</label
            >
            <textarea
              name="safeguarding_concerns"
              id="safeguarding_concerns"
              type="text"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Details regarding safeguarding."
            ></textarea>

            <!-- --------------------------- -->
          </div>
          <!-- ------------------------ -->
          <!-- Feedback                 -->
          <div>
            <label
              for=""
              name="advance_decision_feedback_details"
              id="message_feedback_advance_decision_details"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >Thank you for helping with my project. Any feedback on the
              Advance Decision section would be most welcome.</label
            >
            <textarea
              name="advance_decision_feedback_details"
              id="advance_decision_feedback_details"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your observations here..."
            ></textarea>
          </div>
          <!-- ------------------------ -->
          <!-- Buttons                -->
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
              onclick="showDetails(signatureDetails)"
            >
              Next page
            </button>
          </div>
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
              onclick="showDetails(interestedPersonDetails)"
            >
              Previous page
            </button>
          </div>
        </div>
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 6                   -->
        <!-- Signature and date           -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section date" id="signature_details"
        aria-label="Signature/Date section">
          <h3 class="text-3xl font-bold dark:text-white">Signature and date</h3>
          <!-- --------------------------- -->
          <!-- Signature (type your name) -->
          <!-- Short text -->
          <div class="field mt-4 dols_request_signature">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Signature *
            </label>
            <input
              name="dols_request_signature"
              type="text"
              id="dols_request_signature"
              aria-describedby="helper-text-explanation"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
              aria-label="DoLS request signature"
              placeholder="(Type your name)"
              
            />
          </div>
          <!-- --------------------------- -->
          <!-- Date of DoLs request -->
          <!--  Date from script.js -->
          <!-- would there ever be a case of this being done retrospectively? in which case the date picker would be more apt. -->
          <div class="mt-4 field date">
            <label
            name="dols_request_date"
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Today's date:
            </label>
            <input
              name="dols_request_date"
              type="text"
              id="date dols_request_date"
              class="date block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              
            />
            
          </div>
          <!-- <div class="field relative">
            <label
              name="dols_request_date"
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Date of DolS request</label
            >
            <div
              class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
            >
              <svg
                aria-hidden="true"
                class="w-5 h-5 text-gray-500 dark:text-gray-400"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              name="dols_request_date"
              datepicker=""
              type="text"
              class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
              placeholder="Select date"
            />
          </div> -->

          <!-- --------------------------- -->
          <!-- dols request timestamp input here -->
          <!-- added automatically by database -->

          <!-- --------------------------- -->
          <!-- Have all interested parties been informed of the request for DoLS authorisation? -->
          <!-- Checkbox -->

          <div class="field mt-4"
          aria-label="Have all interested parties been informed?">
            <h3
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              required
              
            >
              Have all interested parties been informed of the request for DoLS
              authorisation? *
            </h3>
            <ul
              class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
              required
            >
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="dols_request_informed"
                    id="dols_request_informed"
                    type="radio"
                    value="YES"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Yes</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="dols_request_informed"
                    id="dols_request_informed"
                    type="radio"
                    checked
                    value="NO"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >No</label
                  >
                </div>
              </li>
            </ul>
          </div>
          <!-- ------------------------------------------------------ -->
          <!-- Text area for response regarding informing interested paties. -->
          <div>
            <label
              for=""
              id="reasons_not_informed"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >If all persons have <u><b>not</b></u> been informed please record reasons.</label
            >
            <textarea
              name="reasons_not_informed"
              type="text"
              id="reasons_not_informed"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your reasons here..."
            ></textarea>
          </div>
          <!-- ------------------------- -->
          <!-- feedback                  -->
          <div>
            <label
              for=""
              id="signature_date_message_feedback_details"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >Thank you for helping with my project. Any feedback on the
              Signature/Date section would be most welcome.</label
            >
            <textarea
              name="signature_date_message_feedback_details"
              id="signature_date_message_feedback_details"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your observations here..."
            ></textarea>
          </div>
          <!-- ------------------------- -->
          <!-- buttons                  -->
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
              onclick="showDetails(dataCollectionDetails)"
            >
              Next page
            </button>
          </div>
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
              onclick="showDetails(advanceDecisionDetails)"
            >
              Previous page
            </button>
          </div>
        </div>
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 7                   -->
        <!-- Data collection             -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section" id="data_collection_details"
        aria-label="Data Collection section">
          <div>
            <h3 class="mb-4 text-3xl font-bold dark:text-white">Data Collection</h3>
            <div>
              <!-- --------------------- -->
              <!-- Racial profiling      -->
              <h8 class="field text-3l font-bold dark:text-white"
                >Racial profiling</h8
              >
              <!-- --------------------------- -->
              <!-- Please select the persons racial, ethnic or national origin. -->
              <!-- White, Mixed/Multiple ethnic groups, Asian/Asian British, Black/Black British, Not Stated, Undeclared/Not Known, Other -->
              <!-- Dropdown -->

              <div >
                <label
                  for=""
                  class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Please select the persons racial, ethnic or national
                  origin.</label
                >

                <select
                  name="racial_ethnic_national_origin"
                  id="racial_ethnic_national_origin"
                  type="dropdown"
                  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                  required
                >
                  <option selected="">
                    Racial, ethnic or national origin.
                  </option>
                  <option value="White">White</option>
                  <option value="Mixed">Mixed/Multiple ethnic groups</option>
                  <option value="Asian">Asian/Asian British</option>
                  <option value="Black">Black/Black British</option>
                  <option value="N/S">Not Stated</option>
                  <option value="NK">Undeclared/Not Known</option>
                  <option value="Oth">Other</option>
                </select>
                <p
              id="helper-text-explanation"
              class="mb-4 text-sm text-gray-500 dark:text-gray-400"
            >
              Select an option
            </p>
              </div>

              <!-- --------------------------- -->
            </div>
            <h8 class="mt-4 text-3l font-bold dark:text-white"
              >Sexual orientation</h8
            >
            <!-- --------------------------- -->
            <!-- Please tick the persons sexual orientation. -->
            <!-- Heterosexual, Homosexual, Bisexual, Undeclared, Not Known -->
            <!-- Dropdown -->

            <div >
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Please tick the persons sexual orientation</label
              >

              <select
                name="sexual_orientation"
                id="sexual_orientation"
                type="dropdown"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required
              >
                <option disabled selected="">Sexual orientation?</option>
                <option value="HE">Heterosexual</option>
                <option value="HO">Homosexual</option>
                <option value="BI">Bisexual</option>
                <option value="U/D">Undeclared</option>
                <option value="NB">Non Binary</option>
                <option value="N/K">Not known</option>
              </select>
               <p
              id="helper-text-explanation"
              class="mb-4 text-sm text-gray-500 dark:text-gray-400"
            >
              Select an option
            </p>
            </div>
          </div>
          <!-- --------------------------- -->
          <!-- disability                  -->
          <div>
            <h8 class="mt-4 text-3l font-bold dark:text-white"
              >Persons disability</h8
            >
            <!-- --------------------------- -->
            <!-- Please advise of any disabilities. -->
            <!-- Physical Disability - Hearing Impairment, Physical Disability - Visual Impairment, Physical Disability - Dual Sensory Loss, Physical Disability - Other, Mental Health needs - Dementia, Mental Health needs - other, Learning Disability, Other Disability, No Disability -->
            <!-- Checkboxes -->

          <div class=" persons_disability[]">
            <label
              for=""
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
              >Please select the persons racial, ethnic or national origin.</label
            >

            <select
              name="persons_disability[]"
              id="persons_disability[]"
              type="dropdown"
              class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              required
            >
              <option disabled selected="">Persons disability, if any.</option>
              <option value="N/A">No Disability</option>
              <option value="PDHI">Physical Disability - Hearing Impairment</option>
              <option value="PDVI">Physical Disability - Visual Impairment</option>
              <option value="PDDSL">Physical Disability - Dual Sensory Loss</option>
              <option value="PDO">Physical Disability - Other</option>
              <option value="MHD">Mental Health needs - Dementia</option>
              <option value="MHO">Mental Health needs - other</option>
              <option value="LD">Learning Disability</option>
              <option value="OD">Other Disability</option>
            </select>
      <p
              id="helper-text-explanation"
              class="mb-4 text-sm text-gray-500 dark:text-gray-400"
            >
              Select an option
            </p>
          </div>

          <!-- --------------------------- -->
          <!-- Religion                    -->
          <h8 class="mt-4 text-3l font-bold dark:text-white"
            >Persons Religion/Beliefs</h8
          >
          <!-- --------------------------- -->
          <!-- Place a cross in one box only. -->
          <!-- Checkbox -->
          <!-- None, Not Stated, Christian, Buddhist, Hindu, Jewish, Muslim, Sikh,
            Any Other Religion -->

          <div >
            <h3
              class="block text-sm font-medium text-gray-900 dark:text-gray-300"
            >
              Religion/Beliefs
            </h3>
            <ul
              class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
            >
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="persons_beliefs"
                    multiple=""
                    id="persons_beliefs"
                    type="radio"
                    value="NONE"
                    checked
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >None</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="persons_beliefs"
                    id="persons_beliefs"
                    type="radio"
                    value="NS"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Not stated</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="persons_beliefs"
                    id="persons_beliefs"
                    type="radio"
                    value="C"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Christian</label
                  >
                </div>
              </li>
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="persons_beliefs"
                    id="persons_beliefs"
                    type="radio"
                    value="B"
                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >Buddhist</label
                  >
                </div>
              </li>
            </ul>
          </div>
          <!-- -------------------- -->
          <!-- Feedback             -->
          <div mt-4>
            <label
              for=""
              name="data_collection_message_feedback_details"
              id="data_collection_message_feedback_details"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >Thank you for helping with my project. Any feedback on the
              Data Collection section would be most welcome.</label
            >
            <textarea
              name="data_collection_message_feedback_details"
              id="message"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your observations here..."
            ></textarea>
          </div>
          <!-- -------------------- -->
          <!-- buttons             -->
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
              onclick="showDetails(urgentAuthDetails)"
            >
              Next page
            </button>
          </div>
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
              onclick="showDetails(signatureDetails)"
            >
              Previous page
            </button>
          </div>
          <!-- --------------------------- -->
        </div></div>
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 8                   -->
        <!-- Urgent Authorisation        -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section" id="urgent_auth_details"
        aria-label="Urgent Authorisation section">
          <h3 class="text-3xl font-bold dark:text-white">
            Urgent Authorisation
          </h3>

          <!-- --------------------------- -->
          <label
            for=""
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
            >Only complete this section if you need to grant an urgent
            authorisation because it appears to you that the deprivation of
            liberty is already occurring or about to occur and you reasonably
            think all of the following conditions are met
          </label>
          <!-- ---------------- -->
          <!-- Checkboxes -->
          <!-- urgent auth required? -->
          <div class="field">
            <ul
              class="w-48 text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
            >
              <li
                class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
              >
                <div class="flex items-center pl-3">
                  <input
                    name="urgent_authorisation_required"
                    value="No"
                    type="hidden"
                  />
                  <!-- Hidden field to avoid error in store data (Provides fallback value when checkbox isn't ticked) -->
                  <input
                    name="urgent_authorisation_required"
                    id="urgent_authorisation_required"
                    type="checkbox"
                    value="Yes"
                    class="urg_auth_check w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                    onclick="toggleElement(this, 'urgent_authorisation_criteria')"
                  />
                  <label
                    for=""
                    class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                    >An urgent DOLS authorisation IS required.</label
                  >
                </div>
              </li>
            </ul>
          </div>
          <!-- ---------------- -->
          <!-- urgent auth criteria -->
          <!-- (required if urgent auth) -->
          <ul
            class="w-[500px] text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white hidden"
            id="urgent_authorisation_criteria"
          >
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="18+"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >The person is aged 18 or over</label
                >
              </div>
            </li>

            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="MD"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >The person is suffering from a mental disorder</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="COT"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >The person is being accommodated here for the purpose of
                  being given care or treatment</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="NoAD"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >The person has not, as far as the managing authority is
                  aware, made a valid Advance Decision that prevents them from
                  being given any proposed treatment</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="MCA"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Accommodating the person here and giving them the proposed
                  care or treatment does not as far as the Managing Authority is
                  aware conflict with a valid decision made by a donee of a
                  Lasting Power of Attorney or Personal Welfare Deputy appointed
                  by the court of protection under the Mental Capacity Act
                  2005,</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="BI"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >It is in the persons best interests to be accommodated here
                  to receive care or treatment even though they will be deprived
                  of liberty</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="DP"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >Depriving the person of liberty is necessary to prevent harm
                  to them and in a proportionate response to the harm they are
                  likely to suffer otherwise</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="NoMHA"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >The person concerned is not as far as the Managing Authority
                  is aware subject to an application or order under the Mental
                  Health Act 1983 or if they are that order or application does
                  not prevent an Urgent Authorisation being given,</label
                >
              </div>
            </li>
            <li
              class="w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600"
            >
              <div class="flex items-center pl-3">
                <input
                  name="urgent_authorisation_criteria[]"
                  id="urgent_authorisation_criteria[]"
                  type="checkbox"
                  value="URG"
                  class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                />
                <label
                  for=""
                  class="py-3 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300"
                  >The need for the person to be deprived of their liberty here
                  is so urgent that it is appropriate for that deprivation to
                  begin immediately before the request for the Standard
                  Authorisation is made or has been determined</label
                >
              </div>
            </li>
          </ul>
          <!-- --------------------------- -->
          <!-- Urgent authorisation granted -->
          <div id="urg_auth_details">
            <h8 class="text-3l font-bold dark:text-white urgentAuth"
              >Urgent authorisation granted:</h8
            >
            <!-- --------------------------- -->
            <!-- An urgent authorisation is now granted this is to be in force for:  -->
            <!-- NB - Urgent authorisations: these can be granted where the need for your deprivation of liberty is urgent. They can be granted for a maximum of 7 days, and it can be extended once for a further 7 days by the supervisory body. -->
            <!-- dropdown -->
            <!-- No of days needed (required field) -->
            <div class="field mt-4 urgent_days">
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >An urgent authorisation is now granted this is to be in force
                for:
              </label>

              <select
                name="urgent_days"
                id="urgent_days"
                type="dropdown"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required
              >
                <option disabled selected="">
                  Urgent Authorisation Granted for:
                </option>
                <option value="0">One day</option>
                <option value="1">Two days</option>
                <option value="2">Three days</option>
                <option value="3">Four days</option>
                <option value="4">Five days</option>
                <option value="5">Six days</option>
                <option value="6">Seven days</option>
              </select>
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                >Select an option</label
              >
            </div>

            <!-- --------------------------- -->
            <!-- Urgent authorisation date end -->
            <h8 class="text-3l font-bold dark:text-white"
              >Urgent authorisation date end:</h8
            >
            <!-- --------------------------- -->
            <!--This urgent authorisation will expire at the end of the day on: -->
            <!-- date picker THis will be calculated automatically for user based on their input-->

            
            
        
              <label
                name="urgent_authorisation_date_end"
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >This urgent authorisation will expire at the end of the day
                on:</label>
              <input
                name="urgent_authorisation_date_end"
                type="text"
                id="urgent_authorisation_date_end"
                class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="dd/mm/yyyy"
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              ></p>
            </div>
            <!-- --------------------------- -->
            <!-- --------------------------- -->
            <!-- Urgent Authorisation signed -->
            <!-- Please type your name -->
            <!-- short text -->
            <div class="urgent_dols_display mt-4">
              <label
                for="large-input"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Please type your name
              </label>
              <input
                name="urgent_authorisation_signed"
                type="text"
                class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Type your name here"
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              ></p>
            </div>
            <!-- --------------------------- -->

            <!-- --------------------------- -->
            <!-- Urgent authorisation date: -->
            <!-- Please insert todays date -->
            <!-- date see script.js -->

              <div class="mt-4 field date">
            <label
            name="urgent_authorisation_granted_date"
              for="large-input"
              class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300 date"
              >Today's date:
            </label>
            <input
              name="urgent_authorisation_granted_date"
              type="text"
              id="date urgent_authorisation_granted_date"
              class="date block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              
            />
            <!-- <div class="field urgent_dols_display relative">
              <label
                name="urgent_authorisation_granted_date"
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Please insert today's date.</label
              >
              <div
                class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
              >
                <svg
                  aria-hidden="true"
                  class="w-5 h-5 text-gray-500 dark:text-gray-400"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill-rule="evenodd"
                    d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                    clip-rule="evenodd"
                  ></path>
                </svg>
              </div>
              <input
                name="urgent_authorisation_granted_date"
                datepicker=""
                type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 datepicker-input"
                placeholder="Select date"
              />
            </div> -->

            <!-- --------------------------- -->
            <!-- --------------------------- -->
            <!-- Urgent Authorisation timestamp -->
            <!-- automatically entered by database -->

            <!-- ---------------- -->
            <!-- feedback -->
            <div>
              <label
                for=""
                id="urgent_authorisation_message_feedback_details"
                class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
                >Thank you for helping with my project. Any feedback on the
                Urgent Authorisation section would be much appreciated.</label
              >
              <textarea
                name="urgent_authorisation_message_feedback_details"
                id="urgent_authorisation_message_feedback_details"
                rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Write your observations here..."
              ></textarea>
            </div>
            <!-- ---------------- -->
            <!-- buttons -->
            <div>
              <button
                type="button"
                class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 right-0"
                onclick="showDetails(extendUrgentAuthDetails)"
              >
                Next page
              </button>
            </div>
            <div>
              <button
                type="button"
                class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
                onclick="showDetails(dataCollectionDetails)"
              >
                Previous page
              </button>
            </div>
            <!-- --------------------------- -->
          </div>
        </div>
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 9                   -->
        <!-- Extend Urgent Authorisation            -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <div class="hidden section" id="extend_urgent_auth_details"
        aria-label="Extend Urgent Authorisation section">
          <div>
            <h3 class="urgent_dols_display text-3xl font-bold dark:text-white">
              Extension of urgent authorisation request.
              <br />
            </h3>
            <!-- extend urgent auth? -->
            <!-- Drop down yes or no -->
            <div class="field urgent_dols_display mt-4">
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Is an urgent authorisation in force?:</label
              >

              <select
                name="urgent_authorisation_in_force"
                id="urgent_authorisation_in_force"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required
              >
                <option selected="">
                  Is an urgent authorisation in force?:
                </option>
                <option value="YES">Yes</option>
                <option value="NO">No</option>
              </select>
              <label
                for=""
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400"
                >Select an option</label
              >
            </div>
            <!-- --------------------------- -->
            <!-- Extension of authorisation reasons -->
            <!-- long text -->
            <div class="field">
            <label
              for=""
              class="urgent_dols_display block mb-2 text-sm font-medium text-gray-900 dark:text-white"
              >It is essential for the deprivation of liberty to continue until
              the request for a Standard Authorisation is completed because the
              person needs to continue to be deprived of their liberty.
              <br />The exceptional reasons are as follows :</label
            >
            <textarea
              name="extend_urgent_authorisation_granted_text"
              id="extend_urgent_authorisation_granted_text"
              type="text"
              rows="4"
              class="urgent_dols_display block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Please record your reasons"
            ></textarea>
            </div>
            <!-- --------------------------- -->
            <!-- --------------------------- -->
            <!-- Please type your name -->
            <!-- short text -->

            <div class="field urgent_dols_display mt-4">
              <label
                for="large-input"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300"
                >Please type your name
              </label>
              <input
                name="extend_urgent_authorisation_signed"
                type="text"
                class="block p-4 w-full text-gray-900 bg-gray-50 rounded-lg border border-gray-300 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Type your name here"
              />
              <p
                id="helper-text-explanation"
                class="mt-2 text-sm text-gray-500 dark:text-gray-400"
              ></p>
            </div>
            <!-- --------------------------- -->

            <!-- --------------------------- -->
            <!-- Extend Urgent Authorisation Signed Timestamp -->
            <!-- Timestamp -->
            <!-- automatically added in database -->

          </div>
            <!-- ------------------------ -->
            <!-- buttons                  -->
          <div>
            <button
              type="button"
              class="next_page_btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800 fixed bottom-0 left-0"
              onclick="showDetails(urgentAuthDetails)"
            >
              Previous page
            </button>
          </div>
            <!-- ------------------------ -->
            <!-- feedback                 -->
          <div>
            <label
              for=""
              name="extend_urgent_auth_message_feedback_details"
              id="extend_urgent_auth_message_feedback_details"
              class="block mb-2 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >Thank you for helping with my project. Any feedback on the Extend
              Urgent Authorisation section would be most welcome.</label
            >
            <textarea
              name="extend_urgent_auth_message_feedback_details"
              id="message"
              rows="4"
              class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
              placeholder="Write your observations here..."
            ></textarea>
          </div>
        
          <!-- --------------------------- -->
        

        
        <!-- --------------------------- -->

        <!-- --------------------------- -->
        






<?php
include ('../src/views/footer.php');

?>