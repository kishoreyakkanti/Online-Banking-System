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
  background: url(b22.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
    -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 
}

body {margin:10px;}

div.polaroid {
  width: 50%;
  background-color: rgba(255, 255, 255, 0.2);
  box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.9), 0 26px 29px 0 rgba(0, 0, 0, 0.19);
  margin-bottom: 15px;
}
a{
	color
}

div.container {
  text-align: center;
  padding: 10px 20px;
}
</style>
</head>
<body>
<br><br>


<div class="polaroid" >
  <img src="bye.jpg"  alt="Norway" style="width:100%">
  <div class="container">
  
  <p style="font-size: 35px; color:green;">Click on logo to login </p><a href="login.php">
<img src='b3.png'  height=100px width=400px border="0">
</a> 

  </div>
</div>
<?php
// destroy the session 
session_destroy(); 
?>
</html>