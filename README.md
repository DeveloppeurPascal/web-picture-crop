# Onpage picture cropper

A sample script in JS+PHP to crop a picture by dragging a resize box on a web page.

## About

This project is open sourced as learning resource. I created in 02/2010 for a client website.

I probably won't update the project, but it's open to pull request if you want to share your changes.

## How to

The functions are in /src/recadrer-image folder.
A sample is in /src/exemple folder.

To crop a picture, call Recadrer_Image() function from /src/recadrer-image/recadrer-image.php

```PHP
	function Recadrer_Image
		(
			// Source picture path (full path on the hosting service) (exemple : /home/monsite.fr/images/toto.jpg or c:\folder\folder\toto.jpg)
			$sourcePathNomImage,
			// URL to the picture, relative to the calling page or absolute (exemple : /images/toto.jpg)
			$sourceURLImage,
			// Cropped picture path on the hosting service (absolute folder path + file name) (exemple : /home/monsite.fr/images/toto-recadree.jpg)
			$destinationPathNomImage,
			// URL to send the user after cropping the picture
			$retourURL,
			// Cropped picture width
			$destinationLargeur=180,
			// Cropped picture height
			$destinationHauteur=180,
			// Select frame width
			$cadreLargeurMin=100,
			// Select frame height
			$cadreHauteurMin=100,
			// URL to this script folder (relative to the web page or absolute URL) (exemple : /recadrer-image)
			$recadrerURL="/recadrer-image"
		)

```

## License

Except sample picture, you can use this project where you want. Just verify it's still up to date for PHP / JS version you need.

## Copyright

(c) Patrick Prémartin / Olf Software 2010