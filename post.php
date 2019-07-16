
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

    <?php
     
     $sql="select * from post order by id desc;";
     $result= mysqli_query($conn,$sql);

     while ($res=mysqli_fetch_assoc($result)) {

     	echo '<div class="post col-6 offset-3 " >';
     	
     	echo "<h2>".$res['title']."</h2>";
     	echo "<p>".$res['body']."</p>";

     	echo "</div>";

     }



    ?>

   
   </div>
  </body>

  <style>
  	h2{
      /*border-left: 20px;*/
      background-color: green;
      text-align: center;
      margin-bottom: 20px;
      color: white;
      padding: 20px;
      margin-top: 20px;
      
  	}


  </style>
</html>
