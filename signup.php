<html>
  <style type="text/css">
  h1{font-size:30;
     color:green;
     }
 h2{color:red;
     }
 m1{font-size:20;
     color:red;
     }
 </style> 
  <head>
    <h1>Student Information</h1>
    <hr>
  </head>
  
<body style="background-color:lightgrey">
  </body>
  <img src="charu1.jpg" alt="charu1" align="right" ismap/>
  <form action="register.php" method="post">
  <table align="left">
  <tr><td><h2 for"UserName">User-Name:</h2></td> 
  <td><input type="text" name="username" <h3>&nbsp &nbspit should be your roll number</h3></td></tr>
  <tr><td><h2 for"Password">Password:</h2></td>
  <td><input type="password" name="password"></td></tr> 
  <tr><td><h2 for"Name">First Name:</h2></td>
  <td><input type="text" name="first_name"></td></tr> 
  <tr><td><h2 for"Last name">Last Name:</h2></td>
 <td><input type="text" name="last_name"></td></tr>
<tr> <td><h2>Department:</h2></td>
 <td>
  <select name="department">
    <option value="CSPIT">CSPIT</option>
    <option value="CMPIC">CMPIC</option> 
    <option value="PDPIS">PDPIS</option>
    <option value="RPCP">RPCP</option>  
    <option value="I2IM">I2IM</option>
</select></h2>
</td>
</tr>
 <tr><td> <h2 for email-id>Email-id:</h2></td>     
<td><input type="text" name="email"></td></tr>
<tr><td><h2 for address>Address:</h2></td>     
<td><textarea style="width:142px" name="Address"></textarea></td></tr>
<tr><td><h2 for contact num>contact Number:</h2></td>     
<td><input type="text" name="phone_num"></td></tr>
  <br><br>
  <tr><td><input type="submit" value="Submit"></td></tr>
  </table>
</form>
<marquee align="bottom" direction=left behaviour="alternate"><m1>*This is just prototype</m1></marquee>

</hmtl>