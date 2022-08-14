<?php
	// Recadrage d'image � partir d'une page HTML
	//
	// (c) Patrick Pr�martin 2010
	//
	// Liste des modifications :
	//	05/02/2010, pprem : finalisation de ce programme

	function Recadrer_Image
		(
			// Nom du chemin d'acc�s et du fichier image (exemple : /home/monsite.fr/images/toto.jpg)
			$sourcePathNomImage,
			// Chemin d'acc�s � l'image � recadrer (pour son affichage, en relatif au dossier de ce programme) (exemple : /images/toto.jpg)
			$sourceURLImage,
			// Nom du fichier de destination (image recadr�e) (exemple : /home/monsite.fr/images/toto-recadree.jpg)
			$destinationPathNomImage,
			// Adresse � laquelle le programme renvoie l'internaute une fois le recadrage effectu� et valid�
			$retourURL,
			// Largeur de l'image recadr�e = largeur par d�faut du cadre de s�lection
			$destinationLargeur=180,
			// Hauteur de l'image recadr�e = hauteur par d�faut du cadre de s�lection
			$destinationHauteur=180,
			// Largeur minimale du cadre de s�lection
			$cadreLargeurMin=100,
			// Hauteur minimale du cadre de s�lection
			$cadreHauteurMin=100,
			// Chemin d'acc�s au dossier web (relatif au programme appelant ou de pr�f�rence en absolu par rapport � la racine du site) dans lequel se trouvent ces fichiers (exemple : /recadrer-image)
			$recadrerURL="/recadrer-image"
		)
	{
		$sourceTaille = getimagesize($sourcePathNomImage);
		$width = $sourceTaille[0];
		$height = $sourceTaille[1];
		$recadrerURL .= ("" != $recadrerURL)?"/":"";
		session_start();
		$_SESSION["sourcePathNomImage"] = $sourcePathNomImage;
		$_SESSION["destinationPathNomImage"] = $destinationPathNomImage;
		$_SESSION["retourURL"] = $retourURL;
		$_SESSION["destinationLargeur"] = $destinationLargeur;
		$_SESSION["destinationHauteur"] = $destinationHauteur;
?><html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<?php print($recadrerURL); ?>recadrer-image.css"> 
	<script type="text/javascript" src="<?php print($recadrerURL); ?>recadrer-image.js"></script>
	<!--[if lt IE 8]> 
	<style>
		#bloc_recadre_haut,#bloc_recadre_gauche,#bloc_recadre_bas,#bloc_recadre_droite {
			background-image: url(images/transparent.gif);
		}
	</style>
	<![endif]-->
</head>
<body onLoad="fnOnLoad();" onMouseDown="fnOnMouseDown();" onMouseUp="fnOnMouseUp();">
<div id="conteneur" style="background: url(<?php print($sourceURLImage); ?>) no-repeat; width: <?php print($width); ?>px; height: <?php print($height); ?>px; margin-top: 0; margin-left: auto; margin-bottom: 0; margin-right: auto;">
	<div id="bloc_recadre" name="bloc_recadre" onMouseOver="fnOnMouseOver('bloc_recadre', 'conteneur');" onMouseOut="fnOnMouseOver();"></div>
	<div id="bloc_recadre_haut" name="bloc_recadre_haut"></div>
	<div id="bloc_recadre_gauche" name="bloc_recadre_gauche"></div>
	<div id="bloc_recadre_bas" name="bloc_recadre_bas"></div>
	<div id="bloc_recadre_droite" name="bloc_recadre_droite"></div>
</div>
<form action="<?php print($recadrerURL); ?>recadrer-image2.php" method="post">
<br />
<input type="hidden" id="sx" name="sx" value="0" /> 
<input type="hidden" id="sy" name="sy" value="0" />
<input type="hidden" id="ex" name="ex" value="0" /> 
<input type="hidden" id="ey" name="ey" value="0" />
<input type="hidden" id="gx" name="gx" value="<?php print($destinationLargeur); ?>" />
<input type="hidden" id="gy" name="gy" value="<?php print($destinationHauteur); ?>" />
<input type="hidden" id="mx" name="mx" value="<?php print($cadreLargeurMin); ?>" />
<input type="hidden" id="my" name="my" value="<?php print($cadreHauteurMin); ?>" />
<input type="submit" value="Redimmensionner l'image" />
</form>
</body>
</html><?php
	}
?>