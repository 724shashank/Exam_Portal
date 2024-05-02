<!DOCTYPE html>
<html>
<head>
    <title>Exam</title>
    <style type="text/css">
        body
        {
            background-image: linear-gradient(to right ,lightgrey,black,darkgrey);
        }
    </style>
</head>
<body>
	<center>
<form action="stuexamconf.php">
<table width="1000">
		<?php
        session_start();
        $user=$_SESSION['user'];
        $con=mysqli_connect("127.0.0.1","root","","online_exam");
        $sql="select * from  result where sid='$user' ";
        $res=mysqli_query($con,$sql);
        if($row=mysqli_fetch_array($res))
        {
        echo"<script>alert('Your exam is completed for Re-Exam contact Admin')</script>";
        }
        else
        {
      echo"<tr><td colspan='2' style='text-align: center;color: #00FF05;'><h1><b><u>Online-Exam</u></b><h1></td></tr>";
    $sql="select * from ques_mstr";
    $res=mysqli_query($con,$sql);
    $count=0;
    while($row=mysqli_fetch_array($res))
    {
    	$qid=$row[0];
    	$ques=$row[1];
    	$opt1=$row[2];
    	$opt2=$row[3];
    	$opt3=$row[4];
    	$opt4=$row[5];
echo"<input type=hidden name=qid".++$count." value=".$qid.">";
echo"<tr bgcolor=yellow><td colspan=2><b>Ques".$count." :</b>&nbsp;".$ques."</td></tr>";
echo"<tr bgcolor=lightgrey><td><input type=radio name=ans".$count." value='".$opt1."'>".$opt1."</td><td><input type=radio name=ans".$count." value='".$opt2."'>".$opt2."</td></tr>";
echo"<tr bgcolor=lightgrey><td><input type=radio name=ans".$count." value='".$opt3."'>".$opt3."</td><td><input type=radio name=ans".$count." value=' ".$opt4."'>".$opt4."</td></tr>";
    	
    	if($count==10)
    	break;
    }
    echo"<tr bgcolor=red style='text-align:center'><td><input type=submit name=submit></td><td><input type=reset name=reset></td><tr>";
	}
    ?>
    
</table>    
</form>
</center>
</body>
</html>