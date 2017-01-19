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
     color:red;
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
<body style="background-color:lightgrey">

<?php
$con=mysql_connect('localhost','root','') or die ('I cannot connect to the database  because: ' . mysql_error());
 mysql_select_db("project");  

$fetch=$_POST['roll_num1'];
$fetch1=$_POST['first_name1'];
$fetch2=$_POST['last_name1'];
$fetch3=$_POST['department'];
	  if(strlen($fetch)>=7)
	  { 
	 	 	$sql="SELECT * FROM details WHERE roll_num LIKE '%".$fetch."%'";
			$result=mysql_query($sql,$con); 
			$row=mysql_fetch_row($result);
        if($row!=0){
	echo "<table margin=auto width=999px border=1>";
        echo "<tr><td><b>ID</b></td><td><b>First Name</b></td><td><b>Last NAME</b></td><td><b>Department</b></td><td><b>E-mail</b></td><td><b>Address</b></td><td><b>Phonenumber</b></td></tr>";
    
	echo "<tr>";
    echo"<td>$row[0]</td>";
    echo"<td>$row[1]</td>";
    echo"<td>$row[2]</td>";
    echo"<td>$row[3]</td>";
    echo"<td>$row[4]</td>";
    echo"<td>$row[5]</td>";
    echo"<td>$row[6]</td>";
    echo"</tr>";
    echo"</table>";}
	else
	{echo "<h2>Details of the user you are trying to search is not registered on this website</h2>";}
		}
		  
else{ 
	 $sql="SELECT * FROM details WHERE first_name LIKE '%".$fetch1."%' AND last_name LIKE '%".$fetch2."%' AND department LIKE '%".$fetch3."%'"; 
	 $result=mysql_query($sql,$con); 
       $p=0;
	   $f=0;	
		while($row=mysql_fetch_row($result))
	{  
	     if($p==0)
		 { echo "<table margin=auto width=999px border=1 >";
        echo "<tr><td><b>ID</b></td><td><b>First Name</b></td><td><b>Last NAME</b></td><td><b>Department</b></td><td><b>E-mail</b></td><td><b>Address</b></td><td><b>Phonenumber</b></td></tr>";
         $p=1;}
       echo "<tr>";
      echo"<td>$row[0]</td>";
      echo"<td>$row[1]</td>";
      echo"<td>$row[2]</td>";
      echo"<td>$row[3]</td>";
      echo"<td>$row[4]</td>";
      echo"<td>$row[5]</td>";
      echo"<td>$row[6]</td>";
      echo"</tr>";
	  $f=1;
	 }
	  
    echo"</table>"; 	 
       if($f==0)
	  {echo "<h2>Details of the user you are trying to search is not registered on this website</h2>";}		
    }
?>
<img src="charu1.jpg" alt="charu1" align="right" ismap/>
    </body>
  </html>