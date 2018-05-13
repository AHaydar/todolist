<?php
$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "todo";
$item_updated = $_POST['item_to_update'];
 //create connection
$conn = new mysqli($servername, $username,$password,$dbname);
//check connection
if ($conn->connect_error) {
    die("connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE todo_list SET title=$item_updated WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    echo " '$title' successfully updated.";
} else {
    echo "Error: " . $sql / "<br>" . $conn->error;
}

$conn->close();