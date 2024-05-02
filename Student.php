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