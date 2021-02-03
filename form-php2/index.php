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



// $sql = "INSERT INTO 'user' ('Name', 'Email','Gender','City') VALUES ('$username','$email','$gender','$city')";
$sql = "INSERT INTO `user` (`Name`, `Email`, `Gender`, `City`) VALUES ('$username', '$email', '$gender', '$city')";
mysqli_query($connection,$sql);
$sql = "INSERT INTO `user2` (`Name`, `Branch`, `Year`) VALUES ('$username','$branch', '$year')";
mysqli_query($connection,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="index.php" method="POST">
            Username<input type="text" name="username" placeholder="Enter username"><br>
            Email<input type="email" name="email" placeholder="Enter email"><br>
            Gender<select name="gender" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br>City<select name="city" id="">
                <option value="Dehradun">Dehradun</option>
                <option value="Haridwar">Haridwar</option>
                <option value="Meerut">Meerut</option>
            </select>
            <br>Branch<select name="branch" id="">
                <option value="cs">CSE</option>
                <option value="ece">Ece</option>
                <option value="mechanical">Mechanical</option>
            </select>
            <br>Year<select name="year" id="">
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
            </select>
            <input type="submit" value="submit">
        </form>
    </div>
</body>
</html>