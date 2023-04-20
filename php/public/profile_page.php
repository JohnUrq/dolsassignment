<?php


include '../src/inc/dbh.php';
include '../src/libs/helpers.php';
view('/src/views/header');
view('src/views/search_form');

$sql = "SELECT pt_name FROM dbname ORDER BY `number` ASC";
$pt_details = mysqli_query(
$mysqli, $sql);

// perform a join to show the pt_details that the user has inpit previously
// $sql = "SELECT ... WHERE username = '{$_SESSION['username']}';";
// $ ...usernameinputs... = mysqli_query(
// $mysqli, $sql);

?>


HTML to go to form 1
Searches to retrieve previous inputs for that user only
More advanced searches eg for pt name only or how many urgent authorisations they have requested
Function button to unhide submit button.
Show welcome to user.
Log out button.