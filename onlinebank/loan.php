<?php
session_start();
if(isset($_POST["submit"]))
{
	$loanamt=(int)$_POST['loanamt'];
	$loantype=$_POST['loantype'];
	$con=mysqli_connect("localhost","root","","k");
	$a=$_SESSION['accno'];
	$query="update loan set amount=amount-$loanamt where accountno='$a'";
	$e=mysqli_query($con,$query);
	if($loantype=="gold")
	{
		$query2="update loan set gold=gold-$loanamt where accountno='$a'";
		$et=mysqli_query($con,$query2);
	}
	if($loantype=="personal")
	{
		$query2="update loan set personal=personal-$loanamt where accountno='$a'";
		$et=mysqli_query($con,$query2);
	}
	if($loantype=="vechile")
	{
		$query2="update  loan set vechile=vechile-$loanamt where accountno='$a'";
		$et=mysqli_query($con,$query2);
	}
	if($loantype=="home")
	{
		$query2="update  loan set home=home-$loanamt where accountno='$a'";
		$et=mysqli_query($con,$query2);
	}
	if($loantype=="educational")
	{
		$query2="update  loan set educational=educational-$loanamt where accountno='$a'";
		$et=mysqli_query($con,$query2);
	}
	if($loantype=="agricultural")
	{
		$query2="update  loan set agricultural=agricultural-$loanamt where accountno='$a'";
		$et=mysqli_query($con,$query2);
	}
	if($e&&$et)
	{
		// $query1="select * from loan where accountno='$a'";
		// $ac=mysqli_query($con,$query1);
		// while($r=mysqli_fetch_assoc($ac))
		// {
		// 	$loan=$r["amount"];
			
		// }
		// echo "remaining loan amount is : ";
		// echo $loan;
		header("location:loanpay.php");

	}



}
?>