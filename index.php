<html>
  <style type="text/css">
  h1{font-size:40;
     color:green;
     }
  h2{font-size:30;
     color:red;

  div.vertical-line{
  width: 1px;
  background-color: silver;
  height: 100%;
  float: left;
  border: 2px ridge silver ;
  border-radius: 2px;
                  }
 }
  m1{font-size:20;
     color:red;
     }

  </style> 
<head> <title> STUDENT LOGIN INFORMATION </title></head>
  <script="text/JavaScript">
  <!-- 
  function signup()
  { } -->
  </script>
  <head>
    <h1>Student Information</h1>
    <hr>
  </head>
  
<body style="background-color:lightgrey">
  </body>
<img src="charu1.jpg" alt="charu1" align="right" ismap/>
  <div.vertical-line>
  <form action="logincheck.php" method="post">
  <h2>User name:<br></h2>
  <input type="text" name="username">
  <br>
  <h2>Password:<br></h2>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="login">
  <input type="button" name="b1" value="Sign up" onClick="window.location.href='signup.php';" />  <!--target="_self" -->
<a href='about.php'>About student login </a>
</div.vertical-line>
</form>
<marquee align="bottom" direction=left behaviour="alternate"><m1>*This is just prototype</m1></marquee>
</hmtl>