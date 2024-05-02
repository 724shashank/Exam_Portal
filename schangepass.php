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
        width:600px;
        height:500px;
        background-color: white;
        margin-left:450px; 
        margin-top: 100px;
        box-sizing: border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
       }
     .input
     {
        margin-left:100px;
        width:400px;
        height:60px;
        font-size:20px;
        font-family: Consolas;
     }
     #grad
     {
        background-image: linear-gradient(to top ,grey,lightgrey); 
     }
     .btn
     {
        width:100px;
        height:40px;
        margin-left:140px
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
    <table width="600" height="500">
        <tr style="font-size:30px;background-color:black;color:white;text-align: center;"><td colspan="2"><u >Change-Password</u></td></tr>
    <tr><td colspan="2"><input class="input" type="password" name="pswd" placeholder="Enter Old Password"></td></tr>
    <tr><td colspan="2"><input class="input" type="password" name="npswd" placeholder="Enter New Password"></td></tr>
   <tr><td  colspan="2"> <input class="input" type="password" name="cpswd"placeholder="Confirm Paasword"></td></tr>
   <tr style="background-color:black;color:white;"><td><input type="submit" name="submit" class="btn"><input type="reset" class="btn"></td></tr>
    </table>
</form>
    </div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
    $pswd=$_REQUEST['pswd'];
    $npswd=$_REQUEST['npswd'];
    $cpswd=$_REQUEST['cpswd'];
    
   
    session_start();
    $user=$_SESSION['user'];
    $con=mysqli_connect("127.0.0.1","root","","online_exam");
    $query="select * from login where email='$user' and password='$pswd' and usertype='member' ";
   
    $res=mysqli_query($con,$query);
   
    if($row=mysqli_fetch_array($res))
    {  
        if($npswd==$cpswd)
        {
        $update="update login set password='$cpswd' where email='$user'";
         
        $res3=mysqli_query($con,$update);
        
        if($res3>0)
        echo"<script>alert('Password_Updated_Successfully!')</script>"; 
        else
        echo"<script>alert('Error_In_Password_Updation!')</script>";   
        }
        else
        {
           echo"<script>alert('New & confirm Password does match !')</script>"; 
        }
   }
    else
    {
    echo"<script>alert('Invalid_Password')</script>";
    }
}
?>
