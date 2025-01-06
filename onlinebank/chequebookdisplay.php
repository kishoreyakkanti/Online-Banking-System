<?php
session_start();
if(isset($_POST["submit"]))
{
	$con=mysqli_connect("localhost","root","","k");
	$a=$_SESSION['accno'];
	$v="select * from bankaccount where accountno='$a'";
	$er=mysqli_query($con,$v);
	while($rt=mysqli_fetch_assoc($er))
	{
			$check=$rt["chequebook"];
			
	}
	if($check!='yes')
	{
	 $chequebookno=rand();
	 $query="insert into chequebook values('$a','$chequebookno')";
	 $e=mysqli_query($con,$query);
	 $q="update bankaccount set chequebook='yes' where accountno='$a'";
	 $et=mysqli_query($con,$q);
	 if($e&&$et)
	 {
	 	echo "cheque book applied successfully";
	 	// echo $chequebookno;
	 }
	}
	else
	{
		echo "already have chequebook";
	}
}
?>