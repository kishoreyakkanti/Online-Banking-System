
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
  <title>
    Pay Loan
  </title>
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

.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}

.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button1:hover {
    background-color: #4CAF50;
    color: white;
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

table{
 border-collapse:separate;
    border-radius:9px;

}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.main {
    margin-left: 300px; /* Same as the width of the sidenav */
    padding: 0px 10px;
}
td,tr  {
    padding:7px;

  font-size: 26px;
}
</style>



</head>
<body>

        <?php
         include 'sidenavbar.php' ?>
  <div class="main">
 
<div class="page-header">
  <img src='b3.png' align="right" height=100px width=400px hspace=50px vspace=0px >
    <h1 align="center" style=" color: #019d50;  font-size: 45px;">Pay Loan</h1>      
  </div>

<div class="container">
  




  <nav>
 <?php

$con=mysqli_connect("localhost","root","","k");
$a=$_SESSION['accno'];
$q="select * from loan where accountno='$a'";
$result = mysqli_query($con,$q);
while($rt=mysqli_fetch_assoc($result))
  {
      $amount=$rt["amount"];
      $gold=$rt["gold"];
      $personal=$rt["personal"];
      $vehicle=$rt["vehicle"];
      $home=$rt["home"];
      $educational=$rt["educational"];
      $agricultural=$rt["agricultural"];
  }
   echo "
   <table  align='center'>

   <tr>
  <td style=' color: #009900; font-weight: bold; font-size: 29px; '>AccountNumber:</td>
 
<td>".$a ."</td>


</tr >
";


   echo "
   <table  align='center' border=1 >

   <tr>
  <td style=' color: #009900; font-weight: bold; '>Loan Amount </td>

<td>".$amount ."</td>


</tr >

  <tr>
  <td style=' color: #009900; font-weight: bold; '>Gold Loan </td>

<td>".$gold ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; '>Personal Loan </td>

<td>".$personal ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; '>Vehicle Loan </td>

<td>".$vehicle ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; '>Home Loan </td>

<td>".$home ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; '>Educational Loan </td>

<td>".$educational ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; '>Agricultural Loan </td>

<td>".$agricultural."</td>


</tr >
</table>";

?>

</nav>


   <div class="container">
  <form action="loan.php" method="post">
  <table  align="center">

  <td style=' color: #009900; '>Enter Loan Amount:</td>
  <td>  <input type="text" size=20 name="loanamt" required style="width: 350px;  padding: 9px"></td>


</tr >
<tr>
<td style=" color: #009900; ">Loan Type:</td>

<td>  <div include="form-input-select()">
  <select name="loantype" required>
    
    <option value=""
            hidden>Select Type</option>

    <option value="gold">Gold Loan</option>
    <option value="personal">Personal Loan</option>
    <option value="vehicle">Vehicle loan</option>
  
    <option value="home">Home Loan</option>
  <option value="educational">Educational Loan</option>
  <option value="agricultural">Agricultural Loan</option>


  </select>
</div>
</div>


</td>
</tr>

  
  

<tr>
<td></td>
<td> </td>

</tr>
    
<tr>
<td></td>
<td><button class="button button1" type="submit" name="submit">Pay</button>
</td>

</tr>
  
  </table>
  </form>
</div>

</div>
</div>
</body>
</html>
