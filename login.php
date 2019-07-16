<!doctype html>
<html lang="en">
  <head>
    
   
  <?php include 'layout/bootstrap.php'; ?>
    <title>Login</title>
    
  </head>
  <body>

  	<?php include 'layout/navbar.php'; ?>

   <div class="container">
   	<h1> Login:  </h1>
   	<form action="login.php" method="POST">
   		<div class="from-group">
   			<label for="username"> User Name</label>
   			<input type="text" name="username" class="form-control " id="username" required>

   		</div>
   		<div class="from-group">
   			<label for="password"> Password</label>
   			<input type="password" name="password" class="form-control " id="password" required>

   		</div>
   		<br>
   		<input class="btn btn-primary" type="submit" name="submit" value="Login"/>

   	</form>

   </div>


   
  </body>
</html>

   <?php
     include 'connect.php';
     session_start();

     if(isset($_POST['submit']))
     {
     	$username=$_POST['username'];
     	$password=$_POST['password'];
     	$sql="select * from user where username='$username' and password='$password';";
      $result=mysqli_query($conn,$sql);

      $row=mysqli_num_rows($result);

      if($row==1)
      {
        // echo "you are logged in";
        while ( $res=mysqli_fetch_assoc($result)) {
          $_SESSION['username'] = $res['username'];
          $_SESSION['password'] = $res['password'];
           $_SESSION['id'] = $res['id'];
          
        }
        
        header("Location:post.php");

      }
      else
      {
        echo '<script language="javascript">';
        echo 'alert("username or password didnt match")';
        echo '</script>';
      }


     }




    ?>