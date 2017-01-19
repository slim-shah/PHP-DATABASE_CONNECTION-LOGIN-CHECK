<html>
<head> <title> STUDENT LOGIN INFORMATION </title>
  <head><h1>Student Information</h1>
  <table align='right'><tr><td><align="right"><m2><a href='logout.php'>Logout</a></m2></td></tr>
  <hr>
  </table>
  </head>
 <style type="text/css">
  h1{font-size:40;
     color:green;
     }
  h2{font-size:25;
     color:green;
     }
  
  m1{font-size:30;
     color:red;
     }
  m2{font-size:20;
     color:green;
	 align="center";
	 }
  m3{font-size:25;
     color:red;
	 align="center";
	 }
  </style> 

<?php
   session_start();
 if(!isset($_SESSION['user']))
  {
    header('location:index.php');
  }
$conn = mysql_connect('localhost','root','');
mysql_select_db('project');
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   $sql="SELECT * FROM details WHERE roll_num LIKE '%".$_SESSION['user']."%'";
   $resource = mysql_query( $sql,$conn);
   $row=mysql_fetch_row($resource);
  echo "<table><tr><td><h2>WELCOME TO SITE :</h2><td>";
  echo "<td><h2>$row[1]</td></h2>";
  echo "<td><h2>$row[2]</td></h2></tr></table>";
  
   mysql_close($conn); 
?>
  
<body style="background-color:lightgrey">
<table>
    <form action="fetch.php" method="post">
  <tr><td><m1>Enter data whose details you want to find</m1></td>
   <tr><td><m3>Search by Roll number:</m3><td>
  <td><input type="text" name="roll_num1" ></td>
  <td><input type="submit" value="search"></td>
  </tr>
 <tr><td><m3>Search by First name , Last name and Department:</m3></td>
  <td><input type= "text" name="first_name1" ></td>
  <td><input type= "text" name="last_name1" ></td>
 <td>
  <select name="department">
    <option value="CSPIT">CSPIT</option>
    <option value="CMPIC">CMPIC</option> 
    <option value="PDPIS">PDPIS</option>
    <option value="RPCP">RPCP</option>  
    <option value="I2IM">I2IM</option>
</select>
</td>
  <td><input type="submit" value="search"> 
  </tr>
  </form>
  
  <img src="charu1.jpg" alt="charu1" align="right" ismap/>
    </table>
	</body>
  </html>