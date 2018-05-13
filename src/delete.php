<?php
    if (isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = $_GET['id'];
    } else {
        header('Location: index.php');
    }
?>
<!DOCTYPE>
<html>
    <head>
        <title> DELETE NOTE</title>
    </head>
    <body>
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
            $sql = "DELETE FROM todo_list where id=$id";
            if ($conn->query($sql) === TRUE) {
                echo '<p>Todo item Deleted</p>';
            } else {
                echo "Error: " . $sql / "<br>" . $conn->error;
            }
            $conn->close();
        ?>
    </body>
</html>
