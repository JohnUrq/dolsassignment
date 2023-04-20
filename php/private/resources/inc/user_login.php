<?php
 // need the DB connection:
 include "../../../php/src/inc/dbh.php";
 // and the helpers.php
 include "../../src/libs/helpers.php";
 // functions
 include "..//resources/functions.php";

// check that the user has arrived here correctly. 
if (isset($_POST['submit']))
{
  // uid - can be username or email
  $username = $_POST['uid'];

  $pwd = $_POST['pwd'];
  include "../../../php/src/inc/dbh.php";
  include "..//resources/functions.php";
  echo("This is the user_login.php page.");
  if (emptyInputLogin($username, $pwd) !== false) 
  {
    header("location: Assignment/public/index.php?error=emptyinput");
    exit();
  }
  else
  {
    echo "Ok";
  }

}

