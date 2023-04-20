<?php

include("../src/inc/dbh.php");
include("../src/libs/helpers.php");
view('src/views/header', ['title' => 'Welcome!']);
view('src/views/footer');

// Check if the user is logged in, if not then redirect him to login page
if (isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: profile_page.php");
} else {
    header("location: log_in_form.php");
    exit();
}