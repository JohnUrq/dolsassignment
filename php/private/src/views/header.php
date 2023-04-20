<?php


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../../private/resources/styles.css">
    <script src="../../private/resources/script.js" defer></script>
    <script type="module" src="../../private/resources/testing.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  </head>
  <!--  bg = background color -->
  <body >
     <form  method="POST" action="../private/src/inc/store_data.php" id="form" novalidate onsubmit="errorCheck()"
      >
      <!-- do prevent default? -->
    <div class="container mx-auto my-10">
    
         <div id="errors"
  class="text-red hidden text-red-500">
         </div>
      
        <!-- --------------------------- -->
        <!-- --------------------------- -->
        <!-- Section 0                   -->
        <!-- Navigation bar              -->
        <!-- --------------------------- -->
        <!-- --------------------------- -->
<nav class="border-gray-200 px-4 py-3 rounded-lg shadow-md dark:bg-gray-900 bg-gradient-to-r  from-blue-400 to-indigo-500  mx-auto max-w-7xl">



              <div
                class="container flex flex-wrap items-center justify-between mx-autoh-10 "
              >

                <?php
                if(isset($_SESSION["useruid"]))
                {
                echo '<p>"Hello " . $_SESSION[“useruid”] . “</p>”';
                }
                else
                {
                  echo"";
                }
                ?>

                
                <a
                  target="_blank"
                  href="https://www.gov.uk/government/publications/deprivation-of-liberty-safeguards-forms-and-guidance"
                  class="flex items-center"
                >
                  <img
                    src="../../private/resources/img/logo.png"
                    class="h-6 mr-3 sm:h-9"
                    alt="Deprivation of liberty safeguarding"
                  />
                  <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
                    >Deprivation of Liberty Safeguards - Form 1 &rarr;</span
                  >
                </a>
                </a>
                <a
                  target="_blank"
                  href="https://proceduresonline.com/trixcms1/media/1457/dols-form-1-and-2-guidance-leaflet-ccc-july-2018.pdf"
                  class="flex items-center"
                >

                  <span
                    class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
                    >Form 1 guidance leaflet &rarr;</span
                  >
                </a>
               <div>
               <button
                          type="submit"
                          class="hidden text-black bg-green-500 hover:bg-green-800 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        >
                          Submit
                        </button>
                 <?php
                  if(isset($_SESSION["useruid"]))
                  {
                      echo '<nav class="border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
                      <div class="container flex flex-wrap items-center justify-between mx-auto h-10  gap-2">
                          <button type="button"
                              onclick="window.location.href=\'http://localhost:8888/Assignment/php/public/welcome_page.php\';"
                              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                              Welcome!
                          </button>
                          <button type="button"
                              onclick="window.location.href=\'http://localhost:8888/Assignment/php/resources/inc/logout.php\';"
                              class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                              Log out!
                          </button>
                          <button
                          type="submit"
                          class="hidden text-black bg-green-500 hover:bg-green-800 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                        >
                          Submit
                        </button>
                      </div>
                  </nav>';
                  }
                  else
                  {

                    echo '<nav class=" mb-2 border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-gray-900">
                    <div class="container flex flex-wrap items-center justify-between mx-auto h-10  gap-2">
                        <button type="button"
                            onclick="window.location.href=\'http://localhost:8000/public/register.php\';"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                            Register
                        </button>
                        <button type="button"
                            onclick="window.location.href=\'http://localhost:8888/Assignment/php/public/login.php\';"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800
                            onclick="removeImages():"">
                            Log in
                        </button>
                        
                        <button
                        type="submit"
                        class=" text-black bg-green-800 hover:bg-green-800 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2  dark:bg-green-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                      >
                        Submit
                      </button>
                        </div>
                      </div>
                    
                ';
                  }
                  ?>

                <!-- register/log in buttons -->
               
              

                


                <!--<a href="http://localhost:8000/">-->
                <!-- or for production file... -->
                <!-- <a href="http://dolsassignment.john-urquhart.co.uk/php/index.html"></a> -->
               
                <button type="reset"
        value="Clear"
        class="flex items-center justify-center mr-4  mb-2 px-2 sm:px-4 py-2.5 rounded font-medium text-center text-black bg-red-500/65 rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600/90 dark:hover:text-white bg-red-700 dark:focus:ring-red-800"
>
  <span class="flex items-center justify-center">
    Reset
  </span>
