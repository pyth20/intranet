<?php
session_start();
header ( "Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0");
header ("Pragma: no-cache");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Verlängerungsmitteilung</title>
<script language="javascript" src="calendar/calendar.js"></script>
<link href="calendar/calendar.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
<body bgcolor=#AAAAFF style='font-family:Arial;font-size:13px;'>
</head>
<html>
<body>

<?php
include("dbconnect.php");
$empfaenger = "dietpunk@localhost";
		$absendername = "$_SESSION[verlkl] Mitteilung";
		$absendermail = "no-reply@stmarien.net";
		$betreff = "$_SESSION[verlkm] $_SESSION[lastn], $_SESSION[suren]";
		$text = "Mitteilung über $_SESSION[verlkm]
Patientennummer: 		$_SESSION[patnr]
Patient:				$_SESSION[lastn], $_SESSION[lastn]
Kostenträger: 			$_SESSION[kost]
Zimmernummer:			$_SESSION[znr]
				
altes Abreisedatum:		$_SESSION[mydate1]
neues Abreisedatum:		$_SESSION[mydate2] 
Fregebender Arzt: 		$_SESSION[arzt]
<br />
Der Aufenthalt wurde um $_SESSION[days] Tage $_SESSION[verlkt].
	<br /><br />			
Diese E-Mail wurde automatisch erstellt! Bitte Antworten Sie nicht direkt auf diese E-Mail.";
mail($empfaenger, $betreff, $text, "From: $absendername <$absendermail>");
mysql_query("SET NAMES 'utf8'");
mysql_query("INSERT INTO verlk (surename, patnr, lastname, znr, kost, arzt, startdate, end, verlk, days) 
VALUES ('$_SESSION[suren]', '$_SESSION[patnr]', '$_SESSION[lastn]', '$_SESSION[znr]', '$_SESSION[kost]', '$_SESSION[arzt]', '$_SESSION[mydate1]', '$_SESSION[mydate2]', '$_SESSION[verlk]', '$_SESSION[days]')");

$_SESSION = array();
session_destroy();
?>
<p><img src="img/stmarien-logo.gif" align=right alt="Logo"></p>
<br>
<br>
<br>
<br>
<br>
<br>
<h1 align=center> Daten wurden gesendet </h1>
<center>
<input type="button" value="zurück"  onclick="window.location.href='index.php'" />
</center>
