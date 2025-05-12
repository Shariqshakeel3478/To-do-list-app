<?php 

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if(empty($_POST["tasks"])){
        header("Location: index.html");
    exit();
    
}
    // Get user inputs
    $tasks = $_POST['task'];
    $description = $_POST['desc'];
    $due_date = $_POST['due_date'];

    // SQL query to insert data
    $sql = "INSERT INTO tasks (tasks, description, due_date) VALUES ('$tasks', '$description', '$due_date')";

    // Execute the query
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html"); // Corrected redirection syntax
        exit(); // Make sure the script stops after redirecting
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>
