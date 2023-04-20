// I'm not sure this does what it was intended to do.

<?php

// Include database connection file
include  "inc/dbh.php";
// Initialize the session
session_start();

// Check if the user is logged in, otherwise redirect to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}