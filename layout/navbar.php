<?php

//session_start();

?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="./">My Blog</a>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="./login.php"><?php
      if (!isset($_SESSION)) {
        # code...
        echo "login";
      }


      ?></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./register.php"><?php
      if (!isset($_SESSION)) {
        # code...
        echo "Register";
      }


      ?>

      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./create_post.php"><?php
      if (isset($_SESSION)) {
        # code...
        echo "Create your post"; 
      }


      ?></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="#"> <?php 
       if(isset($_SESSION['username']))
       echo $_SESSION['username'];    
       ?> </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="./logout.php"><?php
      if (isset($_SESSION)) {
        # code...
        echo "logout";
      }


      ?></a>
    </li>

  </ul>
</nav>