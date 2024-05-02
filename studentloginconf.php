<?php
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$q1="select email from login where email='$user' AND password='$pswd' AND usertype='member'";
$res=mysqli_query($con,$q1);
if($row=mysqli_fetch_array($res))
{
	session_start();
	$_SESSION['user']=$user;
	header("location:student.php");
}
else
{
	header("location:index.php?error=invalid Username or Password");
}
?>