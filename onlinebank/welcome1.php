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
  <title>Welcome to KHH Bank</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
body {
    font-family: "Lato", sans-serif;
}
#name{
  color:white;
/*margin-left: 50px;  

*/
font-size: 30px;
}

/* Fixed sidenav, full height */
.sidenav {
    height: 100%;
    width: 400px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    padding-top: 20px;
    text-align: center;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 8px 8px 12px 20px;
    text-decoration: none;
    font-size: 30px;
    color: #818181;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    color: #f1f1f1;
}

/* Main content */
.main {
    margin-left: 400px; /* Same as the width of the sidenav */
      padding: 0px 10px;
}
p{
  font-size: 195px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: #009933;
    color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #262626;
    padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
    float: right;
    padding-right: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
</style>

<body>
            <?php include 'sidenavbar.php' ?>


<div class="main" >
<p style="color:#019d50; text-align:right;">Welcome to <br>  <img src='b3.png' align="center" height=250px width=900px hspace=50px vspace=0px >
</p>
 
</div>


</body>
</html> 
