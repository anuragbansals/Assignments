<?php

include('connection.php');
$id = $_GET['id'];

$sql = "DELETE FROM `users` WHERE id='$id'";
if(mysqli_query($connection,$sql)){
    header('Location:index.php');
}
?>

<!-- <html>
    <body>
        <input type="text" name="username">
    </body>
</html> -->