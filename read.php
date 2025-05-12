<?php
include 'db.php';

$sql = "SELECT * FROM tasks";
$result = mysqli_query($conn, $sql);

$tasks = [];

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tasks[] = $row;
    }
}

echo json_encode($tasks);
?>
