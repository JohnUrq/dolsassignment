<?php

include_once("../src/inc/dbh.php");
include("../src/libs/helpers.php");
view('src/views/header', ['title' => 'Log In']);
view('src/views/footer');

if (isset($_SESSION['username'])) {
    header("Location: log_in_form.php");
} else {
    header("Location: view_records.php");
}