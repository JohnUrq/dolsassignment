<?php

include __DIR__ . "/../src/inc/dbh.php";
include __DIR__ . "/../src/libs/helpers.php";



function get_max_id($table_name) 
{
    global $mysqli;

    // Build the SQL query
    $sql = "SELECT MAX(id) as max_id FROM $table_name";

    // Execute the query
    $result = $mysqli->query($sql);

    // Check if the query was successful
    if (!$result) 
    {
        echo "Error: " . $mysqli->error;
        return 0;
    }

    // Fetch the result
    $row = $result->fetch_assoc();

    // Return the max id or 0 if there is no data in the table
    echo "<b><br><br>max id in $table_name is: ". $row["max_id"]. "<br><br></b>";

    return ($row["max_id"] != null) ? $row["max_id"] : 0;
}

function get_max_submissions_id($table_name) 
{
    global $mysqli;

    // Build the SQL query
    $sql = "SELECT MAX(submission_id) as max_id FROM $table_name";

    // Execute the query
    $result = $mysqli->query($sql);

    // Check if the query was successful
    if (!$result) {
        echo "Error: " . $mysqli->error;
        return 0;
    }

    // Fetch the result
    $row = $result->fetch_assoc();

    // Return the max submission id or 0 if there is no data in the table
    echo "max submission_id in $table_name is: ". $row["max_id"]. "<br>";

    return ($row["max_id"] != null) ? $row["max_id"] : 0;
}

function check_id($table_name)
{
    if ($table_name == "forms_submissions")
        {
            get_max_id($table_name);
        } else 
        {
        get_max_submissions_id($table_name);
        }
}


function getFeedbackList()
{

    global $mysqli;

    // $read = "SELECT * FROM message_feedback";
        $read = "SELECT pt_details_message_feedback, care_home_details_message_feedback, authorisations_message_feedback_details, interested_persons_message_feedback_details, advance_decision_feedback_details, signature_date_message_feedback_details, data_collection_message_feedback_details, urgent_authorisation_message_feedback_details, extend_urgent_auth_message_feedback_details FROM message_feedback ORDER BY submission_id DESC LIMIT 10";

    $result = $mysqli->query($read);

    if (!$result) 
    {
        echo "There are no results." . $mysqli->error;
        $data = [
                'status' => 404,
                'message' => 'No messsages found.',
                ];
        header("HTTP/1.0 404 Not Found");
        echo json_encode($data);
    }
    else
    {
        if(mysqli_num_rows($result) > 0)
        {
            header("HTTP/1.0 200 OK");
        // return json_encode($data);

               $api_response = array();

                    while ($row = $result->fetch_assoc()) 
                    {
                        // build up array from results
                        array_push($api_response, $row);
                        $response = json_encode($api_response);
                        return $response;

        
                    }
        }

    }
}


function insert_row($table, $data) 
    {
    global $mysqli;
    global $result;
    global $submission_id;
    // $table will be a string of a table name e.g. "submissions"
    // $data will be an array with key/value pairs corresponding to column names and their values
    // e.g. ["pt_name" => "Tom", "pt_dob" => "26/09/1989", ...]

    // Step 1. create a $stmt variable
    $column_names = "";
    $placeholders = "";
    $data_types = "";
    foreach($data as $key => $value)    
        {
            $column_names.=$key.",";
            $placeholders.="?,";
            if(is_string($value)) 
            {
            $data_types.="s";
            }
            elseif(is_integer($value)) 
            {
                $data_types.="i";
            }
            else
            {
                // Add error handling for unsupported data types
                return false;
            }
         }
    
    $column_names = rtrim($column_names, ',');
    $placeholders = rtrim($placeholders, ',');
   
    $query = "INSERT INTO $table($column_names) VALUES($placeholders)";
    
    $stmt = mysqli_prepare($mysqli, $query);

    // add error handling to give error message if there is a problem with the prepared statement
    if (!$stmt) 
    {
        die('Error: ' . mysqli_error($mysqli));
    }
    // Step 2. bind parameters
    // NB '...' is spread oerator syntax
    mysqli_stmt_bind_param($stmt, $data_types, ...array_values($data));

    // Step 3. execute query and return result
    $result = mysqli_stmt_execute($stmt);
    if($result != true)
    {
        echo mysqli_error($mysqli);
        echo(json_encode($stmt)); 
    }
    else
    {
         $insert_id = mysqli_stmt_insert_id($stmt);
        return $insert_id; 
    }

}

