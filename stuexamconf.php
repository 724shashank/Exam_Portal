<?php
$qid[1]=$_REQUEST['qid1'];
$ans[1]="Not Answered";
$qid[2]=$_REQUEST['qid2'];
$ans[2]="Not Answered";
$qid[3]=$_REQUEST['qid3'];
$ans[3]="Not Answered";
$qid[4]=$_REQUEST['qid4'];
$ans[4]="Not Answered";
$qid[5]=$_REQUEST['qid5'];
$ans[5]="Not Answered";
$qid[6]=$_REQUEST['qid6'];
$ans[6]="Not Answered";
$qid[7]=$_REQUEST['qid7'];
$ans[7]="Not Answered";
$qid[8]=$_REQUEST['qid8'];
$ans[8]="Not Answered";
$qid[9]=$_REQUEST['qid9'];
$ans[9]="Not Answered";
$qid[10]=$_REQUEST['qid10'];
$ans[10]="Not Answered";
if(isset($_REQUEST['qid1']))
{
	$ans[1]=$_REQUEST['ans1'];
}
if(isset($_REQUEST['qid2']))
{
	$ans[2]=$_REQUEST['ans2'];
}
if(isset($_REQUEST['qid3']))
{
	$ans[3]=$_REQUEST['ans3'];
}
if(isset($_REQUEST['qid4']))
{
	$ans[4]=$_REQUEST['ans4'];
}
if(isset($_REQUEST['qid5']))
{
	$ans[5]=$_REQUEST['ans5'];
}
if(isset($_REQUEST['qid6']))
{
	$ans[6]=$_REQUEST['ans6'];
}
if(isset($_REQUEST['qid7']))
{
	$ans[7]=$_REQUEST['ans7'];
}
if(isset($_REQUEST['qid8']))
{
	$ans[8]=$_REQUEST['ans8'];
}
if(isset($_REQUEST['qid9']))
{
	$ans[9]=$_REQUEST['ans9'];
}
if(isset($_REQUEST['qid10']))
{
	$ans[10]=$_REQUEST['ans10'];
}

for($i=1;$i<=10;$i++)
echo"<br><b>".$qid[$i].":</b>".$ans[$i];
session_start();
$user=$_SESSION['user'];
$con=mysqli_connect("127.0.0.1","root","","online_exam");
for($i=1;$i<=10;$i++)
{
$sql="insert into result_mstr values('$user','$qid[$i]','$ans[$i]',curdate())";
mysqli_query($con,$sql);
}
$query2="select result_mstr.qid from ques_mstr, result_mstr where ques_mstr.qid=result_mstr.qid
and ques_mstr.ans=result_mstr.answer and result_mstr.sid='$user'";
$marks=0;
$r=mysqli_query($con,$query2);
while($row=mysqli_fetch_array($r))
{
$marks=$marks+5;
}
$query3="insert into result(sid,edate,maximum,obtained) values('$user',curdate(),'100',$marks)";
$i1=mysqli_query($con,$query3);
if($i1>0)
{
header('location:result.php');
}
else
{
echo"Error in Exam";
}
?>