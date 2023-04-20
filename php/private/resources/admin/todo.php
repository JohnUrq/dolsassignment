<?php


include('../.././src/init.php');
include "../../resources/functions.php";

// use prepared statements with bound parameters as it is best practice for preventing SQL injection attacks in PHP.
// NB - there is a function for this in the store_data.php. Could move it to functions.php and access it here too.

if (isset($_POST['submit'])) {
    $task = $_POST['task'];
    $date = date_create_from_format('d-m-Y', date('d-m-Y'));
    $date_str = $date->format('Y-m-d');

    $tasks = [
        "task" => $task,
        "date" => $date_str
    ];

    insert_row("tasks", $tasks);
}
// NB Fatal error: Cannot redeclare insert_row() (previously declared in /var/www/html/src/store_data.php:9) in /var/www/html/resources/functions.php on line 132

 
//  // have included init.php for database connection.
//  // Prepare a statement with placeholder for task parameter
//  $stmt = $mysqli->prepare( "INSERT INTO `tasks` (task, date) VALUES (?, now())");
//         // mysqli_query($mysqli, "INSERT INTO `tasks` (`task`, `date`) VALUES ('$task', now())");
    
// // Bind the task parameter to the prepared statement
// $stmt->bind_param('s', $task);

// // Execute the prepared statement
// $stmt->execute();
// }


// delete task
if (isset($_GET['del_task'])) {
    $id = $_GET['del_task'];
    mysqli_query($mysqli, "DELETE FROM `tasks` WHERE id=".$id);
}

$tasks = mysqli_query($mysqli, "SELECT * FROM tasks");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do list</title>
    <head>
    

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.5/dist/datepicker.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
        .half-width {
  width: 50%;
}

    </style>
  </head>
</head>
<body>
    
<h1 class="heading text-center mb-4 mt-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">ToDo List</h1>
<p class="mb-6 text-center text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">DoLS website QUB Assignment</p>
<form action="todo.php" method="post">
<div flex mx-4>
         
            <input type="text" 
              for=""
              name="task"
              type="text"
              id="task"
              class="text-center task_input block mx-4 mb-2 ml-4 mt-4 text-sm font-medium text-gray-900 dark:text-white"
              >&nbsp; Add to the never ending list...</label
            >
            <textarea
              name="task"
              id="task"
              rows="10"
              Cols="24"
              class="block p-2.5 mx-4 mt-4 mb-4 mr-4 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 half-width"
              required
              oninvalid="setCustomValidity('Enter the task here')"
              oninput="setCustomValidity('')"
              placeholder="Write your ToDo's here..."
            ></textarea>
          

<button type="submit" 
name="submit" class="task_btn text-black bg-blue-100/75 hover:bg-blue-800 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Add Task</button>

</div>
</form>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Date
                </th>
                <th scope="col" class="px-6 py-3">
                    No.
                </th>
                <th scope="col" class="px-6 py-3">
                    Task
                </th>
                <!-- <th scope="col" class="px-6 py-3">
                    Edit task
                </th> -->
                 <th scope="col" class="px-6 py-3">
                    Delete Task
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            while ($row = mysqli_fetch_array($tasks)) {
            ?>
            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                <!-- <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    </th> -->
                   <td class="px-6 py-4">
                    <?php echo $row['date']; ?>
                </td>
                
                
                <td class="px-6 py-4">
                    <?php echo $i; ?>
                </td>
                <td class="px-6 py-4">
                    <?php echo $row['task']; ?>
                </td>
                <!-- <td class="px-6 py-4">
                    <a href="todo.php" class="edit font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td> -->

                <td class="px-6 py-4">
                    <a href="todo.php?del_task=<?php echo $row['id']; ?>" class="delete font-medium text-red-600 dark:text-red-500 hover:underline ">Delete</a>
                </td>
            </tr>
            <?php $i++; } ?>


        </tbody>
    </table>
</div>

</body>
</html>