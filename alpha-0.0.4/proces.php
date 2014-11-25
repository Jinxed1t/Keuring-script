<?php
	// Data van verslaggever 1 naar fgdata later
   	$Vnr = $_POST["Vnr"];
	$Fname = $_POST["Fname"];
	$Lname = $_POST["Lname"];
	$Bname = $_POST["Bname"];
	$Functie = $_POST["Functie"];
	$Straat = $_POST["Straat"];
	$Nummer = $_POST["Nummer"];
	$Bnr = $_POST["Bnr"];
	$Gemeente = $_POST["Gemeente"];
	$Postcode = $_POST["Postcode"];
	$Land = $_POST["Land"];
	$Telnr = $_POST["Telnr"];
	$GSM = $_POST["GSM"];
	$Email = $_POST["Email"];
	
	
	
	
    
    mysql_connect("localhost", "learoxcom_ak", "DG2157dg2157") or die(mysql_error()); 
    mysql_select_db("learoxcom_ak") or die(mysql_error()); 
    mysql_query("INSERT INTO `fgdata` VALUES ('$Vnr', '$Fname', '$Lname', '$Bname', '$Functie', '$Straat', '$Nummer', '$Bnr', '$Gemeente', '$Postcode', '$Land', '$Telnr', '$GSM', '$Email')"); 
    print "Deze data is opgeslagen in de database, we brengen u naar de volgende stap!";
?>