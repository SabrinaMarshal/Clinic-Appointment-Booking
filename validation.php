<?php
session_start();

$conn=mysqli_connect('localhost','root','');
mysqli_select_db($conn,'clinic');
$username=$_POST['user'];
$pass=$_POST['password'];

$s="select * from users where username='$username' && password='$pass'";
$result=mysqli_query($conn,$s);
$num=mysqli_num_rows($result);
if($num==1){
	$_SESSION['username']=$username;
	
	echo "Login valid";
}
else
{
	echo "Login invalid";
}

?>