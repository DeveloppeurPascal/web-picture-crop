# Onpage picture cropper

[Cette page en français.](LISEZMOI.md)

A sample script in JS+PHP to crop a picture by dragging a resize box on a web page.

This project is open sourced as a learning resource. I created this project in 02/2010 for a client website.

Except the sample pictures, you can use this project where you want. Just verify it's still up to date for PHP / JS version you need.

(c) 2010 Patrick Prémartin

## Talks and conferences

### Twitch

Follow my development streams of software, video games, mobile applications and websites on [my Twitch channel](https://www.twitch.tv/patrickpremartin) or as replays on [Serial Streameur](https://serialstreameur.fr) mostly in French.

## Using this script

The functions are in /src/recadrer-image folder.
A sample is in /src/exemple folder.

To crop a picture, call Recadrer_Image() function from /src/recadrer-image/recadrer-image.php

```PHP
function Recadrer_Image (
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

## Source code installation

To download this code repository, we recommend using "git", but you can also download a ZIP file directly from [its GitHub repository](https://github.com/DeveloppeurPascal/web-picture-crop).

## Compatibility

When I code, I work locally with XAMPP on Windows. My projects work for this stack.

There's no guarantee of compatibility with other software or versions, even though I try to keep my code clean and avoid using too many specific things.

If you detect any anomalies on earlier versions, please don't hesitate to [report them](https://github.com/DeveloppeurPascal/web-picture-crop/issues) so that I can test and try to correct or provide a workaround.

## License to use this code repository and its contents

This source code is distributed under the [AGPL 3.0 or later license](https://choosealicense.com/licenses/agpl-3.0/).

You are generally free to use the contents of this code repository anywhere, provided that:
* you mention it in your projects
* distribute the modifications made to the files supplied in this project under the AGPL license (leaving the original copyright notices (author, link to this repository, license) which must be supplemented by your own)
* to distribute the source code of your creations under the AGPL license.

If this license doesn't suit your needs, you can purchase the right to use this project under the [Apache License 2.0](https://choosealicense.com/licenses/apache-2.0/) or a dedicated commercial license ([contact the author](https://trucs-de-developpeur-web.fr/nous-contacter.php) to explain your needs).

These source codes are provided as is, without warranty of any kind.

Certain elements included in this repository may be subject to third-party usage rights (images, sounds, etc.). They are not reusable in your projects unless otherwise stated.

## How to ask a new feature, report a bug or a security issue ?

If you want an answer from the project owner the best way to ask for a new feature or report a bug is to go to [the GitHub repository](https://github.com/DeveloppeurPascal/web-picture-crop) and [open a new issue](https://github.com/DeveloppeurPascal/web-picture-crop/issues).

If you found a security issue please don't report it publicly before a patch is available. Explain the case by [sending a private message to the author](https://trucs-de-developpeur-web.fr/nous-contacter.php).

You also can fork the repository and contribute by submitting pull requests if you want to help. Please read the [CONTRIBUTING.md](CONTRIBUTING.md) file.

## Support the project and its author

If you think this project is useful and want to support it, please make a donation to [its author](https://github.com/DeveloppeurPascal). It will help to maintain the code and binaries.

You can use one of those services :

* [GitHub Sponsors](https://github.com/sponsors/DeveloppeurPascal)
* Ko-fi [in French](https://ko-fi.com/patrick_premartin_fr) or [in English](https://ko-fi.com/patrick_premartin_en)
* [Patreon](https://www.patreon.com/patrickpremartin)
* [Liberapay](https://liberapay.com/PatrickPremartin)
* [Paypal](https://www.paypal.com/paypalme/patrickpremartin)

or if you speack french you can [subscribe to Zone Abo](https://zone-abo.fr/nos-abonnements.php) on a monthly or yearly basis and get a lot of resources as videos and articles.
