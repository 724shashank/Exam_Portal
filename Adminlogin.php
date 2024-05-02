<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            background-color:black;
            width: 400px;
            height: 400px;
            border-radius: 5px;
            margin-top: 100px;
            box-shadow: 12px 12px yellow  ;
         }
         #login{
             color:yellow;
             padding-top: 20px;
             
         }
         .table{
             width: 300px;
             height: 180px;
            color: white;
            padding: 30px;
            font-size: 25px;
            padding: 10px;
            border: white;
                     }
                     #button{
                         width: 300px;
                         height:50px ;
                         background: yellow ;
                         border-radius: 13px;
                         font-size: 33px;
                          }
                          #td input
                          {
                         width: 300px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px;

                          }
                        #td select
                        {
                         width: 305px;
                         height:43px ;
                         background: white;
                         border-radius: 13px;
                         font-size: 33px; 
                        }
                        
    </style>
</head> 
<body bgcolor="	#383838">
    
   <center><div class="box"><h1 id="login"> Admin Login </h1><hr>
    <form>
    <table class="table" id="td">
     <tr> <td><select  name="usertype"><option>Admin</option></select></td></tr>
<tr><td><input type="text" name="user" placeholder="Email / Username"></td></tr>
<tr><td><input type="password" name="pswd" placeholder="Password"></td></tr>
</table>
 <input type="submit" name="login" value="Login" id="button">
    <hr>
    <label style="color: white; margin-right: 120px; font-size: 17px;">
        <input type="checkbox" checked="checked" name="remember"> Remember me  </label> 
        <label style="color: white; font-size: 17px;">Forget Password?</label>
</form>
</div>
</center> 
</body>
</html>

<?php
if(isset($_REQUEST['login']))
{
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
$q2="select email from login where email='$user' AND password='$pswd' AND usertype='admin'";
$res=mysqli_query($con,$q2);
if($row=mysqli_fetch_array($res))
{
    session_start();
    $_SESSION['user']=$user;
    header("location:adminhome.php");
}
else
{
    header("location:adminlogin.php?error=invalid Username or password");
}
}
?>