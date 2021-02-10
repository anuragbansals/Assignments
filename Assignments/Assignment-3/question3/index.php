<?php
include('connection.php');
?>


<?php

if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = '';
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = '';
}
if (isset($_POST['gender'])) {
    $gender = $_POST['gender'];
} else {
    $gender = '';
}
if (isset($_POST['city'])) {
    $city = $_POST['city'];
} else {
    $city = '';
}

// echo $username.$email.$gender.$city;
$sql = "INSERT INTO `users`(`username`, `email`, `gender`, `city`) VALUES ('$username','$email','$gender','$city')";
$res = mysqli_query($connection, $sql);
// if(!$res){
//     echo "HII";
// }else {
//     echo"xxx";
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
        <div class="left">
            <div class="enter">Enter username <br></div>
            <div class="enter">Enter email <br></div>
            <div class="enter">Select gender <br></div>
            <div class="enter4">Select City <br></div>
        </div>
        <div class="right">
            <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="Enter here" required><br>
                <input type="email" name="email" placeholder="Enter here" required><br>

                <input type="radio" name="gender" value="male">
                <label for="male">Male</label> <br>
                <input type="radio" name="gender" value="female">
                <label for="female">Female</label><br>

                <Select name="city">
                    <option value="meerut">Meerut</option>
                    <option value="delhi">Delhi</option>
                    <option value="gzb">Ghazibad</option>
                    <option value="noida">Noida</option>
                </Select> <br>
                <input type="submit" value="Submit" class="btn">
            </form>
        </div>

    </div>
</body>

</html>