<?php
session_start();
?>
<html>
<head>
   <title>LogOut</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />
</head>
<style>
html { 
  background: url(a21.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

body {margin:25px;}

div.polaroid {
  width: 50%;
  background-color: white;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 25px;
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>
</head>
<body>
<br><br><br><br><br><br>


<div class="polaroid" >
  <img src="a22.png"  alt="Norway" style="width:90%">
  <div class="container">
  
  <p style="font-size: 35px;"> <a href="login.php">Click here</a> to Login to ONLINE KHH BANK</p>
  </div>
</div>
<?php
// destroy the session 
session_destroy(); 
?>

</html>