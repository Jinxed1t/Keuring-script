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
      <title>Nieuw verslag</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      
</head>
<body>
<div id='fg_membersite_content'>
<p><h2>Een nieuw verslag aanmaken</h2></p>
<p><h2><u>Gegevens m.b.t. keuring en inspectie</u></h2></p>
<p><h3>Administratieve gegevens verslaggever (1)</h3></p>
<form method="post" action="proces.php">
	
<table>
  <tr>
    <td>Nieuw verslagnummer:</td>
    <td><input type="text" size="12" maxlength="12" name="Vnr"></td>
    <td>Laatste verslagnummer:</td>
    <td></td>
  </tr>
   <tr>
    <td>Voornaam:</td>
    <td><input type="text" size="12" maxlength="36" name="Fname"></td> 
    <td>Achternaam:</td>
    <td><input type="text" size="12" maxlength="36" name="Lname"></td> 
  </tr>
    <tr>
    <td>Bedrijfsnaam:</td>
    <td><input type="text" size="12" maxlength="36" name="Bname"></td> 
    <td>Functie:</td>
    <td><input type="text" size="12" maxlength="36" name="Functie"></td> 
  </tr>
    <tr>
    <td>Straat: </td>
    <td><input type="text" size="20" maxlength="36" name="Straat"></td>
    <td>Nummer: </td>
    <td><input type="text" size="6" maxlength="6" name="Nummer"></td>
    <td>Busnummer:</td>
    <td><input type="text" size="6" maxlength="6" name="Bnr"></td> 
  </tr>
    <tr>
    <td>Gemeente:</td>
    <td><input type="text" size="20" maxlength="36" name="Gemeente"></td> 
    <td>Postcode:</td>
    <td><input type="text" size="6" maxlength="4" name="Postcode"></td> 
  </tr>
    <tr>
    <td>Land:</td>
    <td><input type="text" size="20" maxlength="36" name="Land"></td> 
  </tr>
    <tr>
    <td>Telefoon / Faxnummer:</td>
    <td><input type="text" size="20" maxlength="14" name="Telnr"></td> 
  </tr>
    <tr>
    <td>GSM-nr:</td>
    <td><input type="text" size="20" maxlength="14" name="GSM"></td> 
  </tr>
    <tr>
    <td>E-mailadres:</td>
    <td><input type="text" size="20" maxlength="36" name="Email"></td> 
  </tr>
</table>
<p></h3></p>
<input type="submit" value="Volgende Stap" name="submit">
</form>
</div>
<?php
	echo "<p>versie " . $versionsite . " coded door Bart</p>"
?>
</body>
</html>