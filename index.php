<?php
header ( "Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0"); 
header ("Pragma: no-cache");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="tcal.css" />
<title>Verlängerungsmitteilung</title>
<script type="text/javascript" src="tcal.js"></script> 
<script language="JavaScript">
function chkFormular()
 {
  if(document.verlmitteilung.patnr.value == "")
  {
   alert("Bitte geben Sie die Patientennummer ein!");
   document.verlmitteilung.patnr.focus();
   return false;
  }
  if(document.verlmitteilung.surename.value == "")
  {
   alert("Bitte geben Sie einen Vornamen ein!");
   document.verlmitteilung.surename.focus();
   return false;
  }
 if(document.verlmitteilung.lastname.value == "")
  {
   alert("Bitte geben Sie einen Nachnamen ein!");
   document.verlmitteilung.lastname.focus();
   return false;
  }
  if(document.verlmitteilung.znr.value == "")
  {
   alert("Bitte geben Sie eine Zimmernummer ein!");
   document.verlmitteilung.znr.focus();
   return false;
  }
  if(document.verlmitteilung.kost.value == "")
  {
   alert("Bitte geben Sie einen Kostenträger ein!");
   document.verlmitteilung.kost.focus();
   return false;
  }
  if(document.verlmitteilung.arzt.value == "")
  {
   alert("Bitte geben Sie den freigebenden Arzt ein!");
   document.verlmitteilung.arzt.focus();
   return false;
  }
    if(document.verlmitteilung.mydate1.value == "")
  {
   alert("Bitte geben Sie das ursprüngliche Entlassdatum ein!");
   document.verlmitteilung.mydate1.focus();
   return false;
  }
    if(document.verlmitteilung.mydate2.value == "")
  {
   alert("Bitte geben Sie das neue Entlassdatum ein!");
   document.verlmitteilung.mydate2.focus();
   return false;
  }
  }
  </script>
</head>
<html>
<body bgcolor=#AAAAFF style='font-family:Arial;font-size:13px;'>
<p><img src="img/stmarien-logo.gif" align=right alt="Logo"></p>
<br><br><br>
<h2 align=center> Bitte alle Felder ausfüllen! </h2>

<form name="verlmitteilung" onSubmit="return chkFormular()" action="proceed.php" method="post">
<table border=0 cellpadding=5 align="center" >
	<tr>
		<td><strong>Art der Mitteilung</td>
		<td><input type="radio" name="verlverk" value"1"/> Verlängerung </td>
		<td><input type="radio" name="verlverk" value"2"/> Verkürzung </td>
	</tr>
	<tr>
		<td><strong>Pat. Nr.: <td> <input type="text" name="patnr" /> </td></td>
		<td><strong>Name: <td> <input type="text" name="surename" /> </td> </td>
		<td><strong>Vorname: <td> <input type="text" name="lastname" /></td></td>
	</tr>
	<tr>
		<td><strong>Zimmernummer: <td><input type="text" name="znr" /></td></td>
		<td><strong>Kostenträger: <td><input type="text" name="kost" /></td></td>
		<td><strong>Freigebender Arzt: <td><input type="text" name="arzt" /></td></td>
	</tr>
	<tr>
		<td>altes Abreisedatum: <td><input type="text" name="mydate1" class="tcal" /></td></td>
		<td>neues Abreisedatum: <td><input type="text" name="mydate2" class="tcal" /></td></td>
	</tr>		
</table>
<br>
<center>
<input type="submit" value="absenden" />
</center
</form>
</body>
</html>
