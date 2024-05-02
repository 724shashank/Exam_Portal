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
        width:1015px;
        height:500px;
        background-color: white;
        margin-left:280px; 
        margin-top: 100px;
        box-sizing: border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
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
    
    <div class="div1" id="grad" style="overflow:scroll">

    <table border="1px" width="1000" cellspacing="0px" cellpadding="5px">
        <tr><h1 style="text-align: center;"><u>Student-List</u></h1></tr>
        <tr style="background-color:black;color: white;">
            <td>Email</td>
            <td>Name</td>
            <td>Qualification</td>
            <td>Date of birth</td>
            <td>Gender</td>
            <td>Address</td>
            <td>City</td>
            <td>State</td>
            <td>Pincode</td>
            <td>Contact</td>
        </tr>

<?php
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$query="select * from stu_info ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
echo"<tr><td>".$row['email']."</td><td>".$row['sname']."</td><td>".$row['squa']."</td><td>".$row['sdob']."</td><td>".$row['sgender']."</td><td>".$row['sadd']."</td><td>".$row['scity']."</td><td>".$row['state']."</td><td>".$row['pin']."</td><td>".$row['scont']."</td></tr>";
}
?>        

</table>
</div>
</body>
</html>
