
<?php
session_start();
if(!isset($_SESSION['username']))
{
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
 <title>Beneficiary List</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 

<style>

body,table {font-family: Arial, Helvetica, sans-serif;}

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
td,tr  {

  font-size: 25px;
}

.main {
    margin-left: 300px; /* Same as the width of the sidenav */
    padding: 0px 10px;
}

</style>

<style>
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-left: 160px;
}
</style>

</head>
<body>
      
<?php 
       include 'sidenavbar.php' ?>


  <div class="main">
 <img src='b3.png' align="right" height=100px width=400px hspace=50px vspace=0px >
 <br>
    <h1 align="center" style=" color: #019d50;  font-size: 45px;">Beneficiary List</h1>

      
  
<br>
<br>
<br>
<div class="container">
    <?php

$con=mysqli_connect("localhost","root","","k");
$a=$_SESSION['accno'];

$q="select * from beneficary where accountno='$a'";

$result = mysqli_query($con,$q);
   echo "
   <table  align='center'>
 
</table>";

echo "
  <table class='w3-table-all w3-card-4'>
    <tr class='w3-green'>
      <th  style=' color: #ffffff;  '>Beneficiary number</th>
       <th  style=' color: #ffffff;  '>Beneficiary name</th>
    </tr>";
    while($row = mysqli_fetch_assoc($result))
  {
  echo "<tr class='w3-hover-green'>";
  echo "<td>" . $row['benifaccno'] . "</td>";
  echo "<td>" . $row['benifaccname'] . "</td>";
  echo "</tr>";
  }
  echo "</table>";
  ?>

</div>
</div>
</body>
</html>


</body>
</html>
