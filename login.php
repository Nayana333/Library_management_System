<?php
$username=$_POST["usn"];
$password=$_POST["psw"];
$con=mysql_connect("localhost","root","");
if(!$con)
die("failed to connect".mysql_error($con));
$db=mysql_select_db("project_65",$con);
if(!$db)
die("couldn't connect to database".mysql_error($con));
$q="select * from login where usn='$username' and psw='$password'";
$result=mysql_query($q);
session_start();
if(mysql_num_rows($result)>0)
{
$_SESSION["usn"]=$username;
$row=mysql_fetch_array($result);
$r=$row["type"];
echo $r;
if($r=="admin")
{
header('location:admin.php');
}
else if($r=="student")
{
$q="select adno from student where usn='$username'";
$result=mysql_query($q,$con);
$row=mysql_fetch_array($result);
$adno=$row["adno"];
$_SESSION["adno"]=$adno;
header('location:student.php');
}
else if($r=="teacher")
{
$q="select tid from teacher where usn='$username'";
$result=mysql_query($q,$con);
$row=mysql_fetch_array($result);
$tid=$row["tid"];
$_SESSION["tid"]=$tid;
header('location:teacher.php');
}
else if($r=="staff")
{
$q="select stid from staff where usn='$username'";
$result=mysql_query($q,$con);
$row=mysql_fetch_array($result);
$stid=$row["stid"];
$_SESSION["stid"]=$stid;
header('location:staff.php');
}
mysql_close($con);
}
?>

