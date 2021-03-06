<?php
include 'GoogleMapAPI.class.php';
//(1) On inclut la classe de Google Maps pour g�n�rer ensuite la carte.
//require('GoogleMapAPI.class.php');

//(2) On cr�e une nouvelle carte; Ici, notre carte sera $map.
$map = new GoogleMapAPI('map');

//(3) On ajoute la clef de Google Maps.
$map->setAPIKey('AIzaSyDGdKANPi0YTPIg7A6YXPW9WffDsVA7Nl8');
    
//(4) On ajoute les caract�ristiques que l'on d�sire � notre carte.
$map->setWidth("800px");
$map->setHeight("500px");
$map->setCenterCoords ('2', '48');
$map->setZoomLevel (5);

//(5) On applique la base XHTML avec les fonctions � appliquer ainsi que le onload du body.
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
	
	<head>
		<title>Ma premi�re carte Google Maps</title>
		<?php $map->printHeaderJS(); ?>
		<?php $map->printMapJS(); ?>
	</head>
	
	<body onload="onLoad();">
		<?php $map->printMap(); ?>
	</body>
	
</html>