<?php
if(isset($_POST["submit"]))
{
	$accno=$_POST['accno'];
	$accname=$_POST['accname'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$mail=$_POST['mail'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$branch=$_POST['branch'];
	$phone=$_POST['phone'];

	$gold=rand(0,500);
	$personal=rand(0,500);
	$vechile=rand(0,500);
	$home=rand(0,500);
	$educational=rand(0,500);
	$agricultural=rand(0,500);
	$amount=$gold+$personal+$vechile+$home+$educational+$agricultural;
	$con=mysqli_connect("localhost","root","","k");
	$q="select * from bankaccount where accountno='$accno'";
	$e=mysqli_query($con,$q);
	while($r=mysqli_fetch_assoc($e))
	{
			$an=$r["accountname"];
	}
	
if($an==$accname)
{
	$rs="insert into register values('$accno','$accname','$username','$password','$mail','$gender','$dob','$branch','$phone')";
	$query=mysqli_query($con,$rs);
	$rs1="insert into loan values('$accno','$amount','$gold','$personal','$vechile','$home','$educational','$agricultural')";
	$query1=mysqli_query($con,$rs1);

}
if($query)
{
	header("Location:login.php");
}
else
{
echo "Error";
}
}
?>