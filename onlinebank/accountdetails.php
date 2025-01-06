
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
    Account Details
  </title>

  <link rel="shortcut icon" type="image/png" href="head.png" />
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


td,tr  {
  font-size: 30px;
}
.main {
    margin-left: 300px; /* Same as the width of the sidenav */
    padding: 0px 10px;
}
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    margin-left: 410px;
}
</style>
</head>

<body>
      <?php 
      include 'sidenavbar.php' ?>

<div id="main">
   <img src='b3.png' align="right" height=100px width500px >    <h1 align="center" style=" color: #019d50;  font-size: 50px;">Account Details</h1>


<div class="container">
<form>
  <table align="center" border=0 width=12% cellspacing=0px cellpadding=15px>
    <?php
    
     $con=mysqli_connect("localhost","root","","k");
    $accno=$_SESSION["accno"];
      $v="select * from bankaccount where accountno='$accno'";
  $er=mysqli_query($con,$v);
  while($rt=mysqli_fetch_assoc($er))
  {
      $accname=$rt["accountname"];
      $balance=$rt["balance"];
      $gender=$rt["gender"];
      $dob=$rt["dob"];
      $mailid=$rt["mailid"];
      $address=$rt["address"];
      $branch=$rt["branch"];
      $phoneno=$rt["phoneno"];
  }
echo " <tr>
<td  style=' color: #019d50;  '>AccountNumber:</td>

<td>". $accno ."</td>

</tr>

<tr>
<td style=' color: #019d50;  '>AccountName:</td>

<td>". $accname ."</td>

</tr>

<tr>
<td style=' color: #019d50;  '>Balance:</td>

<td>". $balance."</td>

</tr>

<tr>
<td style=' color: #019d50;  '>Gender:</td>

<td>". $gender ."</td>

</tr>

<tr>
<td style=' color: #019d50;  bold; '>DOB:</td>

<td>". $dob ."</td>

</tr>

<tr>
<td style=' color: #019d50;  '>Mail ID:</td>

<td>". $mailid."</td>

</tr>

<tr>
<td style=' color: #019d50;  '>Address:</td>

<td>". $address."</td>

</tr>

<tr>
<td style=' color: #019d50;  '>Branch:</td>

<td>". $branch."</td>

</tr>

<tr>
<td style=' color: #019d50;  '>Phone:</td>

<td>". $phoneno ."</td>

</tr>";

?>

    

  
  </table>
  </form>
</div>
</div>
</body>

</html>
