<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
?>


<!DOCTYPE html>
<html style="font-family: Arial,"Helvetica Neue", Helvetica, sans-serif; ">
<head>
  <title>Fund Transfer</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
     margin-left: 410px;
}
.main {
    margin-left: 300px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}
td,tr  {

  font-size: 25px;
}

</style>
<body>
      <?php 
       include 'sidenavbar.php' ?>


  <div id="main">
  
<div class="page-header">
  <img src='b3.png' align="right" height=100px width=400px hspace=50px vspace=0px >
    <h1 align="center" style=" color: #019d50;  font-size: 45px;">Fund Transfer</h1>      
  </div>
<div class="container">


  <form action="transfervalid.php" method="post">
  <table align="center">
  
  <td>Beneficiary Name:</td>

<td><input type="text" size=20 name="bnname"  required style="width: 350px;  padding: 9px"></td>

</tr>
<td>Beneficiary AccountNumber:</td>

<td><input type="text" size=20 name="bnaccno"  required style="width: 350px;  padding: 9px"></td>

</tr>
<td>Amount:</td>

<td><input type="text" size=20 name="amount"  required style="width: 350px;  padding: 9px"></td>

</tr>
  
  

<td></td>

<td> <input type="submit" name="submit" value="Transfer"></td>

</tr>
    

  
  </table>
  </form>
</div>
</div>
</body>
</html>
