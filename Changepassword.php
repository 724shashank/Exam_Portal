<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@800&family=Baloo+Bhaina+2:wght@800&display=swap" rel="stylesheet">
    <style>
        /* CSS RESET  */
        body{
            font-family: 'Baloo Bhai 2', cursive;
            margin: 0px;
            padding: 0px;
            background: url(Images/Student7.jpg);
            background-repeat:no-repeat ;
           background-size: 1550px 800px;  
           font-family: Baloo Bhai;  
           
        }
         .navbar
        {
         
         margin-top: 25px;
         border-radius: 5px;
        }
        .navbar li{
            display: inline-block;
        }
        .navbar li a{
            color: white;
            font-size: 20px;
            padding: 33px 45px;
            text-decoration: none;
        }
        .navbar li a:hover{
           
           color: grey;
           font-size: 23px;
           text-decoration: none; 
       }
       .div1
       {
        width:615px;
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
        width:600px;
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
        
     }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
        <ul>
        <li><a href="studentlist.php"> Student List</a> </li>
        <li><a href="addquestion.php">Add Question</a></li>
        <li><a href="updatequestion.php"> Update Question</a> </li>
        <li><a href="questionlist.php"> Question List</a> </li>
        <li><a href="adminres.php">Result</a></li>
        <li> <a href="Changepassword.php">Account</a></li>
        <li><a href="adminfed.php">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div><hr>
    </header>
    
    <div class="div1" id="grad">
        <form>
    <table width="600" height="500">
        <tr><td colspan="2" style="text-align: center;font-size:20px;font-family: Consolas;"><u >Change-Password</u></td></tr>
    <tr><td colspan="2"><input class="input" type="password" name="pswd" placeholder="Enter Old Password"></td></tr>
    <tr><td colspan="2"><input class="input" type="password" name="npswd" placeholder="Enter New Password"></td></tr>
   <tr><td  colspan="2"> <input class="input" type="password" name="cpswd"placeholder="Confirm Paasword"></td></tr>
   <tr><td><input type="submit" name="submit" class="btn" style="float: right;"></td><td><input type="reset" class="btn"></td></tr>
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
    $query="select * from login where email='$user' and password='$pswd' and usertype='admin' ";
    $res=mysqli_query($con,$query);
    if($row=mysqli_fetch_array($res))
    {  
        if($npswd==$cpswd)
        {
        $update="update login set password='$cpswd' where email='$user'";
        $res2=mysqli_query($con,$update);
        if($res2>0)
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
