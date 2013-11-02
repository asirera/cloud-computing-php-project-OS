<!-- 
    Document   : index
    Created on : 08-Mar-2011, 23:14:56
    Author     : Tony
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>E-Window</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="ewindow sire home vindow"/>
    <meta name="description" content="Ewindow, Your Home Page"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/a.png"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="tab1.css" rel="stylesheet" type="text/css"/>
<?php
//Members Area
//
// Connects to your Database
include('conff.php');
//mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error());

//mysql_select_db("Database_Name") or die(mysql_error());



//checks cookies to make sure they are logged in

if (isset($_COOKIE['ID_my_site'])) {

    $username = $_COOKIE['ID_my_site'];

    $pass = $_COOKIE['Key_my_site'];

    $check = mysql_query("SELECT * FROM users WHERE username = '$username'") or die(mysql_error());

    while ($info = mysql_fetch_array($check)) {



        //if the cookie has the wrong password, they are taken to the login page

        if ($pass != $info['password']) {
            header("Location: login.php");
        }



        //otherwise they are shown the admin area     
        else {
			

         //   echo "Admin Area<p>";

         //   echo "Your Content<p>";

        //    echo "<a href=logout.php>Logout</a>";
		//This code runs if the form has been submitted

if (isset($_POST['submit'])) {



//This makes sure they did not leave any fields blank

   
	$a=$POST['bg'];
	echo"$a";
	}
           
        }
    }
} else {



//if the cookie does not exist, they are taken to the login screen

    header("Location: login.php");
}
?>




   

<fieldset>
<legend>background</legend>
 <form action="test.php" method="post"/>
<ul>
<li> <label for="free">Free Subscrition</label>
<input type="radio" name="bg" id="free"/>
</li>

<li> <label for="professional">Professional</label>
<input type="radio" name="bg" id="professional"/> </li>

<li>
<label for="newsletter">Newsletter</label>
<input type="radio" name="bg" id="newsletter"/>
</li>

<li><label for="submit"></label>
<button type="submit" id="submit">Send</button> </li>
</ul>
</form>
</fieldset>








</head>
<body background="images/f.jpg">
 
</body>
</html>

