<html>
<?php
    session_start();
    $username=$_SESSION["usn"];
?>
<head>
    <table style="width: 98%;">
            <tr>
                    <td style="float: right;">
                        <div style="padding-top:15px ;">
                        <label style="width:auto; padding-right:20px;">Loggin:<?php echo $username;?></label>
                       <a href="homepageT.php">back </a>
                       </div>
                        </td>
                </tr>

<link href ="css/main.css" rel="stylesheet" /><style>
<title>add new book</title>
<style>
label{
width:120px;
display:inline-block;
</style>
</head>
<header id="header" class="fixed-top" style="">
       <div class="logo" style="width:100%" >
        <table>
            <tr>
                
                <td>
                     <div><img style="height:120px;" src="data:image/png;base64,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" />
     
            </div>
                    </td>
                <td>
                    <div>
                        <h1 style="font-size: 24px;">   NIRMALA COLLEGE LIBRARY </h1>
                </div>
                    </td>
                </tr>
            
            </table>
       
            
        </div>
   
   
       
       </header> 
<div class="bg-image"></div>
<div id="main" class="loginscreen">

       
<div class="common">
    
    <form method="POST" action="">
<center><label><font  color = 'white'>Book Name</label> <input class="php-input"  type="text" name="bname"></font></center><br>
</center> 


<div class="common">
        <div class="col5 rightalign"> <label>&nbsp;</label>   
         </div>
         <div class="col5 leftalign" style="margin-left: 30px;"> &nbsp;
            <input type="submit" name="SEARCH" class="php-form-btn" value="SEARCH">
            <input type="submit" name="BUTTON" class="php-form-btnreset" value="RESET">
         </div>
       
     </div>
 
</form>
  
</div>
</div>


<?php
if($_POST)
{
$bname=$_POST["bname"];
$con=mysql_connect("localhost","root","");
if(!$con)
{
echo "couldn't";
}
$db=mysql_select_db("project_65",$con);
if(!$db)
{
echo "cannot connect db";
}
$val="select * from book where bname='$bname'";
$q=mysql_query($val);
if(mysql_num_rows($q)>0)
{
echo "book is available";
}
else 
{

echo "book is not available";
}
mysql_close($con);
}
?>



 
</body>
 
<html>

