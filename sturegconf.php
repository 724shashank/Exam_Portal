<?php
$user=$_REQUEST['user'];
$sname=$_REQUEST['sname'];
$qua=$_REQUEST['course'];
$dob=$_REQUEST['dob'];
$gender=$_REQUEST['gender'];
$addr=$_REQUEST['addr'];
$city=$_REQUEST['city'];
$state=$_REQUEST['state'];
$pin=$_REQUEST['pin'];
$cont=$_REQUEST['cont'];
$pswd=$_REQUEST['pswd'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$q1="insert into stu_info(email,sname,squa,sdob,sgender,sadd,scity,state,pin,scont)values('$user','$sname','$qua','$dob','$gender','$addr','$city','$state','$pin','$cont')";
$q2="insert into login(email,password,usertype)values('$user','$pswd','member')";
$res1=mysqli_query($con,$q1);
$res2=mysqli_query($con,$q2);
if($res1>0 && $res2>0)
{
	session_start();
	$_SESSION['user']=$user;
 header('location:index.php');
}

?>