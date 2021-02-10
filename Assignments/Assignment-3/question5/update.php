<?php
include('connection.php');
?>

<?php
// include('connection.php');
$id = $_GET['id'];
// echo "$id";
$sql = "SELECT * FROM `users` WHERE `id`=$id";
$result = mysqli_query($connection,$sql);
$row = $result->fetch_assoc();
$user = $row['username'];
$email = $row['email'];
$gender = $row['gender'];
$city = $row['city'];

// echo "...............";
?>

<?php
    if(isset($_POST['Update'])){
        $user1 = $_POST['username'];
        $email1 = $_POST['email'];
        $gender1 = $_POST['gender'];
        $city1 = $_POST['city'];

        echo "$user1";
        $sql = "UPDATE `users` SET username='$user1',email='$email1',gender='$gender1',city='$city1' WHERE id='$id'";
        if(mysqli_query($connection,$sql)){
            echo "Data updated successfully...";
            header("Location:index.php");
        }else{
            echo "Falied";
        }
    }
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
            <form action="update.php?id=<?php echo "$id";?>" method="POST">
                <input type="text" name="username" value = <?php echo "$user"?> placeholder="Enter here" required><br>
                <input type="email" name="email" value = <?php echo "$email"?> placeholder="Enter here" required><br>

                <input type="radio" name="gender" value="male" <?php if($gender=="male"){echo "checked";}?>>
                <label for="male">Male</label> <br>
                <input type="radio" name="gender" value="female" <?php if($gender=="female"){echo "checked";}?>>
                <label for="female">Female</label><br>

                <Select name="city" >
                    <option value="meerut" <?php if($city=="meerut"){echo "selected";}?>>Meerut</option>
                    <option value="Delhi" <?php if($city=="Delhi"){echo "selected";}?>>Delhi</option>
                    <option value="gzb" <?php if($city=="gzb"){echo "selected";}?>>Ghaziabad</option>
                    <option value="Noida" <?php if($city=="Noida"){echo "selected";}?>>Noida</option>
                </Select> <br>
                <input type="submit" value="Update" class="btn" name="Update">
            </form>
        </div>

    </div>
</body>

</html>