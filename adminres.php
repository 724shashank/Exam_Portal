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
        width:870px;
        height:300px;
        background-color: white;
        margin-left:400px; 
        margin-top: 100px;
        box-sizing: border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px;
        overflow: scroll; 
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
        
        <table style="font-size:20px;text-align:justify;width:850px;"border=1>
            <tr><td colspan="7" style="text-align:center;font-size:30px;"><b><u>**Student-Result**</u></b></td></tr>
            <tr style="background-color:black;color:white;"><td>Student-Name</td><td>Qualification</td><td>Date-Of-Birth</td><td>Gender</td><td>Exam-Date</td><td>Maximum-Marks</td><td>Marks-Obtained</td></tr>
            
       
            <?php
            $con=mysqli_connect("127.0.0.1","root","","online_exam");
            $sql="select stu_info.sname,stu_info.squa,stu_info.sdob,stu_info.sgender,result.edate,result.maximum,result.obtained from stu_info,result where result.sid=stu_info.email";
            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($res))
            {
                echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td></tr>";
            }

            ?>
             </table>
             </div>
             </body>
             </html>