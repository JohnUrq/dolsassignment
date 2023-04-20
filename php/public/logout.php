<?php
// Initialise the session
session_start();
// Unset all the session variables
session_unset();
// Destroy the session
session_destroy();
// redirect to the login page
header("location: index.php");
exit();
