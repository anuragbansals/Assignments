<?php
include('connection.php');
?>
<?php


if (isset($_POST['username'])) {
    $name = $_POST['username'];
} else {
    $name = "";
}
//  $name = $_POST['username'];


$output = "SELECT * FROM `user` WHERE `Name`='$name'";
// mysql_select_db('Web');
// mysqli_query($connection,$output);
$result = mysqli_query($connection, $output);

while ($row = $result->fetch_assoc()) {
    echo "<br> Name: " . $row["Name"] . " Email: " . $row["Email"] . " Gender: " . $row["Gender"] . " City: " . $row["City"];
}


// echo "$output";

?>


<html>

<body>
    <form action="" method="POST">
        Search<input type="text" placeholder="Enter a name" name="username">
        <input type="submit" value="submit">
    </form>
</body>

</html>