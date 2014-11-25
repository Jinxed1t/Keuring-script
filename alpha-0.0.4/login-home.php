<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Home page</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
</head>
<body>
<div id='fg_membersite_content'>
<h2>Home Page</h2>
Welkom <?= $fgmembersite->UserFullName(); ?>!
<p><a href='new.php'>Nieuw verslag maken</a></p>
<p><a href='report.php'>Verslagen bekijken</a></p>
<p><a href='change-pwd.php'>Verander paswoord</a></p>
<br><br><br>
<p><a href='logout.php'>Logout</a></p>
</div>
<?php
	echo "<p>versie " . $versionsite . " coded door Bart</p>"
?>
</body>
</html>
