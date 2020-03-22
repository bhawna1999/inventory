<?php
session_start();
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='masu';
$con=mysqli_connect($mysql_host, $mysql_user,$mysql_password);
mysqli_select_db($con,'useraccounts');
if(isset($_POST['create'])){
    $email          =$_POST['email'];
    $password       =$_POST['password'];

$q= "SELECT * FROM register WHERE email = '$email' && password ='$password'";
$result = mysqli_query($con, $q);
$num= mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['username']=$email;
    header('location:storekeeper.php');
}
else
{
    header('location:login.php');
}
}

?>