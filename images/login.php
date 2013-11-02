<!-- 
    Document   : index
    Created on : 08-Mar-2011, 23:14:56
    Author     : Tony
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>E-Window-Login</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="keywords" content="ewindow sire home window"/>
    <meta name="description" content="Ewindow, Your Home Page"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/a.png"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
   <!-- <link href="tab1.css" rel="stylesheet" type="text/css"/>-->
   
 <?php
//Registration 
// Connects to your Database
// mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error());
// mysql_select_db("Database_Name") or die(mysql_error());
include('conff.php');


//This code runs if the form has been submitted

if (isset($_POST['submit'])) {



//This makes sure they did not leave any fields blank

    if (!$_POST['username'] | !$_POST['pass'] | !$_POST['pass2']) {

        die('You did not complete all of the required fields');
    }



// checks if the username is in use

    if (!get_magic_quotes_gpc()) {

        $_POST['username'] = addslashes($_POST['username']);
    }

    $usercheck = $_POST['username'];

    $check = mysql_query("SELECT username FROM users WHERE username = '$usercheck'")
            or die(mysql_error());

    $check2 = mysql_num_rows($check);



//if the name exists it gives an error

    if ($check2 != 0) {

        die('Sorry, the username ' . $_POST['username'] . ' is already in use.');
    }



// this makes sure both passwords entered match

    if ($_POST['pass'] != $_POST['pass2']) {

        die('Your passwords did not match. ');
    }



    // here we encrypt the password and add slashes if needed

    $_POST['pass'] = md5($_POST['pass']);

    if (!get_magic_quotes_gpc()) {

        $_POST['pass'] = addslashes($_POST['pass']);

        $_POST['username'] = addslashes($_POST['username']);
    }



// now we insert it into the database

    $insert = "INSERT INTO users (username, password)

      VALUES ('" . $_POST['username'] . "', '" . $_POST['pass'] . "')";

    $add_member = mysql_query($insert);
    
    ?>


    <h1>Registered</h1>

    <p>Thank you, you have registered - <a href="login2.php"/>you may now login.</a></p>




    <?php
} else {
    ?>



</head>
<body background="images/f.jpg">
 <h1 style="color:#FFF">Register or <a href="login2.php">Login</a> </h1>
 <div id="log" align="center" style="background:; width:50%;" >


    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post"/>

        <table border="0">

            <tr><td>Username:</td><td>

                    <input type="text" name="username" maxlength="60" style="background:transparent; color:#FFF; font:'Comic Sans MS', cursive; font-weight:bold"/>

                </td></tr>

            <tr><td>Password:</td><td>

                    <input type="password" name="pass" maxlength="10" style="background:transparent; color:#FFF; font:'Comic Sans MS', cursive; font-weight:bold"/>

                </td></tr>

            <tr><td>Confirm Password:</td><td>

                    <input type="password" name="pass2" maxlength="10" style="background:transparent; color:#FFF; font:'Comic Sans MS', cursive; font-weight:bold"/>

                </td></tr>

            <tr><th colspan=2><input type="submit" name="submit" value="Register"/></th></tr> </table>

    </form>
</div>

    <?php
}
?>
</body>
</html>

