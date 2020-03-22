<?php
session_start();
header('location:backend/login.php');
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='masu';
$con=mysqli_connect($mysql_host, $mysql_user,$mysql_password);
mysqli_select_db($con,'useraccounts');
if(isset($_POST['create'])){
    $firstname      = $_POST['firstname'];
    $lastname       = $_POST['lastname'];
    $email          =$_POST['email'];
    $phonenumber    =$_POST['phonenumber'];
    $category       =$_POST['category'];
    $password       =$_POST['password'];

$q= "SELECT * FROM register WHERE email = '$email'";
$result = mysqli_query($con, $q);
$num= mysqli_num_rows($result);
if($num == 1)
{
    echo"Email address alredy registered. Try Login";
}
else
{
    $qy="INSERT INTO register(firstname, lastname, email, phonenumber, category, password) VALUES ('$firstname','$lastname','$email','$phonenumber','$category','$password')";
    mysqli_query($con,$qy);
}
}

?>