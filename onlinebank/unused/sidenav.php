<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body>

<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:210px;">
  <a href="#" class="w3-bar-item w3-button">Account Summary</a>
    <a href="#" class="w3-bar-item w3-button">Account Statement</a>
	  <a href="password.php" class="w3-bar-item w3-button">Change login Password</a>
	    <a href="#" class="w3-bar-item w3-button">Pending Statement</a>


  <button class="w3-button w3-block w3-left-align" onclick="myAccFunc()">Account Details<i class="fa fa-caret-down"></i>
  </button>
  <div id="demoAcc" class="w3-hide w3-white w3-card">
  <a href="#" class="w3-bar-item w3-button">Manage Beneficiary</a>
	    <a href="#" class="w3-bar-item w3-button">Update Email Id</a>

  </div>


  
  
    <button class="w3-button w3-block w3-left-align" onclick="myAccFunc1()">E Services<i class="fa fa-caret-down"></i>
  </button>
   <div id="demoAcc1" class="w3-hide w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button">Block ATM</a>
    <a href="#" class="w3-bar-item w3-button">Change PIN </a>
    <a href="#" class="w3-bar-item w3-button">Request ATM/Debit Card</a>
    <a href="#" class="w3-bar-item w3-button">new ATM Card Activation</a>

  </div>
  
  
        <button class="w3-button w3-block w3-left-align" onclick="myAccFunc2()">Payments & Transfer<i class="fa fa-caret-down"></i>
  </button>
   <div id="demoAcc2" class="w3-hide w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button">Funds Transfer</a>
    <a href="transfer.php" class="w3-bar-item w3-button">Quick Transfer </a>

  </div>
  
  
      <button class="w3-button w3-block w3-left-align" onclick="myAccFunc3()">Request and Enquries<i class="fa fa-caret-down"></i>
  </button>
   <div id="demoAcc3" class="w3-hide w3-white w3-card">
    <a href="#" class="w3-bar-item w3-button">Cheque Book Request</a>
    <a href="#" class="w3-bar-item w3-button">Find Transactions </a>

  </div>
  

</div>

<div class="w3-container" style="margin-left:210px">
<?php
session_start();
$var=$_SESSION["username"];
echo "<br>Welcome ";
echo $var;
?>
  <h1 align="right"><form action="logout.php" method="post"><button type="submit" class="btn btn-link navbar-btn navbar-link">Log out</button></form></h1>
</div>

<script>
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

function myAccFunc1() {
    var x = document.getElementById("demoAcc1");

    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}


function myAccFunc2() {
    var x = document.getElementById("demoAcc2");

    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

function myAccFunc3() {
    var x = document.getElementById("demoAcc3");

    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-green";
    } else { 
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-green", "");
    }
}

</script>

</body>
</html>
