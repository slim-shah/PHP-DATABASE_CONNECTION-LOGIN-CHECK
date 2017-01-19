<?php
	/*echo $_POST['username'];
	echo $_POST['password'];
	echo $_POST['first_name'];
	echo $_POST['last_name'];
	echo $_POST['department'];
	echo $_POST['email'];
	echo $_POST['Address'];
	echo $_POST['phone_num']; 
if($_POST['username']!="" && $_POST['password']!="" && $_POST['firstname']!="" && $_POST['lastname']!="" && $_POST['department']!="" && $_POST['email-id']!="" && $_POST['address']!="" && $_POST['cname']!="")
{*/	
	$A=$_POST['username'];
	$B=$_POST['password'];
	$C=$_POST['first_name'];
	$D=$_POST['last_name'];
	$E=$_POST['department'];
	$F=$_POST['email'];
	$G=$_POST['Address'];
	$H=$_POST['phone_num'];
		$con=mysql_connect('localhost','root','');
		if($con)
		{
			mysql_select_db("project");
			$query="insert into details (roll_num,first_name,last_name,department,email,Address,phone_num) 
			                    values('".$A."','".$C."','".$D."','".$E."','".$F."','".$G."','".$H."')";
			$query1="insert into login (username,password) values('".$A."','".$B."')";
			if(mysql_query($query,$con) && mysql_query($query1,$con))
			{
				header("location:home.php");
			}
			else
			{
				echo "USER ALREADY EXISTS PLEASE CHOOSE DIFFERENT USER NAME";
			}				
			mysql_close($con);
		}
		else
		{
			header("location:registration.php?error=CONNECTION FAIL......!!!!!!!");
		}
/*}
else
{
	header("location:signup.php?error=ALL FIELD MUST BE FILL...!!!");
}*/
?>