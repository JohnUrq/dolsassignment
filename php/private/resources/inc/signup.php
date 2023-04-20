<?php

// NB 'inc' - user is not actually seeing this file but it does have a php script that will run inside it.
 // need the DB connection:
    // include "../../../php/src/inc/dbh.php";
    // and the helpers.php
    // require_once "../../src/libs/helpers.php";
    // functions
    include_once __DIR__ . ("/../.././initialize.php");
    

// check that the user arrived here by clicking the submit button rather than randomly entering the web address. If not, we send them back to the sign-up page.
// isset - ie has this been set within the code?
// needed the name in submit button. name="submit" 

if (isset($_POST['submit'])){
    // echo "even the isset works";
    
    $name = $_POST['name'];
    // debug($name);
    $email = $_POST['email'];
    
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $pwdrepeat = $_POST['pwdrepeat'];
    // debug($pwdrepeat);
    // add validation. Could call function that deals with store_data, but it will need altered to handle the passwords etc.
    // anyway, the functions for data validation will be in the functions.php folder. But because the submit button for this sends POST data too - will we need to differentiate between the buttons - eg submit form 1 button and registration button.??? - or does it not matter because the path will be different in each button.??

   
    // functions will either return true or false.
    // functions are:
        // emptyInputRegistration - checks if any input is empty.
        // invalidUid - checks if user Id is in use etc
        // invalidEmail
        // pwdMatch
        // uidExists 
        // createUser

    // and use the functions to catch any errors:
    if(emptyInputRegistration($name, $email, $username, $pwd, $pwdrepeat) !== false) {
    echo("hel lo");
        // ie if it's anything besides false then throw an error - there's a big difference between is it equal to true or is it not equal
        // to false even though they may seem like the same thing so inside the if statement i just want to say well okay there's clearly
        // a error happening here so i want to send a user back to the sign up page and just sort of start over
        // so redirect user back to registration and exit the script so nothing further happens.
        
        // header("location: ../../public/register.php?error-emptyinput");
      
        exit();
    }
    if(invalidUid($username) !== false) {
         header("location: ../../public/register.php?error-invaliduid");
        //  debug($username);
        exit();
    }
    if(invalidEmail($email) !== false) {
        header("Location: ../../public/register.php?error-invalidemail");
        
    exit();
    }
    if(pwdMatch($pwd, $pwdrepeat) !== true) {
 
        header("location: ../../public/register.php?error-passwordsdontmatch");
    exit();
    }
    // check the database to see if the username is already taken. Or indeed if the email is already taken since both can be used to log in.
    if(uidExists($mysqli, $username, $email) !== false) {
        header("location: ../../public/register.php?error-usernametaken");
    exit();
    }  else{

    // then finally we can create the user
    createUser($mysqli, $name, $email, $username, $pwd);
       echo("Marvellous!");
       exit();
    } 
    //more to do in terms of security, such as using a login token system and checking that the user actually exists in the database using the stored session variables on every page, just in case an 'admin' has deleted that user for some reason since their last login etc.
    //  redirect user to the registration page if they have arrived here by any other means
    // this should be header(location: etc but that wasn't working so removed header from registration form. because it could not find the script.js file
    // Can't use DIR__ etc due to docker
    header("Location: ../../public/register.php");
    exit();

}