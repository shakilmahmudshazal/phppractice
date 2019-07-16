<?php

function check_session()
{
	if(!isset($_SESSION))
	{
		session_start();
	}
	if (!isset($_SESSION['username'])) {
		if (!isset($_SESSION['password'])) 
		{
			header("Location:login.php");
		}

		# code...
	}
}

?>