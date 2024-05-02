<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
    	    /* CSS RESET  */
 	   
 	    		#grad
     {
         background-image: linear-gradient(to top ,lightgrey,darkgrey);
         background-repeat:no-repeat ;
         background-size: 1550px 800px;   
     }
 	    	
        .navbar
        {
         display: inline-block;
         border: 3px solid black;
        margin-left: 14%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: black;
            font-size: 23px;
            padding:  60px;
            text-decoration: none;
            margin-left: 70px; 
        }
        .navbar li a:hover{
           
            color: dodgerblue;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }

    
    </style>
</head>
<body id="grad">
    <header>
        <div class="navbar">
        <ul>
        <li><a href="stuprofile.php">Profile</a> </li>
        <li> <a href="feedback.php">Feedback</a></li>
        <li><a href="schangepass.php">Account</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>

	<?php
	session_start();
	$user=$_SESSION['user'];
	$con=mysqli_connect("127.0.0.1","root","","online_exam");
	$query1="select stu_info.sname,stu_info.sgender,stu_info.sdob,stu_info.squa,result.edate,result.maximum,result.obtained from stu_info,result where stu_info.email=result.sid and result.sid='$user'";
	$res1=mysqli_query($con,$query1);
	if($row=mysqli_fetch_array($res1))
	{
	echo "<center>";
	echo"<table width=500 height=500  style='font-size:20px;background-color:white;cell-padding:10px;margin-top:50px;'>"; 
	echo"<tr style='font-size:30px;background-color:black;color:white;'><th colspan=2><b><u>Student-Result</u></b></th></tr>";
	echo"<tr><td><b>Student Name</b></td><td>$row[0]</td></tr>";
	echo"<tr><td><b>Gender</b></td><td>$row[1]</td></tr>";
	echo"<tr><td><b>Date-Of-Birth</b></td><td>$row[2]</td></tr>";
	echo"<tr><td><b>Course</b></td><td>$row[3]</td></tr>";
	echo"<tr><td><b>Maximum-Marks</b></td><td>$row[4]</td></tr>";
	echo"<tr><td><b>Exam-Date</b></td><td>$row[5]</td></tr>";
	echo"<tr><td><b>Marks-Obtained</b></td><td>$row[6]</td></tr>";
    echo"<tr style='background-color:black;'><td colspan=2></td></tr>";
	echo "</table></center>";
	}
	?>    
</body>
</html>