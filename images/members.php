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
    <meta name="keywords" content="ewindow sire home window"/>
    <meta name="description" content="Ewindow, Your Home Page"/>
    <link rel="shortcut icon" type="image/x-icon" href="images/a.png"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="tab1.css" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/interface.js"></script>
    <script type="text/javascript" src="test1.js"></script>
    <!--[if lt IE 7]>
     <style type="text/css">
     div, img { behavior: url(iepngfix.htc) }
     </style>
    <![endif]-->
   <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-21458383-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body background="images/f.jpg">
<div  style="display:block;" class="control">
  <table width="100" height="50" border="0">
            <tr>
                <td align="center">
                    <a href="javascript:history.back(nav)" onmouseover="document.one.src='images/left2.png'" 
                    onmouseup="document.one.src='images/left2.png'" onmouseout="document.one.src='images/left.png'"
                     onmousedown="document.one.src='images/left3.png'" onfocus="blur()">
                     <img src="images/left.png" name="one" border="none" alt=""/>
                  </a></td><td align="center"><a href="1.php" target="nav" onmouseover="document.t.src='images/refre2.png'"
                      onmouseup="document.t.src='images/refre2.png'" onmouseout="document.t.src='images/refre.png'" 
                      onmousedown="document.t.src='images/refre3.png'" onfocus="blur()">
                      <img src="images/refre.png" name="t" border="none" alt=""/></a></td><td align="center">
                      <a href="javascript:history.forward(nav)" onmouseover="document.two.src='images/right2.png'"
                       onmouseup="document.two.src='images/right2.png'" onmouseout="document.two.src='images/right.png'"
                        onmousedown="document.two.src='images/right3.png'" onfocus="blur()">
                        <img  name="two" src="images/right.png" border="none" alt=""/></a>
                    </td>
            </tr>
  </table>
</div>
   <center> <div class="dock" id="dock" align="center" style=" width:50%">
        <div class="dock-container">
            <a target="_blank" class="dock-item" href="http://www.google.ie/"><img src="images/g1.png" alt="google"/></a>
            <a target="_blank" class="dock-item" href="https://login.yahoo.com/config/login_verify2?"><img src="images/ya.png" alt="yahoo"/></a>
            <a target="_blank" class="dock-item" href="http://by146w.bay146.mail.live.com/default.aspx?"><img src="images/h.png" alt="hotmail"/></a>
            <a target="_blank" class="dock-item" href="https://www.365online.com/banking.htm"><img src="images/b.png" alt="365"/></a>
            <a target="_blank" class="dock-item" href="http://www.aib.ie/personal/online-services/internet-banking"><img src="images/aib.png" alt="aib"/></a>
            <a target="_blank" class="dock-item" href="http://maps.google.ie/"><img src="images/go.png" alt="maps"/><span>Google maps</span></a>
            <a target="_blank" class="dock-item" href="http://www.facebook.com/"><img src="images/f.png" alt="facebook"/></a>
            <a target="_blank" class="dock-item" href="http://www.ebay.ie/"><img src="images/e.png" alt="ebay"/></a>
            <a target="_blank" class="dock-item" href="https://www.paypal.com/ie"><img src="images/p.png" alt="paypal"/></a>
            <a target="_blank" class="dock-item" href="https://www.google.com/accounts/ServiceLogin"><img src="images/gmail.png" alt="gmail"/><span>Gmail</span></a>
        </div>
    </div></center>
