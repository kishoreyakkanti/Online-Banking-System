<?php
session_start();
if(isset($_POST["submit"]))
{
	$bnname=$_POST['bnname'];
	$bnaccno=$_POST['bnaccno'];
	$amount=(int)$_POST['amount'];
    $con=mysqli_connect("localhost","root","","k");
    $u=$_SESSION['username'];
    $a=$_SESSION['accno'];
    $q1="select * from bankaccount where accountno='$a'";
    $e=mysqli_query($con,$q1);
    while($r=mysqli_fetch_assoc($e))
    {
            $balance=$r["balance"];
            
    }
    $q2="select * from bankaccount where accountname='$bnname'";
    $et=mysqli_query($con,$q2);
    while($rt=mysqli_fetch_assoc($et))
    {
            $bacno=$rt["accountno"];
            
    }
    if(($bacno==$bnaccno)&&($amount<=$balance)&&($amount>0))
    {
    $q="update bankaccount set balance=balance+$amount where accountno='$bnaccno'";
    $w=mysqli_query($con,$q);
    
    
    $qt="update bankaccount set balance=balance-$amount where accountno='$a'";
    mysqli_query($con,$qt);

    $date=date("Y/m/d");
    $debit="debit";
    $credit="credit";
    $query1="insert into transaction values('$a','$date','$amount','$bnaccno','$debit')";
    mysqli_query($con,$query1);
    $query2="insert into transaction values('$bnaccno','$date','$amount','$a','$credit')";
    mysqli_query($con,$query2);

    }
    else if($bacno!=$bnaccno)
    {
        echo "enter valid account number";
    }
    else if($amount<0)
    {
        echo "enter valid amount";
    }
    else
    {
        echo "insufficient balance";
    }

}