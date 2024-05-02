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
        width:720px;
        height:500px;
        background-color: white;
        margin-left:450px; 
        margin-top: 100px;
        box-sizing: border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
        font-size: 20px;

       }
   #grad
     {
        background-image: linear-gradient(to top ,grey,lightgrey); 
     }
    .input
    {
        height: 40px;
        width: 500px;
        font-size: 20px;
        font-family: Consolas;

    }
    table
    {
       
        text-align: center;
        margin-left: 15px;
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
        <li><a href="">Result</a></li>
        <li> <a href="">Account</a></li>
        <li><a href="">Feedback</a></li>
        <li><a href="logout.php">Logout</a></li>
        </ul>
    </div><hr>
    <div class="div1" id="grad">
   
   <?php
    $id=$_REQUEST['search'];
    $con=mysqli_connect("127.0.0.1","root","","online_exam");
    $q="select * from ques_mstr where qid='$id'";
    $res=mysqli_query($con,$q);
    if($row=mysqli_fetch_array($res))
    {
        $id=$row['qid'];
        $ques=$row['ques'];
        $opt1=$row['opt1'];
        $opt2=$row['opt2'];
        $opt3=$row['opt3'];
        $opt4=$row['opt4'];
        $ans=$row['ans'];
        echo"<form>";
        echo"<table width=700 height=500 >";
        echo"<tr><td style='font-size:20px;' colspan=4><h1><u>Update-Delete Question</u></h1><td><tr>";
        echo"<tr><td colspan=2>Question-ID</td><td colspan=2><input type='text' value='$id' name='id' class=input></td></tr>";
        echo"<tr><td colspan=2>Question</td><td colspan=2><input type='text' value='$ques' name='ques' class=input></td></tr>";
        echo"<tr><td colspan=2>Option-1</td><td colspan=2><input type='text' value='$opt1' name='opt1' class=input></td></tr>";
        echo"<tr><td colspan=2>Option-2</td><td colspan=2><input type='text' value='$opt2' name='opt2' class=input></td></tr>";
        echo"<tr><td colspan=2>Option-3</td><td colspan=2><input type='text' value='$opt3' name='opt3' class=input></td></tr>";
        echo"<tr><td colspan=2>Option-4</td><td colspan=2><input type='text' value='$opt4' name='opt4' class=input></td></tr>";
        echo"<tr><td colspan=2>Answer</td><td colspan=2><input type='text' value='$ans' name='ans' class=input></td></tr>";
        echo"<tr><td><input type='submit' value='update' name='opr' ></td><td ><input type='submit' value='delete' name='opr' ></td></tr>";
        echo"</table></form>";
    }
    else
    {
        header('location:updatequestion.php?Invalid Question-ID');
    }
    
    if(isset($_REQUEST['opr']))
    {
     $id=$_REQUEST['id'];
     $ques=$_REQUEST['ques'];
     $opt1=$_REQUEST['opt1'];
     $opt2=$_REQUEST['opt2'];
     $opt3=$_REQUEST['opt3'];
     $opt4=$_REQUEST['opt4'];
     $ans=$_REQUEST['ans'];
    $con=mysqli_connect("127.0.0.1","root","","online_exam");  
    $query1="update ques_mstr set ques='$ques',opt1='$opt1',opt2='$opt2',opt3='$opt3',opt4='$opt4',ans='$ans' where qid='$id'";
    $query2="delete from ques_mstr where qid='$id'";
    if($_REQUEST['opr']=="update")
    {
        $res=mysqli_query($con,$query1);
        if($res>0)
        {
            header("location:questionlist.php?msg=question updated");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }
    }
    else
    {

        $res=mysqli_query($con,$query2);
        if($res>0)
        {
            header("location:questionlist.php?msg=question Deleted");
        }
        else
        {
            echo"<script>alert('Error !')</script>";
        }  
    }
    }
    ?>
</div>
</header>
</body>
</html>