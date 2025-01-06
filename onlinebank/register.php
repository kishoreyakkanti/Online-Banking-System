<html>
<head>
<title>Registration</title>

    <link rel="shortcut icon" type="image/png" href="head.png" />
<link href='https://fonts.googleapis.com/css?family=Assistant' rel='stylesheet'>

</head>


<style>
html { 
  background: url(add3.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}


   input[type=radio] {
    border: 0px;
    width: 20%;
    height: 2em;
}

h1{
font-family: Arial, Helvetica, sans-serif;
font-size: 36px;
}

td
{
font-family: Arial, Helvetica, sans-serif;
font-size: 28px;
}

table{
background-color: #009933;
margin:60px 970px;
 border-collapse:separate;
    border-radius:9px;
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
<img src="b3.png" align=left height="200" width="720" hspace=100px vspace=300px>

<form action="signup.php" method="post">
<table  width=30% cellspacing=4px cellpadding=7px>
<tr>
<td colspan=2><center><h1 style="color:#99ff99; font-family: 'Assistant';font-size: 52px;">Register Here</h1></center></td>
</tr>

<tr>
<td>AccountNumber:</td>

<td><input type="text" size=20 name="accno"  required style="width: 350px;  padding: 9px"></td>

</tr>

<tr>
<td>AccountName:</td>

<td><input type="text" size=20 name="accname"  required style="width: 350px;  padding: 9px"></td>

</tr>

<tr>
<td>Username:</td>

<td><input type="text" size=20 name="username" required style="width: 350px;  padding: 9px"></td>

</tr>

<tr>
<td>Password:</td>

<td><input type="password" size=20 name="password" required style="width: 350px;  padding: 9px"></td>
</tr>


<tr>
<td>Mail Id:</td>

<td><input type="text" size=20 name="mail"  required style="width: 350px;  padding: 9px"></td>
</tr>


<tr>
<td>Gender:</td>

<td><input type="radio" name="gender" required value="male">Male<input type="radio" name="gender" value="female">Female</td>
</tr>


<tr>
<td>DOB:   </td>

<td><input type="date" size=20 name="dob" required style="width: 350px;  padding: 9px"></td>
</tr>


<tr>
<td>Branch:</td>

<td><input type="text" size=20 name="branch" required style="width: 350px;  padding: 9px"></td>
</tr>


<tr>

<tr>
<td>PhoneNumber:</td>

<td><input type="text" size=20 name="phone"  required style="width: 350px;  padding: 9px"></td>
</tr>



<tr>
<td>
<button class="button button1" type="submit" name="submit">Register</button>
</tr>
</td>
</table>
</form>
</body>
</html>