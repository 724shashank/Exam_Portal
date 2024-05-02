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

        .div1
       {
        width:400px;
        height:600px;
        background-color: white;
        margin-left:580px; 
       margin-top:40px;
        box-sizing: border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
       }
     #grad
     {
        background-image: linear-gradient(to top ,grey,lightgrey); 
     }
     .input
     {
        margin-top:10px;
        margin-left: 20px;
        height: 40px;
        width: 350px;
        font-size: 20px;
        font-family: Consolas;

    }
    .textarea
     {
        margin-left: 20px;
        height: 300px;
        width: 352px;
        font-size: 20px;
        font-family: Consolas;

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
    <div class="div1" id="grad">
        <form>
                <h1 style="text-align:center"><u>Feedback</u></h1>
                <input type="text" name="subject" placeholder="Enter-Subject" class="input"><br><br>
                <textarea placeholder="Message" class="textarea" name="message"></textarea><br><br>
                <input type="submit" name=submit style="margin-left:24px;height: 40px;width: 350px;font-size: 20px;font-family: Consolas;"><br><br><input type="reset"style="margin-left:24px;height: 40px;width: 350px;font-size: 20px;font-family: Consolas;">
        
        </form>

    </div>
    
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
session_start();
$user=$_SESSION['user'];
$sub=$_REQUEST['subject'];
$msg=$_REQUEST['message'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$sql="insert into feedback(sid,date,subject,message) values ('$user',curdate(),'$sub','$msg')";
$res=mysqli_query($con,$sql);
if($res>0)
{
    echo"<script>alert('Your Feedback is Submitted')</script>";
}
else
{
    echo"<script>alert('Error in Submission')</script>";
}
}
?>