<?php
session_start();
if(isset($_POST["submit"]))
{
	$oldpassword=$_POST["opass"];
	$newpassword=$_POST["n1pass"];
	$repassword=$_POST["n2pass"];
	$con=mysqli_connect("localhost","root","","k");
	$u=$_SESSION['username'];
	$p=$_SESSION['password'];
	if($p==$oldpassword)
	{
		if($newpassword==$repassword)
		{
			$q="update register set password='$newpassword' where username='$u'";
			$e=mysqli_query($con,$q);
			if($e)
			{
				echo "password successfully changed";
			}
		}
		else
		{
			echo "password not matched";
		}
	}
	else
	{
		echo "enter correct old password";
	}
	
}