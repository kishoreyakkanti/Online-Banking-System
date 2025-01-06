<html>
<head>
   <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="head.png" />
<link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<style>
html { 
  background: url(add2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #99ff99;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}
input[type=password], select, textarea {
width: 100%;
    padding: 12px;
    border: 1px solid #99ff99;
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
h1{
font-family: DejaVu Sans Mono, monospace;
font-size: 36px;
}
td
{
font-family:monospace;
font-size: 28px;
}
table{
background-color: #009933;
margin:105px 990px;
 border-collapse:separate;
    border-radius:10px;
}
span{
color: red;
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
</style>
<body>
  <?php include 'header.html' ?>
<img src="b3.png" align=left height="200" width="700" hspace=120px vspace=270px>
<form action="validate.php" method="post">
<table width=30% cellspacing=5px cellpadding=9px>
<tr>
<td colspan=2><center><h1 style="color:#99ff99; font-family: 'Assistant';font-size: 52px;">Login Here</h1></center></td>
</tr>
<tr>
<td  style="font-family: Arial, Helvetica, sans-serif;">Username<span>*</span>:</td>
</tr>
<tr>
<td>
<input type="text" name="username" required style="width: 430px;"/>
</td>
</tr>
<tr>
<td  style="font-family: Arial, Helvetica, sans-serif;">Password<span>*</span>:</td>
</tr>
<tr>
<td>
<input type="password" name="password" required style="width: 430px; "/>
</td>
</tr>
<tr>
<td>
<button class="button button1" type="submit" name="submit">Login</button>
</td>
</tr>
<tr>
<td>
<pre><p>New User? <a href="register.php ">Register Here</a></pre></p>
</td>
</tr>
</table>
</form>
</body>
</html>