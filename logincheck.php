<?php 
session_start();
mysql_connect('localhost','root','');
mysql_select_db('project');

$qry="select * from login where username='".$_POST['username']."' and password='".$_POST['password']."'";
//echo $qry;
$res=mysql_query($qry);
$data=mysql_fetch_array($res);
$Unm=  mysql_real_escape_string($data['username']);
$Pwd=  mysql_real_escape_string($data['password']);

if($data)
{
    $_SESSION['user']=$Unm;
    header('location:home.php');   
}    
else
{   
   header('location:index.php');  
}
?>
