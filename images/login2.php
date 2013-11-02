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
<?php
//login
// Connects to your Database

//mysql_connect("your.hostaddress.com", "username", "password") or die(mysql_error());

//mysql_select_db("Database_Name") or die(mysql_error());

include('conff.php');

//Checks if there is a login cookie

if (isset($_COOKIE['ID_my_site'])) {



//if there is, it logs you in and directes you to the members page

    $username = $_COOKIE['ID_my_site'];

    $pass = $_COOKIE['Key_my_site'];

    $check = mysql_query("SELECT * FROM users WHERE username = '$username'") or die(mysql_error());

    while ($info = mysql_fetch_array($check)) {

        if ($pass != $info['password']) {
            
        } else {

            header("Location: members.php");
        }
    }
}



//if the login form is submitted

if (isset($_POST['submit'])) { // if form has been submitted
// makes sure they filled it in
    if (!$_POST['username'] | !$_POST['pass']) {

        die('You did not fill in a required field.');
    }

    // checks it against the database



    if (!get_magic_quotes_gpc()) {

        $_POST['email'] = addslashes($_POST['email']);
    }

    $check = mysql_query("SELECT * FROM users WHERE username = '" . $_POST['username'] . "'") or die(mysql_error());



//Gives error if user dosen't exist

    $check2 = mysql_num_rows($check);

    if ($check2 == 0) {

        die('That user does not exist in our database. <a href=add.php>Click Here to Register</a>');
    }

    while ($info = mysql_fetch_array($check)) {

        $_POST['pass'] = stripslashes($_POST['pass']);

        $info['password'] = stripslashes($info['password']);

        $_POST['pass'] = md5($_POST['pass']);



//gives error if the password is wrong

        if ($_POST['pass'] != $info['password']) {

            die('Incorrect password, please try again.');
        } else {



            // if login is ok then we add a cookie

            $_POST['username'] = stripslashes($_POST['username']);

            $hour = time() + 3600;

            setcookie(ID_my_site, $_POST['username'], $hour);

            setcookie(Key_my_site, $_POST['pass'], $hour);



            //then redirect them to the members area

            header("Location: members.php");
        }
    }
} else {



    // if they are not logged in
    ?>
    </head>
<body background="images/f.jpg">

 <div id="log" align="center" style="background:; width:50%;" >

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <table border="0">
            <tr><td colspan=2><h1>Login</h1></td></tr>
            <tr><td>Username:</td><td>
                    <input type="text" name="username" maxlength="40"style="background:transparent; color:#FFF; font:'Comic Sans MS', cursive; font-weight:bold"/>
                </td></tr>
            <tr><td>Password:</td><td>
                    <input type="password" name="pass" maxlength="50"style="background:transparent; color:#FFF; font:'Comic Sans MS', cursive; font-weight:bold"/>
                </td></tr>
            <tr><td colspan="2" align="right">
                    <input type="submit" name="submit" value="Login">
                </td></tr>
        </table>
    </form>
</div>

<div id="log" align="center" ><h1><a href="login.php">Register</a></h1></div>
    <?php
}
?>

</body>
</html>



