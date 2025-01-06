<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
 <title>CheckBook</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 </head>

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
}
</style>

<style>
.main {
    margin-left: 300px; /* Same as the width of the sidenav */
    padding: 0px 10px;

}
</style>

</head>
<body>
        <?php 
       include 'sidenavbar.php' ?>


  <div class="main">
 
<div class="page-header">
  <img src='b3.png' align="right" height=100px width=400px hspace=50px vspace=0px >
    <h1 align="center" style=" color: #019d50;  font-size: 45px;">Apply for CheckBook</h1>      
  </div>

<div class="container">
  <form action="chequebookdisplay.php" method="post">
  <table  align="center">
    <?php
     $con=mysqli_connect("localhost","root","","k");
    $accno=$_SESSION["accno"];
      echo "
  <tr>
  <td style=' color: #009900; font-weight: bold; font-size: 29px;'>Account Number:</td>

<td     style='font-size: 29px;'>". $accno ."</td>

</tr >";
?>

  
  


    
<tr>
<td></td>
<td> <input type="submit" name="submit" value="Apply"></td>

</tr>
  
  </table>
  </form>
</div>
</div>
</body>
</html>
