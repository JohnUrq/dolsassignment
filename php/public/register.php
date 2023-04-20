<?php

include_once __DIR__ . ("/../private/initialize.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
  

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- // name
  email
  username
  pwd
  pwdrepeat// -->
  </head>
  <body>
       <div class="container signup-form mx-auto my-10 mt-10"
       > 
<form action="../private/resources/inc/signup.php" method="post">
    <h2 for="name" class="name block mb-2 text-sm font-medium text-gray-900 dark:text-white">Registration form</h2>
    <div class="mb-6"
  name=registration_form>
    <label for="name" class="name block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Name</label>
    <!-- name -->
    <input type="text" id="name" name="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Barney Rubble" >
  </div>
<!-- email -->
    <div class="mb-6"
  name= registration_form>
    <label for="email" name="email" id="email" class="email block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
    <input type="email" id="email" name="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Email address" required>
  </div>
  <!-- uid -->
  <div class="mb-6">
   <label for="username" name="username" class="username block mb-6 text-sm font-medium text-gray-900 dark:text-white">User Name</label>
    
    <input type="text" id="username" name="username" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Username" required>
  </div>
  <!-- password -->
  <div class="mb-6">
    <label for="pwd" name="pwd" id="pwd"
     class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" id="pwd" name="pwd" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
    placeholder="********" required>
  </div>

  <div class="mb-6">
    <label for="repeat-password" name="pwdrepeat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Repeat password</label>
    <input type="password" id="repeat-password" name="pwdrepeat" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
    placeholder="Repeat Password" required>
  </div>
  <div class="flex items-start mb-6">
    <div class="flex items-center h-5">
      <input id="terms" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required>
    </div>
    <label for="terms" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a></label>
  </div>
  <button type="submit" name="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register new account</button>
</form>

       </div>
  </body>
</html>


<?php
if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput") {

        echo "<p>Please fill in all fields</p>";
    } else if ($_GET["error"] == "invalidUsername") {

        echo "<p>Please provide valid user name</p>";
    } else if ($_GET["error"] == "invalidEmail") {

        echo "<p>Please provide valid email</p>";
    } else if ($_GET["error"] == "passwordsdonotmatch") {

        echo "<p>Passwords don't match</p>";
    } else if ($_GET["error"] == "stmtfailed") {

        echo "<p>Registration failed, please try again</p>";
    } else if ($_GET["error"] == "usernametaken") {

        echo "<p>User name already taken.</p>";
    } else if ($_GET["error"] == "none") {

        echo "<p>You have registered!</p>";
    }
}
