<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_db"; 

// Connection create karo
$conn = new mysqli($servername, $username, $password, $dbname);

// // Check karo connection hua ya nahi
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";

// CREATE TABLE statement should be inside PHP and executed
$sql = "CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    tasks VARCHAR(255) NOT NULL,
    description VARCHAR(255),
    due_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query to create the table
// if ($conn->query($sql) === TRUE) {
//     echo "Table 'tasks' created successfully!";
// } else {
//     echo "Error creating table: " . $conn->error;
// }



?>
