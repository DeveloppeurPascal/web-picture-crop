<?php
	// Recadrage d'image � partir d'une page HTML
	//
	// (c) Patrick Pr�martin 2010
	//
	// Liste des modifications :
	//	05/02/2010, pprem : finalisation de ce programme

	// R�up�ration des param�tres d'appel du programme
	session_start();
	$sourcePathNomImage = $_SESSION["sourcePathNomImage"];
	$destinationPathNomImage = $_SESSION["destinationPathNomImage"];
	$retourURL = $_SESSION["retourURL"];
	$destinationLargeur = $_SESSION["destinationLargeur"];
	$destinationHauteur = $_SESSION["destinationHauteur"];
	
	// R�cup�ration des informations de d�coupage de l'image
	$cropStartX = $_POST['sx']*1;
	$cropStartY = $_POST['sy']*1;
	$cropW = $_POST['ex']*1;
	$cropH = $_POST['ey']*1;
	$finalWidth = $_POST['gx']*1;
	$finalHeight = $_POST['gy']*1;

	// cr�ation des deux images temporaires
	$sourceImage = imagecreatefromjpeg($sourcePathNomImage);
	$destinationImage = imagecreatetruecolor($finalWidth,$finalHeight);

	// r�solution de l'image d'origine
	list($width, $height) = getimagesize($sourcePathNomImage);

	// Crop
	imagecopyresized($destinationImage, $sourceImage, 0, 0, $cropStartX, $cropStartY, $finalWidth, $finalHeight, $cropW, $cropH);

	// enregistrement de l'image finale
	imagejpeg($destinationImage, $destinationPathNomImage, 100);

	// Fin du redimensionnement
	
	header("location: ".$retourURL);
?>