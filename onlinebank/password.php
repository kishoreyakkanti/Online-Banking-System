
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
   <title>Change Password</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
 



body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 20px;
    resize: vertical
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
    margin-left: 160px; /* Same as the width of the sidenav */
    padding: 0px 10px;
}
td,tr  {
  font-size: 25px;
}
</style>
</head>
<body>
    <?php 
       include 'sidenavbar.php' ?>


 <div id="main">
<div class="page-header">
  <img src='b3.png' align="right" height=100px width=400px hspace=50px vspace=0px >
    <h1 align="center" style=" color: #019d50;  font-size: 46px;">Change Password</h1>      
  </div>

<div class="container">
  <form action="changepassword.php" method="post">
  <table  align="center">
  
  <td style=" color:#019d50; font-weight: bold; ">Enter Old Password:</td>

<td><input type="text" size=20 name="opass"  required style="width: 350px;  padding: 5px"></td>

</tr >
<td style=" color: #019d50; font-weight: bold; ">Enter New Password:</td>

<td><input type="text" size=20 name="n1pass" required style="width: 350px;  padding: 5px"></td>

</tr>
<td style=" color:#019d50; font-weight: bold; ">Renter New Password:</td>

<td><input type="text" size=20 name="n2pass" required style="width: 350px;  padding: 5px"></td>

</tr>
  
  

<td></td>

<td> <input type="submit" name="submit" value="OK"></td>

</tr>
    

  
  </table>
  </form>
</div>
</div>
</body>
</html>
