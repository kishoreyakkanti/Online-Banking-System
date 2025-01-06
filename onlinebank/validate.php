<?php
session_start();
if(isset($_POST["submit"]))
{
	$username=$_POST["username"];
	$password=$_POST["password"];
	$con=mysqli_connect("localhost","root","","k");
	$q="select * from register where username='$username'";
	$e=mysqli_query($con,$q);
	while($r=mysqli_fetch_assoc($e))
	{
			$p=$r["password"];
			
	}
   if($p==$password)
   {
   	$v="select * from register where username='$username'";
	$er=mysqli_query($con,$v);
	while($rt=mysqli_fetch_assoc($er))
	{
			$a=$rt["accno"];
			
	}
	$_SESSION["password"]=$password;
   	$_SESSION["username"]=$username;
   	$_SESSION["accno"]=$a;

header("location:welcome1.php");
   }
   else
   {
echo "enter valid username/password";

   }


}