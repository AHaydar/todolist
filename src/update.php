
<!DOCTYPE>
<html>
<head>
    <title> UPDATE NOTE</title>
</head>
<body>
<?php
if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
    $id = $_GET['id'];
} else {
    header('Location: index.php');
}

$servername = "mysql";
$username = "root";
$password = "root";
$dbname = "todo";

if(isset($_POST['submit'])) {
    $conn = new mysqli($servername, $username,$password,$dbname);
        $sql = sprintf("UPDATE todo_list SET title='%s' WHERE id=%s",
            $_POST['item_to_update'],
            $id
        );
    if ($conn->query($sql) === TRUE) {
    echo "Successfully updated to " .    $_POST['item_to_update'];
    } else {
    echo "Error: " . $sql / "<br>" . $conn->error;
    }
    $conn->close();
} else {
    $conn = new mysqli($servername, $username,$password,$dbname);
    if ($conn->connect_error) {
        die("connection failed: " . mysqli_connect_error());
    }

    $sql = sprintf("SELECT title FROM todo_list WHERE id=%s", $id);
    $result = $conn->query($sql);
    foreach ($result as $row){
        $title = $row['title'];
    }
    $conn->close();
}
?>



<form action="" method="post">
    <input type="text" name="item_to_update" value="<?php echo $title?>">
    <input type="submit" name="submit" value="submit">
</form>

</body>
</html>

