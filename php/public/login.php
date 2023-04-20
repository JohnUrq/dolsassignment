<?php
// include ('../src/views/header.php');
include_once __DIR__ . ("/../.././initialize.php");
// contains php script to log in the registered user.
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="/resources/styles.css">
    <script src="/resources/script.js" defer></script>

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

  </head>
  <div class="container  mx-auto my-10 mt-10"> 
  <!-- // NB - this submits to user_login which then uses functions.php for login authentication -->
<form action="./resources/inc/user_login.php" method="post">
    <h2>Log in</h2>
    <div class="mb-6"
    
  name= log_in_form>
    <label for="name" class=" name block mb-2 text-sm font-medium text-gray-900 dark:text-white">User Name or Email address</label>
    <select type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
    <?php
$sql = "SELECT name FROM user";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
  }
} else {
  echo "0 results";
}
?>

    <?php while($row = $result->fetch_assoc()) { ?>
      <option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
    <?php } ?>
</select>
  </div>


  <div class="mb-6">
    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
    <input type="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
    placeholder="********" >
  </div>
 

  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">log in</button>
</form>
    </div>

<?php
if (isset($_GET["error"])) {

    if ($_GET["error"] == "emptyinput") {

        echo "<p>Please fill in all fields</p>";

    } else if ($_GET["error"] == "wronglogin") {

        echo "<p>Incorrect login details</p>";

    } 
}

include ('../src/views/footer.php');