<script type="text/javascript">
        $(document).ready(
        function()
        {
            $('#dock').Fisheye(
            {
                maxWidth: 50,
                items: 'a',
                itemsText: 'span',
                container: '.dock-container',
                itemWidth: 40,
                proximity: 90,
                halign : 'center'
            }
        )
        }
    );
    </script>
    <br/>
    <center>
    <div align="center" style="background:; max-width:600px;">
        <table align="center" width="0%" border="0">
            <tr>
                <td align="center"><a target="_blank" href="http://www.google.ie/"><img src="images/g.png" alt="google"/></a></td><td align="center">
                    <form method="get" action="http://www.google.com/search" target="_blank">
                        <input type="text" name="q" size="15" maxlength="255" value="" style="background:transparent; color:#FFF; font:'Comic Sans MS', cursive; font-weight:bold"/><input type="submit" value="Go"/>
                    </form>
                </td><td align="center"><a target="_blank" href="http://www.youtube.com/"><img src="images/y.png" alt="youtube"/></a></td><td align="center">
                    <form action="http://www.youtube.com/results" method="get" target="_blank">
                        <input name="search_query" size="15" type="text" maxlength="128" style=" background:transparent;color:#FFF; font:'Comic Sans MS',  cursive; font-weight:bold"/><input type="submit" value="Go"/>
                    </form>
                </td>
            </tr>
        </table>
    </div>
    </center>
   
    <div class="left">
    <a href="logout.php" style="border:none" onfocus="blur()"/><img src="images/logout.png" width="101" style="border:none"/></a><div id="AccordionContainer" class="AccordionContainer" style="border:none">
            <div onclick="runAccordion(1)" style="border:none">
                <div class="AccordionTitle" style="border:none" >
                    Favorites
                </div>
            </div>
            <div id="Accordion1Content" class="AccordionContent" style="border:none">
                <table border="0" align="center">
                    <tr>
                        <td align="center"><a target="nav" href="http://www.google.ie/"><b>Google</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.aib.ie/personal/online-services/internet-banking"><b>AIB</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://student.dbs.edu/login/index.php"><b>Moodle</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="https://xenappsecgate.ncirl.ie/Citrix/XenApp/auth/login.aspx"><b>Citrix</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.youtube.com/"><b>YouTube</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.ncirl.ie/"><b>NCI</b></a></td>
                    </tr>
                </table>
            </div>
            <div onclick="runAccordion(2);">
                <div class="AccordionTitle">
                    Entertainment
                </div>
            </div>
            <div id="Accordion2Content" class="AccordionContent">
                <table border="0" align="center">
                    <tr>
                        <td align="center"><a target="nav" href="http://www.nationalgeographic.com/"><b>National Geographic</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.letmewatchthis.com/index.php?search_keywords="><b>Letmewatchthis</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.blinkx.com/?search="><b>Blinkx</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.cucirca.com/"><b>Cucirca</b></a></td>
                    </tr>
                </table>
            </div>
            <div onclick="runAccordion(3);">
                <div class="AccordionTitle">
                    Shopping
                </div>
            </div>
            <div id="Accordion3Content" class="AccordionContent">
                <table border="0" align="center">
                    <tr>
                        <td align="center"><a target="nav" href="http://www.ebay.ie/"><b>eBay</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.pixmania.ie/ie/uk/home.html"><b>Pixmania</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://ireland.dell.com/"><b>Dell</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.iwantoneofthose.com/"><b>Iwantoneofthose</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.superdry.com/"><b>Superdry</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://uk.shopping.com/"><b>Shopping.com</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.amazon.co.uk/"><b>Amazon</b></a></td>
                    </tr>
                </table>
            </div>
            <div onclick="runAccordion(4);">
                <div class="AccordionTitle" >
                    Social Webs
                </div>
            </div>
            <div id="Accordion4Content" class="AccordionContent">
                <table border="0" align="center">
                    <tr>
                        <td align="center"><a target="nav" href="http://www.facebook.com/"><b>FaceBook</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.linkedin.com/"><b>Linkedin</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.myspace.com/"><b>Myspace</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://twitter.com/"><b>twitter</b></a></td>
                    </tr>
                </table>
            </div>
            <div onclick="runAccordion(5);">
                <div class="AccordionTitle">
                    Banking
                </div>
            </div>
            <div id="Accordion5Content" class="AccordionContent">
                <table border="0" align="center">
                    <tr>
                        <td align="center"><a target="nav" href="https://www.paypal.com/ie"><b>PayPal</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.aib.ie/personal/home"><b>AIB</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="https://extranet.banesto.es/npage/loginParticulares.htm"><b>Banesto</b></a></td>
                    </tr>
                </table>
            </div>
            <div onclick="runAccordion(6);">
                <div class="AccordionTitle" >
                    Travel
                </div>
            </div>
            <div id="Accordion6Content" class="AccordionContent">
                <table border="0" align="center">
                    <tr>
                        <td align="center"><a target="nav" href="http://www.ryanair.com/en"><b>Ryanair</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.aerlingus.com/home/index.jsp"><b>Aerlingus</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.skyscanner.ie/"><b>Skyscanner</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.iberia.com//"><b>Iberia</b></a></td>
                    </tr>
                </table><a href="login2.php" style="border:none" onfocus="blur()"/><img src="images/down.png" style="border:none"/></a> 
            </div>
            <div onclick="runAccordion(7);" style="border:none">
                <div class="AccordionTitle" style="border:none">
                    More
                </div>
            </div>
            <div id="Accordion7Content" class="AccordionContent" style="border:none">
                <table border="0">
                    <tr>
                        <td align="center"><a target="nav" href="http://www.anpost.ie/AnPost/"><b>AnPost</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.bing.com/"><b>Bing</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="https://www.bwin.com/default.aspx"><b>Bwin</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.xe.com/"><b>Currency converter</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.fiverr.com/"><b>Fiverr</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://maps.google.com/"><b>Google maps</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.track-trace.com/post"><b>Track-Trace</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://translate.google.com/#"><b>translator</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://www.wordreference.com/"><b>Wordreference</b></a></td>
                    </tr>
                    <tr>
                        <td align="center"><a target="nav" href="http://ie.yahoo.com/?p=us"><b>Yahoo</b></a></td>
                    </tr>
                </table>
            </div><img src="images/down.png" style="border:none"/></a> </div>
</div>
  <!-- <div class="menu">
    <ul>
    <li>
    <A href="#"><img src="images/1.png"></A>
    <table border="0">
    <tr>
    <td>
    <ul>
    <li>
    <A href="#" onClick="document.body.style.backgroundImage=&quot;url(images/ma.jpg)&quot;;">Sky</A>
    </li>
    <li>
    <A href="#" onClick="document.body.style.backgroundImage='url(images/2.jpg)';">Planet</A>
    </li>
    <li>
    <A href="#" onClick="document.body.style.backgroundImage='url(images/5.jpg)';">Earth</A>
    </li>
    <li>
    <A href="#" onClick="document.body.style.backgroundImage='url(images/bg5.jpg)';">Black</A>
    </li>
    <li>
    <A href="#" onClick="document.body.style.backgroundImage='url(images/4.jpg)';">Aurora</A>
    </li>

    </ul>
    </td>
    </tr>

    </table>
    </li>
    </ul>
    </div> -->
  <!-- <div id="left2" s>
       <a href="login2.php" style="border:none" onfocus="blur()"/><img src="images/down.png" style="border:none"/></a>

   </div>--><center>
    <div align="center"  height="665" width="78%"  name="nav" style="background:" >
      <iframe id="frame" src="1.php" height="665" width="78%"  name="nav"  frameborder="0" allowtransparency="yes"/>
</div></center>
<!--
    <p> <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-xhtml10"
        alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a></p>
        -->



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
           
        }
    }
} else {



//if the cookie does not exist, they are taken to the login screen

    header("Location: login.php");
}
?>

</body>
</html>




