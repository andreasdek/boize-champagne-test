<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Bestelling</title>
</head>

<body>
 <h1>Bevestiging bestelling
</h1>
<?php
	
	
$Bericht = "<b>Gegevens</b></br>";
$Bericht .=	"Naam: " . $_POST["Naam"] . "</br>";
$Bericht .=	"Voornaam: " . $_POST["Voornaam"]. "</br>";
$Bericht .=	"Straat + huisnummer: " . $_POST["Adres"]. "</br>";
$Bericht .=	"Postcode: " . $_POST["Postcode"]. "</br>";	
$Bericht .=	"Plaats: " . $_POST["Plaats"]. "</br>";	
$Bericht .=	"Land van herkomst: " . $_POST["Land"]. "</br>";	
$Bericht .=	"Email: " . $_POST["Emailadres"]. "</br>";
$Bericht = "<b>Bestelling</b></br>";	

$Bericht .=	"Brut Réserve: " . $_POST["Hoeveelheid_Brut"]. "</br>";
$Bericht .=	"Rosé: " . $_POST["Hoeveelheid_Rosé"]. "</br>";
$Bericht .=	"Blanc de Blancs: " . $_POST["Hoeveelheid_Blanc"]. "</br>";	
$Bericht .=	"Grand Vintage 2007: " . $_POST["Hoeveelheid_GV2007"]. "</br>";	
$Bericht .=	"Grand Vintage 2012: " . $_POST["Hoeveelheid_GV2012"]. "</br>";
$Bericht .=	"Blanc de Noirs: " . $_POST["Hoeveelheid_Noir"]. "</br>";
$Bericht .=	"Ultime: " . $_POST["Hoeveelheid_Ultime"]. "</br>";	
$Bericht .=	"Cuvée Sous Bois: " . $_POST["Hoeveelheid_CuvéeSB"]. "</br>";	
$Bericht .=	"Joyau de France 2004: " . $_POST["Hoeveelheid_Joyau2004"]. "</br>";	
$Bericht .=	"Joyau de France Rosé 2007: " . $_POST["Hoeveelheid_JoyauRosé"]. "</br>";	
$Bericht .=	"Joyau de France Chardonnay 2007: " . $_POST["Hoeveelheid_JoyauChar"]. "</br>";	
	
	

	
$To = "aziliz.divoux@student.vives.be";
$Onderwerp = "Bestelling";
$From = $_POST["email"] ;
$Headers = "From: " . $From . " \r\n";
$Headers .= "MIME-Version: 1.0" . "\r\n";
$Headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
$FormSent = mail($To, $Onderwerp, $Bericht, $Headers);
	
if ($FormSent) {
	echo "Bedankt voor je bestelling! </br>Je ontvangt een email wanneer je bestelling klaar is voor verzending. Cheers!.";	
} else {
	echo "Er is een fout opgetreden bij het versturen van je bestelling! </br>Probeer later opnieuw ...";
}
	
?>	
	
	
	
	
	
	
	
	
	
	
	
	
</body>
</html>