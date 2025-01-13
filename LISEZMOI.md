# Onpage picture cropper

[This page in English.](README.md)

Un exemple de script en JS+PHP pour recadrer une image en faisant glisser une boîte de redimensionnement sur une page web.

Ce projet est ouvert à tous en tant que ressource d'apprentissage. J'ai créé ce projet en 02/2010 pour le site web d'un client.

A l'exception des images d'exemple, vous pouvez utiliser ce projet où vous le souhaitez. Vérifiez simplement qu'il est toujours à jour pour la version PHP / JS dont vous avez besoin.

(c) 2010 Patrick Prémartin

## Présentations et conférences

### Twitch

Suivez mes streams de développement de logiciels, jeux vidéo, applications mobiles et sites web sur [ma chaîne Twitch](https://www.twitch.tv/patrickpremartin) ou en rediffusion sur [Serial Streameur](https://serialstreameur.fr) la plupart du temps en français.

## Utiliser ce script

Les fonctions sont dans le dossier /src/recadrer-image
Un exemple est dans le dossier /src/exemple

Pour découpeer une image, appelez la fonction Recadrer_Image() de /src/recadrer-image/recadrer-image.php

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

## Installation des codes sources

Pour télécharger ce dépôt de code il est recommandé de passer par "git" mais vous pouvez aussi télécharger un ZIP directement depuis [son dépôt GitHub](https://github.com/DeveloppeurPascal/web-picture-crop).

## Compatibilité

When I code, I work locally with XAMPP on Windows. My projects work for this stack.

There's no guarantee of compatibility with other versions, even though I try to keep my code clean and avoid using too many specific things.

Quand je développe, je travaille localement avec XAMPP sur Windows. Mes projets fonctionnent avec cette stack.

Aucune garantie de compatibilité avec d'autres logiciels ou versions n'est fournie même si je m'efforce de faire du code propre et ne pas trop utiliser de trucs spécifiques.

Si vous détectez des anomalies sur des versions antérieures n'hésitez pas à [les rapporter](https://github.com/DeveloppeurPascal/web-picture-crop/issues) pour que je teste et tente de corriger ou fournir un contournement.

## Licence d'utilisation de ce dépôt de code et de son contenu

Ces codes sources sont distribués sous licence [AGPL 3.0 ou ultérieure](https://choosealicense.com/licenses/agpl-3.0/).

Vous êtes globalement libre d'utiliser le contenu de ce dépôt de code n'importe où à condition :
* d'en faire mention dans vos projets
* de diffuser les modifications apportées aux fichiers fournis dans ce projet sous licence AGPL (en y laissant les mentions de copyright d'origine (auteur, lien vers ce dépôt, licence) obligatoirement complétées par les vôtres)
* de diffuser les codes sources de vos créations sous licence AGPL

Si cette licence ne convient pas à vos besoins vous pouvez acheter un droit d'utilisation de ce projet sous la licence [Apache License 2.0](https://choosealicense.com/licenses/apache-2.0/) ou une licence commerciale dédiée ([contactez l'auteur](https://trucs-de-developpeur-web.fr/nous-contacter.php) pour discuter de vos besoins).

Ces codes sources sont fournis en l'état sans garantie d'aucune sorte.

Certains éléments inclus dans ce dépôt peuvent dépendre de droits d'utilisation de tiers (images, sons, ...). Ils ne sont pas réutilisables dans vos projets sauf mention contraire.

## Comment demander une nouvelle fonctionnalité, signaler un bogue ou une faille de sécurité ?

Si vous voulez une réponse du propriétaire de ce dépôt la meilleure façon de procéder pour demander une nouvelle fonctionnalité ou signaler une anomalie est d'aller sur [le dépôt de code sur GitHub](https://github.com/DeveloppeurPascal/web-picture-crop) et [d'ouvrir un ticket](https://github.com/DeveloppeurPascal/web-picture-crop/issues).

Si vous avez trouvé une faille de sécurité n'en parlez pas en public avant qu'un correctif n'ait été déployé ou soit disponible. [Contactez l'auteur du dépôt en privé](https://trucs-de-developpeur-web.fr/nous-contacter.php) pour expliquer votre trouvaille.

Vous pouvez aussi cloner ce dépôt de code et participer à ses évolutions en soumettant vos modifications si vous le désirez. Lisez les explications dans le fichier [CONTRIBUTING.md](CONTRIBUTING.md).

## Supportez ce projet et son auteur

Si vous trouvez ce dépôt de code utile et voulez le montrer, merci de faire une donation [à son auteur](https://github.com/DeveloppeurPascal). Ca aidera à maintenir le projet (codes sources et binaires).

Vous pouvez utiliser l'un de ces services :

* [GitHub Sponsors](https://github.com/sponsors/DeveloppeurPascal)
* Ko-fi [en français](https://ko-fi.com/patrick_premartin_fr) ou [en anglais](https://ko-fi.com/patrick_premartin_en)
* [Patreon](https://www.patreon.com/patrickpremartin)
* [Liberapay](https://liberapay.com/PatrickPremartin)
* [Paypal](https://www.paypal.com/paypalme/patrickpremartin)

ou si vous parlez français vous pouvez [vous abonner à Zone Abo](https://zone-abo.fr/nos-abonnements.php) sur une base mensuelle ou annuelle et avoir en plus accès à de nombreuses ressources en ligne (vidéos et articles).
