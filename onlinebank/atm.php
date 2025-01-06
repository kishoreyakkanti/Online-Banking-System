<?php
session_start();
if(isset($_POST["submit"]))
{
	$typeofcard=$_POST['card'];
	$con=mysqli_connect("localhost","root","","k");
	 $a=$_SESSION['accno'];
	 $atmno=rand();
	 $pin=rand(0000,9999);
	 $cvv=rand(000,999);
	 $year= mt_rand(2020, 2050);
	 $month= mt_rand(1, 12);
	 $day= mt_rand(1, 28);
	 $randomDate = $year . "-" . $month . "-" . $day;
	 $v="select * from bankaccount where accountno='$a'";
	$er=mysqli_query($con,$v);
	while($rt=mysqli_fetch_assoc($er))
	{
			$atm=$rt["atm"];
			
	}
	if($atm!='yes')
	{
	 $query="insert into atm values('$a','$atmno','$randomDate','$pin','$cvv','$typeofcard')";
	 $et=mysqli_query($con,$query);
	 $q="update bankaccount set atm='yes' where accountno='$a'";
	 $e=mysqli_query($con,$q);
	if($et&&$e)
	{
		echo "atm card applied successfully";
	 	// echo $a;
	 	// echo $atmno;
	 	// echo $randomDate;
	 	// echo $pin;
	 	// echo $cvv;
	 	// echo $typeofcard;
	 }
	}
	else
	{
		echo "already have atm";
	}
	 
}
