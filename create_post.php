<?php
include_once 'connect.php';
include_once 'function.php';
check_session();

?>
<!doctype html>
<html lang="en">
  <head>
    
   
  <?php include 'layout/bootstrap.php'; ?>
    <title>My Blog</title>

    


    
  </head>
  <body>
  	<?php include 'layout/navbar.php'; ?>
   <div class="container">

   <div ng-app="">
    	 <div class="row">
     	 <div class="col-md-6">
     	 	<h1 class="primary" > Create your Post</h1>
     	 	<form action="create_post.php" method="POST">
     	 		<div class="form-group">
     	 			<label for="title" > Headline</label>
     	 			<input class="form-control" type="text" name="title" id="title" ng-model="title">

     	 		</div>

     	 		<div class="form-group">
     	 			<label for="body"> Body: </label>
     	 			<textarea class="form-control" name="body" id="body" ng-model="body"></textarea>
     	 			
     	 		</div>
     	 		<br>
     	 		<button type="submit" name="submit" class="btn btn-primary"> submit</button>


     	 	</form>


     	 </div>

     	 <div class="col-md-4 offset-md-2"   >

     	 	<h1>{{title}}</h1>

     	 	<p>{{body}}</p>

     	    
     	 	

     	 </div>


     </div>

    </div>

   </div>

   
   
  </body>
</html>

<?php

include 'connect.php';
// session_start();

if(isset($_POST['submit']))
{
  $title=mysqli_real_escape_string($conn,$_POST['title']);
  $body=mysqli_real_escape_string($conn, $_POST['body']);
	// $title=$_POST['title'];
 //  $body=$_POST['body'];
  $user_id=$_SESSION['id'];
  $time= date('Y-m-d H:i:s');




  $password=$_POST['password'];
   // echo "working";
  $sql="insert into post (title,body,user_id,time)values ('$title','$body','$user_id','$time');";
  if(mysqli_query($conn,$sql))
  {
        echo '<script language="javascript">';
        echo 'alert("you have succesfully created a post")';
        echo '</script>';
    // header("Location:login.php");
       
        header("Location:post.php");

  }
  else
  {
    echo "error: ".$sql.mysql_error($conn);
  }
}


?>