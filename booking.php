<?php
session_start();
$db = mysqli_connect("localhost", "root", "", "clinic") or die("Unable to connect");
if (isset($_POST['submit'])) {
$account_id=$_SESSION['account_id'];
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$doctor=$_POST['doc'];
$timings=$_POST['time'];
$symptoms=$_POST['sym'];
$sql1 = "INSERT INTO appointment (account_id,patient_name,age,gender,doctor_name,timings,symptoms,status) 
	VALUES ('$account_id','$name','$age','$gender','$doctor','$timings','$symptoms','waiting')";
mysqli_query($db, $sql1);
echo "booking details saved";
}
?>