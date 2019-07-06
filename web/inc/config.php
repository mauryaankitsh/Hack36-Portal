<?php
session_start(); /* Session */
$db=mysqli_connect("localhost","root","","Hack3");
if ($db)
{
	echo "<script type='text/javascript'>alert('connected')</script>";
 /*Database Connection*/
}
?>
