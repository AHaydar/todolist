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
$sql = "SELECT title FROM todo_list";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Todo List</title>
</head>
<body>
    <h1>My Todo List</h1> <br>
    <ul>
        <?php
            if($result->num_rows > 0) {
                foreach ($result as $row)
                {
                    printf('<li>%s</li>', $row['title']);
                }
            }
        ?>
    </ul><br>
    <form action="submission_confirmed.php" method="post">
        <input type="text" name="todo_item">
        <input type="submit" value="submit">
    </form>
</body>
</html>