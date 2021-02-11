<?php
    if(isset($_POST['number1'])){
        $num1 = $_POST['number1'];
    }else{
        $num1 = 0;
    }
    if(isset($_POST['number2'])){
        $num2 = $_POST['number2'];
    }else{
        $num2 = 0;
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
        <form action="index.php" method="post">
            <div class="input1" >
                First number <input type="number" name="number1" id="" placeholder="Enter here" required>
            </div>
            <div class="input2" >
                Second number <input type="number" name="number2" id="" placeholder="Enter here" required>
            </div>
            <div class="input3">
                <input type="submit" value="Submit" name="submit">
            </div>
        </form>
    </div>
    <div class="output">
        <?php
            $sum = $num1 + $num2;
            if(isset($_POST['submit'])){
                echo "Sum is $sum";
            }
        ?>
    </div>
</body>
</html>



