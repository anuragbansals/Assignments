<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="form">
        <form action="index.php" method="post">
            Name<input type="text" placeholder="Enter name" required name="name"> <br>
            Email <input type="email" placeholder="Enter email" required name="email"> <br>
            Contact <input type="number" name="contact" placeholder="Enter contact no."> <br>

            Select City <select name="city">
                <option value="Dehradun">Dehradun</option>
                <option value="Meerut">Meerut</option>
                <option value="Dehradun">Dehradun</option>
            </select><br>
            Select Course<select name="course">
                <option value="Btech">B.Tech</option>
                <option value="bcom">B.Com</option>
                <option value="bsc">B.Sc</option>
            </select><br>
            Interests <br> Programming<input type="checkbox" name="interest[]" value="programming">
            Sports<input type="checkbox" name="interest[]" value="sports">
            Reading<input type="checkbox" name="interest[]" value="reading"><br>
            Cooking<input type="checkbox" name="interest[]" value="cooking"><br>
            Gardening<input type="checkbox" name="interest[]" value="gardening"><br>
            Movies<input type="checkbox" name="interest[]" value="movies"><br>
            Music<input type="checkbox" name="interest[]" value="music"><br>
            Submit <br><input type="submit" value="Click here to submit" name="submit">
        </form>
    </div>
    <?php
    if (array_key_exists('submit',$_POST) && strlen($_POST['contact']) != 10) {
        echo '<script>alert("Invalid Number")</script>';
        
    } else {
        $number = $_POST['contact'];
    }
    

    ?>

    <div class="container">

        <table id="tab">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>City</th>
                <th>Course</th>
                <th>Interest</th>
            </tr>
            <tr class="row1">
                <td><?php echo $_POST['name'] ?></td>
                <td><?php echo $_POST['email'] ?></td>
                <td><?php echo $_POST['contact'] ?></td>
                <td><?php echo $_POST['city'] ?></td>
                <td><?php echo $_POST['course'] ?></td>
                <td><?php 
                    
                ?></td>
            </tr>
        </table>
    </div>
    <script>
        // window.onload= function reload() {
        //      document.querySelector('.row1').remove();
        // }
    </script>
</body>

</html>