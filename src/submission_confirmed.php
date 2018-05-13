<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "todo";
$title = $_POST["todo_item"];

//create connection
$conn = new mysqli($servername, $username,$password,$dbname);

//check connection
if ($conn->connect_error) {
die("connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO todo_list(title) VALUES ('$title')";
if ($conn->query($sql) === TRUE) {
    echo " '$title' successfully added.";
} else {
    echo "Error: " . $sql / "<br>" . $conn->error;
}

$conn->close();


