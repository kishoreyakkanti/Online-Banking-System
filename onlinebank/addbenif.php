
<?php
session_start();
if(isset($_POST["submit"]))
{
	$benifname=$_POST["benfname"];
	$benifno=$_POST["benf"];
	$con=mysqli_connect("localhost","root","","k");
	$accno=$_SESSION["accno"];
	$q="select * from bankaccount where accountname='$benifname'";
	$e=mysqli_query($con,$q);

	while($r=mysqli_fetch_assoc($e))
	{
			$acno=$r["accountno"];
	}
	
	if($acno==$benifno)
	{

			$query="insert into beneficary values('$accno','$benifno','$benifname')";
	        $et=mysqli_query($con,$query);
	        if($et)
			{
				echo "beneficary added successfully";
			}
	}		
	else
	{
		echo "invalid beneficary number";
	}
	
}
?>