// Gets the post data and assigns it to a variable $value. Then checks if it is a string or an array and handles the data accordingly
// $delimiter parameter controls the delimiter used when joining arrays.
function get_post_data($key, $delimiter = ",") 
    {
    // first check if the $key parameter exists in the $_POST array using the isset() function. If the key does not exist, we return null to indicate that no data was found.
    if(!isset($_POST[$key]))
        {
            return null;
        }

    $value = $_POST[$key];
    // sanitize and validate the retrieved data
    // if data is a string, we return it as follows:
    if(is_string($value))   
        {
            return htmlspecialchars(trim(stripslashes($value)));
        }
    // if data is an array:
    elseif(is_array($value))
        {
            $sanitized_values = array_map(function($item)
                {
                    return htmlspecialchars(trim(stripslashes($item)));
                }, $value);
            return implode($delimiter, $sanitized_values);
        }
}

//signup.php functions.

function emptyInputRegistration($name, $email, $username, $pwd, $pwdrepeat)
{
    
    // empty is a function built into the php language which checks if there is data, or if there is no data in the $_POST
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdrepeat))
    {
        // if there is a mistake, $result will be true.
        $result = true;

    }
     else 
    {
        $result = false;
    }
    return $result;
}

function invalidUid($username)
{
   
    // check for search algorithm:
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) 
    {
        // if there is a mistake, $result will be true.
        $result = true;

    } 
    else 
    {
        $result = false;
    }
    return $result;
}

function invalidEmail($email)
{
    // debug($email);
    // FILTER_VALIDATE_EMAIL - built in function in php.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $result = true;
    }
    else 
    {
        $result = false;
  
    }
    return $result;
}

function pwdMatch($pwd, $pwdrepeat)
{
   
    // FILTER_VALIDATE_EMAIL - built in function in php.
    if ($pwd !== $pwdrepeat)
    {
        // '!' - if there is a mistake, $result will be true.
        $result = false;

    } 
    else 
    {
        $result = true;
    }
    return $result;
}



function uidExists($mysqli, $username, $email)
{
    global $mysqli;
    $sql = "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = $mysqli->prepare($sql);
    
    if ($stmt === false) 
    {
        throw new Exception($mysqli->error);
    }
        $stmt->bind_param("ss", $username, $email);
        if ($stmt->execute() === false) 
    {
            throw new Exception($stmt->error);
    }
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) 
    {
        return $result->fetch_assoc();
    } 
    else 
    {
        return false;
    }
}


function createUser($mysqli, $name, $email, $username, $pwd)
{
    // use prepared statement to prevent SQL injection/malicious code input etc.
    $stmt = mysqli_stmt_init($mysqli);

    if (!$stmt) 
    {
        // Check for errors in mysqli_stmt_init() call
        echo "Statement initialization failed: " . mysqli_error($mysqli);
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    if (!mysqli_stmt_prepare($stmt, "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?)")) 
    {
        // Check for errors in mysqli_stmt_prepare() call
        echo "Statement preparation failed: " . mysqli_stmt_error($stmt);
        exit();
    }

    if (!mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPwd)) 
    {
        // Check for errors in mysqli_stmt_bind_param() call
        echo "Binding parameters failed: " . mysqli_stmt_error($stmt);
        exit();
    }

    if (!mysqli_stmt_execute($stmt)) {
        // Check for errors in mysqli_stmt_execute() call
        echo "Statement execution failed: " . mysqli_stmt_error($stmt);
        exit();
    }
   
    // Close statement and redirect to signup page with success message
    mysqli_stmt_close($stmt);
    header("location:/../public");
    echo("Well done on getting here");
    exit();
}

// login functions
    // emptyInputLogin

function emptyInputLogin($username, $pwd)
{
    
    // empty is a function built into the php language which checks if there is data, or if there is no data in the $_POST
    if(empty($username) || empty($pwd))
    {
        // if there is a mistake, $result will be true.
        $result = true;

    } 
    else 
    {
        $result = false;
    }
    return $result;
    

}

function loginUser($mysqli, $username, $pwd)
{
    // NB previously asked for username OR email in the uidExists fn
    // only one of them needs to be true.
    $uidExists =  uidExists($mysqli, $username, $username);
    // if returns as false - neither were found in db.
    if($uidExists === false)
    {
        header("location: ../../login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["pwd"];

    $checkPwd = password_verify($pwd, $pwdHashed);


    if($checkPwd === false)
    {
        header("location: login.php?error=wronglogin");
        exit();
    }
    else if($checkPwd === true)
    {
        
        // use php built-in function
        session_start();
        // create session variables (super global)
        $_SESSION["userid"] = $uidExists["usersId"];
        $_SESSION["useruid"] = $uidExists["usersUid"];
        // header("location: ../../public/index.php");
        exit();

    }

}