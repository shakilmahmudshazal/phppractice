<?php

$host="localhost";
$user="root";
$password="";
$db="newDB";

$conn=mysqli_connect ($host,$user,$password,$db);

if(!$conn)
{
die("connection failed: ". mysqli_connect_error());
}
else
{
// echo "connection successfull";
}

?>