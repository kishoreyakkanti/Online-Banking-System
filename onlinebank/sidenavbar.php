<!DOCTYPE html>
<html>
<head>
  <title>Welcome to KHH Bank</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    margin-left: 300px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
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
</head>


<body>

<div class="sidenav">
  <?php

$var=$_SESSION["username"];
echo "<h2 id='name'>Welcome ". $var."</h2>";
?>

  <a href="accountdetails.php">Account Details</a>
  <a href="password.php">Change Password</a>
  <a href="balance.php">Balance Amount</a>
  <a href="transfer.php">Quick Transfer</a>
  <a href="transhistory.php">View Transactions</a>
  <a href="loanpay.php">Pay Loan</a>
  <a href="atmapply.php">Apply for ATM</a>
  <a href="chequebook.php">Apply for ChequeBook</a>
  <a href="beneficary.php">Add Beneficiary</a>
  <a href="logout.php">Logout</a>
</div>

<div class="main" >
<p></p>
 
</div>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

</body>
</html> 
