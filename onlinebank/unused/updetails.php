<?php
session_start();
if(isset($_POST["submit"]))
{
  $phoneno=$_POST["ph"];
  $address=$_POST["add"];
  $email=$_POST["email"];
    $con=mysqli_connect("localhost","root","","k");
    $accno=$_SESSION["accno"];
    $query="select * from bankaccount where accountno='$accno'";
  $et=mysqli_query($con,$query);
  while($rt=mysqli_fetch_assoc($et))
  {
      $mailid=$rt["mailid"];
      $add=$rt["address"];
      $phone=$rt["phoneno"];
  }
  if($phoneno!=$phone)
  {
    $v="update bankaccount set phoneno=$phoneno where accountno='$accno'";
    $er=mysqli_query($con,$v);
    $v1="update register set phoneno=$phoneno where accno='$accno'";
    $er1=mysqli_query($con,$v1);
  }
  if($add!=$address)
  {
    $b="update bankaccount set address=$address where accountno='$accno'";
    $w=mysqli_query($con,$b);
  }
  if($phone!=$phoneno)
  {
    $c="update bankaccount set mailid=$email where accountno='$accno'";
    $y=mysqli_query($con,$c);
    $c1="update register set mailid=$email where accno='$accno'";
    $y1=mysqli_query($con,$c1);
  }

      
    if($er&&$er1&&$w&&$y&&$y1)
    {
      header("location:updatedetails.php");
    }
}
?>
