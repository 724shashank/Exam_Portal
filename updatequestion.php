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
        width:550px;
        height:250px;
        background-color: white;
        margin-left:500px; 
        margin-top: 150px;
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
        margin-left:40px;
        height: 40px;
        width: 430px;
        font-size: 20px;
        font-family: Consolas;
    }
     .btn
     {
        width:100px;
        height:40px;
        margin-left:50px;
     
     }
    table
    {
    
        text-align: center;
        margin-left: 15px;
        margin-top:100px;
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

    <form class="div1" id="grad" action="updatedeletequestion.php">
        
        <table >
            <tr><td colspan="3" ><h1><u>Update-Question</u></h1></td></tr>
            <tr><td colspan="3"><input class="input" type="number" name="search" placeholder="Enter Question-ID"></td></tr>
            <tr><td colspan="2" ><input type="submit" name="button" value="Submit" class="btn" ><input type="reset"value="Reset" class="btn"></td></tr>
        </table>
   
    </form>
    </header>
    </body>
    </html>