</button>

                </div>
                <!--</a>-->
                <nav class="border-gray-200 px-4 py-1 rounded-lg shadow-md dark:bg-gray-900 bg-gradient-to-r  from-blue-400 to-indigo-500 mx-auto max-w-7xl">
                  
  <div class="  ">
    <div class="  " id="navbar-default bg-indigo-500 rounded-lg">
      <ul class="flex flex-col border-gray-100 rounded-sm  md:flex-row  md:text-sm  md:bg-white dark:bg-gray-800 ">
        <button type="button" class="flex-1 bg-blue-800/20">
          <a href="#pt_details" id="pt_details_btn" class="bg-blue-800/20 flex items-center justify-center h-14 border-2 border-blue-700  rounded-lg text-center hover:border-red-500 block text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text" title="Click to begin filling in the form 1" aria-current="page">
            <b>Patient Details</b>
          </a>
                </button>
        <button type="button" class="flex-1 bg-blue-800/20">
          <a href="#care_home_details" id="care_home_details_btn" class="bg-blue-800/20 flex items-center justify-center h-14 border-2 border-blue-700 rounded-lg text-center hover:border-red-500 block text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text">
            <b>Care Home Details</b>
          </a>
        </button>

        <button type="button" class="flex-1 bg-blue-800/20">
          <a
            href="#"
            id="auth_details_btn"
                          class="bg-blue-800/20 flex items-center justify-center h-14  border-2 border-blue-700  rounded-lg text-center hover:border-red-500 block  text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text"
            ><b>Authorisations</b></a
          >
        </button>
        <button type="button" class="flex-1  bg-blue-800/20">
          <a
            href="#"
            id="interested_persons_details_btn"
                            class="bg-blue-800/20 flex items-center justify-center h-14  border-2 border-blue-700  rounded-lg text-center hover:border-red-500 block  text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text"
            ><b>Interested persons</b></a
          >
        </button>
        <button type="button"  class="flex-1  bg-blue-800/20">
          <a
            href="#"
            id="advance_decision_details_btn"
                                  class="bg-blue-800/20 flex items-center justify-center h-14 border-2 border-blue-700 rounded-lg text-center hover:border-red-500 block  text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text"
            ><b>Advance decision</b></a
          >
        </button>
        <button type="button"  class="flex-1  bg-blue-800/20">
          <a
            href="#"
            id="signature_details_btn"
                            class="bg-blue-800/20 flex items-center justify-center h-14 border-2 border-blue-700 rounded-lg text-center hover:border-red-500 block  text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text"
            ><b>Signature/Date              </b></a
          >
        </button>
        <button type="button"  class="flex-1  bg-blue-800/20">
          <a
            href="#"
            id="data_collection_details_btn"
                                  class="bg-blue-800/20 flex items-center justify-center h-14 border-2 border-blue-700 rounded-lg text-center hover:border-red-500 block  text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text"
            ><b>Data collection</b></a
          >
        </button>
        <button type="button"  class="flex-1  bg-blue-800/20">
          <a
            href="#"
            id="urgent_auth_details_btn"
                                    class="bg-blue-800/20 flex items-center justify-center h-14 border-2 border-blue-700 rounded-lg text-center hover:border-red-500 block  text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text"
            ><b>Urgent Authorisation</b></a
          >
        </button>
        <button type="button"  class="flex-1  bg-blue-800/20">
          <a
            href="#"
            id="extend_urgent_auth_details_btn"
                              class="bg-blue-800/20 flex items-center justify-center h-14 border-2 border-blue-700 rounded-lg text-center hover:border-red-500 block  text-gray-700 rounded hover:bg-gray-500 md:hover:bg-gray-200 md:border-gray-100 md:hover:text-blue-700 md:hover:border-red-200 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent hover:text-gray-900 hover:text"
            ><b>Extend Urgent Authorisation</b></a
          >
        </button>

      </ul>
    </div>
             
                
            </nav>
          <!-- ------------------ -->
          <!-- Background images  -->
          <!-- ------------------ -->
          <div class="grid mt-2">
                  
<div class="img-wrapper rounded ">
  <div class="image-container ">
    <img src="/../../private/resources/img/logo_blue.jpeg" id="pt_details_img" />
  </div>
  <div class="content slide-right" title="Click for more information">
    Patient details, name, age, address details and medical information.
  </div>
</div>



            <div class="img-wrapper ">
              <img class="zoom" src="/../../private/resources/img/dols form 1 1024 size.jpeg" />
              <div class="content fade zoom">
                Care home or hospital details for the establishment currently
                seeking a DoLS order.
              </div>
            </div>
            <div class="img-wrapper">
              <img
                class="blur "
                src="/../../private/resources/img/oldies_care/old-man-hanging-out-of-a-window-behind-bars-A1JFJD.jpeg"
              />
              <div class="content slide-left">
                Authorisation purpose, date and any restrictions of liberty
                already in place.
              </div>
            </div>
            <div class="img-wrapper">
              <img class="zoom" src="/../../private/resources/img/dols image.jpeg" />
              <div class="content slide-right">
                Interested persons - visitors, LPA details, carer details etc.
              </div>
            </div>
            <div class="img-wrapper">
              <img class="gray" src="/../../private/resources/img/logo_bw.jpeg" />
              <div class="content fade">
                Is there an Advance decision in place?
              </div>
            </div>
            <div class="img-wrapper">
              <img
                class="blur"
                src="/../../private/resources/img/happy-mature-husband-wife-communicating-while-standing-by-window-home.jpg"
              />
              <div class="content slide-left">
                Signature and date for the DoLS request
              </div>
            </div>
            <div class="img-wrapper">
              <img
                class="blur"
                src="/../../private/resources/img/senior-woman-bed-washed-elderly-care-assistant-elderly-woman-washed-elderly-care-assistants-186943601.jpeg"
              />
              <div class="content slide-right">
                Data collection - ethnicity/sexual orientation etc
              </div>
            </div>
            <div class="img-wrapper">
              <img
                class="zoom "
                src="/../../private/resources/img/50899376913_0e95349694_c.jpg"
              />
              <div class="content fade">
                Is an urgent authorisation required? This part will calculate
                the end date for you, but there are certain criteria to be met.
              </div>
            </div>
            <div class="img-wrapper">
              <img src="/../../private/resources/img/logo.png" />
              <div class="content slide-left">
                Extension of urgent authorisation if applicable.
              </div>
            </div>
          </div>
                
          <!-- ------------------ -->
            <div class="mt-4"></div>
          </div>