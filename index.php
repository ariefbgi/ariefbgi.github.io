<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location: view/form_login.php", true, 301);
}
else
{
	header("location: view/dashboard.php", true, 301);
}
?>