<html>
<head>
<title>Student registration form</title>
<style>
label{
width:120px;
display:inline-block;
}
</style>
</head>
<body>
<center><h2><u>UPDATION FORM</u></h2></center>
<?php
$con=mysql_connect("localhost","root","");
if($con)
$db=mysql_select_db("project_65",$con);
 if(!$db)
{
 die("cannot connect to database".mysql_error($con));
}
session_start();
$adno=$_SESSION["adno"];
$q="select * from student where adno=$adno";
$result=mysql_query($q,$con);
$row=mysql_fetch_array($result);
$adno=$row["adno"];
$sname=$row["sname"];
$dept=$row["dept"];
$mobno=$row["mobno"];
$year=$row["year"];
?>
<form method="POST" action="updateS.php">
<center><label>ADNO:</label><input type="text" name="adno" value="<?php echo $adno;?>"></center><br>
<center><label>NAME:</label><input type="text" name="name" value="<?php echo $sname;?>"></center><br>
<center><label>DEPARTMENT:</label><input type="text" name="dept" value="<?php echo $dept;?>"></center><br>
<center><label>MOBNO:</label><input type="text" name="mobno" value="<?php echo $mobno;?>"></center><br>
<center><label>YEAR:</label><input type="text" name="year" value="<?php echo $year;?>"></center><br>
<center><input type="submit" name="SUBMIT" value="UPDATE"></center>
</form>
</body>
</html>
