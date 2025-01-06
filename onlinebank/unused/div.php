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
  <title>Pay Loan</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />
</head>
<style>
div.container {
    width: 100%;
    border: 0px solid gray;
       margin-left: 260px;
       max-width: 920px;
}

header, footer {
    padding: 0em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
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

nav {
    float: left;
    max-width:400px;
    margin: 0;
    padding: 1em;
}

nav ul {
    list-style-type: none;
    padding: 0;
}
   
nav ul a {
    text-decoration: none;
}

table{
margin:60px 150px;
 border-collapse:separate;
    border-radius:9px;
}

form{
margin:20px 20px;
 
}
article {
    margin-left: 10px;
    border-left: 0px solid gray;
    padding: 1em;
    overflow: hidden;
    max-width: 1090px;
}
th,td{
 font-size: 20px;
 }
</style>

<body>
        <?php include 'sidenavbar.php' ?>

<div class="container">
  <img src='b3.png' align="right" height=100px width=400px hspace=80px vspace=0px >

    <h1 align="right" style=" color: #019d50;  font-size: 45px;">Loan Pay</h1>      


  
<nav>
 <?php
$con=mysqli_connect("localhost","root","","k");
$a=$_SESSION['accno'];
$q="select * from loan where accountno='$a'";
$result = mysqli_query($con,$q);
while($rt=mysqli_fetch_assoc($result))
  {
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
  <td style=' color: #009900; font-weight: bold; font-size: 20px;'>AccountNumber:</td>

<td>".$a ."</td>


</tr >";
   echo "
   <table  align='center' border=1 cellspacing=0 cellpadding=11>

   

  <tr>
  <td style=' color: #009900; font-weight: bold; font-size: 20px;'>Gold Loan:</td>

<td>".$gold ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; font-size: 20px;'>Personal Loan:</td>

<td>".$personal ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; font-size: 20px;'>Vehicle Loan:</td>

<td>".$vehicle ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; font-size: 20px;'>Home Loan:</td>

<td>".$home ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; font-size: 20px;'>Educational Loan:</td>

<td>".$educational ."</td>


</tr >
<tr>
  <td style=' color: #009900; font-weight: bold; font-size: 20px;'>Agricultural Loan:</td>

<td>".$agricultural."</td>


</tr >
</table>";

?>

</nav>
</div>
<article>
   <div class="container">
  <form action="loan.php" method="post">
  <table  align="center">

  <td style=' color: #009900; '>Enter Loan Amount:</td>
  <td>  <input type="text" size=20 name="loanamt"  style="width: 350px;  padding: 9px"></td>


</tr >
<tr>
<td style=" color: #009900; ">Loan Type:</td>

<td>  <div include="form-input-select()">
  <select name="loantype" required>
    
    <option value=""
            hidden>Select Type</option>

    <option value="Gold">Gold Loan</option>
    <option value="Personal">Personal Loan</option>
    <option value="Vehicle">Vehicle loan</option>
  
    <option value="Home">Home Loan</option>
  <option value="Educational">Educational Loan</option>
  <option value="Agricultural">Agricultural Loan</option>


  </select>
</div>


</td>
</tr>

  
  

<tr>
<td></td>
<td>.</td>

</tr>
    
<tr>
<td></td>
<td><button class="button button1" type="submit" name="Pay">Pay</button>
</td>

</tr>
  
  </table>
  </form>
</div>
</article>





</body>
</html>
