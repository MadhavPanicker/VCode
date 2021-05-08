<?php
session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'vcode');

$username = $_POST['username'];
$password = $_POST['password'];

$s = "select * from users where username = '$username' && password = '$password'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

if($num==1){
    $t = "insert into login(username) values('$username');";
    mysqli_query($con,$t);
    header('location:home.php');
    mysqli_query($con,"update login set status=1 where username='$username'");
} else{
    header('location:loginfailed.php');
}
?>