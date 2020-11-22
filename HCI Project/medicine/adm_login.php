<!doctype html>
<html>
<head>
<title>Admin Login</title>
 </head>
<body background= "med4.jpg" width="1000" hight="500">
<div class="navbar">

<!--<ul id="menu">
<li><a href="../index.php">Back</a></li>
</ul>
</div>-->

  <section>
  <br>
<br>  <p align="center">ADMIN  <img src="images/green_icon.png" width="80" height="80"> LOGIN</p>
  <form action="adm_login.php" method="post">
<table width="830" height="100">
<br><br><br><br><br>
 <tr align="right">
          <th width="2010"><h1 style="font-family:Cooper Black;"> <font color="green">username</font></h1></th>
          <td width="210" > <input name="username" style="width:200px" type="text" maxlength="30" required="required" class="text_box_login" placeholder="User Name"></td>
        </tr>
       <br>
        <tr align="right">
          <th width="467" ><h2 style="font-family:Cooper Black;"><font color="green">password</font></h2></th>
          <td><input name="password" style="width:200px" type="password" maxlength="10" required="required" class="text_box_login" placeholder="Password"></td>
        </tr>
		
		
<tr>
    <td>&nbsp;</td>

    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="login">LOGIN</button></td>
</tr>

</table></form>


</body>
</html>

<?php

 include('dbconn.php');  
if (isset($_POST['login'])){
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($dbhandle, $username);  
        $password = mysqli_real_escape_string($dbhandle, $password);  
      
        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($dbhandle, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
			header('location:index1.php');			
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }  
	} 
								?>-