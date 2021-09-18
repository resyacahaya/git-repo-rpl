<?php

session_start();
header('location:index.php');

require_once "config.php";

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " SELECT * FROM usertable WHERE name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    echo "Username Already Taken";
}
else{
    $reg = " INSERT INTO usertable(name , password) VALUES('$name','$pass')";
    mysqli_query($con, $reg);
    echo "Registration Successful";
}

?>