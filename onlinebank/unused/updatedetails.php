
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
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
main{
text-align:160px;}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>
  <?php 
      include 'sidenavbar.php' ?>
 <div id="main">
<div class="page-header">
  <img src='b3.png' align="right" height=100px width=400px hspace=50px vspace=0px >
    <h1 align="center" style=" color: #019d50;  font-size: 45px;">Update your Details</h1>      
  </div>

<div class="container">
  <form action="updetails.php" method="post">
  <table  align="center">
    <?php
    
     $con=mysqli_connect("localhost","root","","k");
    $accno=$_SESSION["accno"];
      $v="select * from bankaccount where accountno='$accno'";
  $er=mysqli_query($con,$v);
  while($rt=mysqli_fetch_assoc($er))
  {
      $mailid=$rt["mailid"];
      $address=$rt["address"];
      $phoneno=$rt["phoneno"];
  }
  ?>
  <td style=" color: #009900; font-weight: bold; font-size: 20px;">Phone Number:</td>

<td><input type="text" value="<?php echo $phoneno;?>" size=20 name="ph"  style="width: 350px;  padding: 9px"></td>

</tr >
<td style=" color: #009900; font-weight: bold; font-size: 20px; ">Address:</td>

<td><input type="text" value="<?php echo $address;?>" size=20 name="add"  style="width: 350px;  padding: 9px"></td>

</tr>
<td style=" color: #009900;  font-weight: bold; font-size: 20px;">Mail Id:</td>

<td><input type="text" value="<?php echo $mailid;?>" size=20 name="email"  style="width: 350px;  padding: 9px"></td>

</tr>
  
  

<td></td>

<td> <input type="submit" name="submit" value="Update"></td>

</tr>
    

  
  </table>
  </form>
</div>
</div>
</body>
</html>