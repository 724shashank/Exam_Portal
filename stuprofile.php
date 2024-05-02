<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* CSS RESET  */
        body{
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;
           
             
           
        }
        .navbar
        {
         display: inline-block;
         border: 3px solid white;
        margin-left: 11%;
         margin-top: 25px;
         border-radius: 5px;
         /* position: fixed; */
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
        .navbar li a:hover{
           
            color: grey;
            font-size: 23px;
            padding:  60px;
            text-decoration: none; 
        }
        .input
    {
        height: 40px;
        width: 400px;
        font-size: 20px;
        font-family: Consolas;

    }
    .btn
    {
        height: 40px;
       
        font-size: 20px;
        font-family: Consolas;

    }
 #grad
     {
        background-image: linear-gradient(to top ,grey,lightgrey); 
     }

    
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="Stuprofile.php">Profile</a> </li>
        <li><a href="stuexam.php">Exam</a></li>
        <li><a href="result.php">Result</a></li>
        <li> <a href="feedback.php">Feedback</a></li>
        <li><a href="schangepass.php">Account</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    </body>
	</html>
	<?php
	session_start();
	$user=$_SESSION['user'];
	$con=mysqli_connect("127.0.0.1","root","","online_exam");
	$sql="select * from stu_info where email='$user'";
	$res=mysqli_query($con,$sql);

	if($row=mysqli_fetch_array($res))
	{
		$email=$row[0];
		$sname=$row[1];
		$squa=$row[2];
		$dob=$row[3];
		$sgender=$row[4];
		$add=$row[5];
		$scity=$row[6];
		$state=$row[7];
		$pin=$row[8];
		$scont=$row[9];  

        echo"<form action=editprofile.php>";
    
        echo"<table width=600 height=600 style='background-color:white;font-size:20px;margin-left:490px;' id=grad>";
        echo"<tr><td colspan=2 style='text-align:center;font-size:30px;background-color:black;color:white;'><b><u>Student-Profile</u></b></td></tr>";
        echo"<tr><td><b>Email/Username:</b></td><td>$email</td></tr>";
        echo"<tr><td><b>Name:</b></td><td>$sname</td></tr>";
        echo"<tr><td><b>Qualification:</b></td><td>$squa</td></tr>";
        echo"<tr><td><b>Date-Of-Birth:</b></td><td>$dob</td></tr>";
        echo"<tr><td><b>Gender:</b></td><td>$sgender</td></tr>";
        echo"<tr><td><b>Address:</b></td><td>$add</td></tr>";
        echo"<tr><td><b>City:</b></td><td>$scity</td></tr>";
        echo"<tr><td><b>State:</b></td><td>$state</td></tr>";
        echo"<tr><td><b>Pincode:</b></td><td>$pin</td></tr>";
        echo"<tr><td><b>Contact:</b></td><td>$scont</td></tr>";
        echo"<tr style='background-color:black;'><td colspan=2><input type='submit' value='Update-Profile'name='update' class=btn></td></tr>";
        echo"</table></form>";  
        }
        
                                       
        ?>                                                                                                                                        
		 
	
