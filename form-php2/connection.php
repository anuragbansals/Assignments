<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "Web";

$connection = mysqli_connect($hostname,$username,$password,$databasename);
if($connection)
{
    // echo  "Connection successful";
}
else
{
    echo "Connection failed..." + mysqli_connect_error();
}
