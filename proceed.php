<?php
session_start();
$_SESSION['rand()'];
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
<p><img src="img/stmarien-logo.gif" align=right alt="Logo"></p>
<?php


	switch($_POST['verlverk']){
		case 0:
		$verlk = 0;
		break;
	case 1:
		$verlk = 1;
		}
	if ($verlk == 0)
	{
		$verlkm = "Verlängerung";
		$verlkt = "verlängert";
	}
	else
	{		
		$verlkm = "Verkürzung";
		$verlkt = "verkürzt";
	}
		$surn = $_POST['surename'];
        $lastn = $_POST['lastname'];
        $patnr = $_POST['patnr'];
        $znr = $_POST['znr'];
        $kost = $_POST['kost'];
        $arzt = $_POST['arzt'];
		$mydate1 = $_POST['mydate1'];
		$mydate2 = $_POST['mydate2'];
			if ($verlk == 0)
			{
				$days = floor((strtotime("$mydate2") - strtotime ("$mydate1"))/86400);
			}
			else
			{
				$days = floor((strottime("$mydate1") - strottime ("$mydate2"))/86400);
			}
		
// Variablen in Sessionvariablen überführen

$_SESSION["patnr"] = $patnr;
$_SESSION["lastn"] = $lastn;
$_SESSION["suren"] = $surn;
$_SESSION["kost"] = $kost;
$_SESSION["mydate1"] = $mydate1;
$_SESSION["mydate2"] = $mydate2;
$_SESSION["arzt"] = $arzt;
$_SESSION["days"] = $days;
$_SESSION["verlkt"] = $verlkt;
$_SESSION["verlkm"] = $verlkm;
$_SESSION["verlk"] = $verlk;
$_SESSION["znr"] = $znr;
?>

<!-- Datenkontrolle -->
<br>
<br>
<br>
<br>
<h1 align="center"> Datenkontrolle </h1>
<table border=0 cellpadding=5 align="center" >
<br>
<br>
<br>
<h3 align=center> Bitte überprüfen Sie die richtigkeit der eingegebenen Daten!</h3>
<tr>
	<td> <strong>Patientennumer: </strong><?php echo $patnr; ?> </td>
	<td> <strong>Patientenname: </strong><?php echo $lastn; ?>, <?php echo $suren; ?> </td>
	<td> <strong>Kostenträger: </strong><?php echo $kost; ?> </td>
</tr>
<tr>
	<td> <strong>altes Abreisedatum: </strong><?php echo $mydate1; ?> </td>
	<td> <strong>neues Abreisedatum: </strong><?php echo $mydate2; ?> </td>
	<td> <strong>freigebender Arzt: </strong><?php echo $arzt; ?> </td>
</tr>
<tr>	
	<td> <strong>Zimmernummer: </strong><?php echo $znr; ?> </td>
</tr>	

</table>
<br>
<h3 align="center">Der Aufenthalt soll um <?php echo $days; ?> Tage <?php echo $verlkt; ?> werden. <br> <br>
Sind die angegebenen Daten richtig und sollen versendet werden?
</h3>
<center>
<input type="button" value="ok" onclick="window.location.href='send.php'" />
<input type="button" value="Abbrechen" onclick="window.location.href='index.php'" />
</center>

</body>
</html>