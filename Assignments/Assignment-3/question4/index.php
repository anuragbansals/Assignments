<?php
include('connection.php');
?>

<?php

if(isset($_POST['username'])){
    $username = $_POST['username'];
}
else {
    $username = '';
}
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
else {
    $email = '';
}
if(isset($_POST['gender'])){
    $gender = $_POST['gender'];
}
else {
    $gender = '';
}
if(isset($_POST['city'])){
    $city = $_POST['city'];
}
else {
    $city = '';
}
if(isset($_POST['branch'])){
    $branch = $_POST['branch'];
}
else {
    $branch = '';
}
if(isset($_POST['year'])){
    $year = $_POST['year'];
}
else {
    $year = '';
}
?>
<?php
$output = "SELECT `id`,`username`,`email`,`gender`,`city` FROM `users`";
// mysql_select_db('Web');
// mysqli_query($connection,$output);
$result = mysqli_query($connection, $output);
// if($result){
//     echo "chal gaya";
// }else{
//     echo "nahi chala";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <td>Id</td>
                <td>Usernmae</td>
                <td>Email</td>
                <td>Gender</td>
                <td>City</td>
            </tr>
            <tbody>
                <?php
                    while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['gender']?></td>
                    <td><?php echo $row['city']?></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>