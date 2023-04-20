<?php


// This will load packages and connect to the database

  $db_host = 'db';
  $db_user = 'john';
  $db_password = 'password';
  $db_db = 'dbname';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
  if ($mysqli->connect_error) {
    echo 'mysql Error ';
    echo '<br>';
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }
// PHP_EOL is End of Line

?>