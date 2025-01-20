# Installation de PHP 8.4

## Etapes d'installation

1. Aller sur le site [windows.php.net](https://windows.php.net/download/)
2. Télécharger la dernière archive `.zip` disponible sur votre poste
3. Utiliser le raccourci `Windows` + `R`, un invité de commande s'ouvre devant vos yeux ébahis, saisissez ensuite en son corps : `%LocalAppData%`
4. Créer un répertoire nommé `php` et dézipper le contenu de l'archive à l'intérieur
5. Copier l'url de votre répertoire où se situe l'installation de php `%localappdata%\php`
6. Appuyer sur la touche `Windows` et taper : Variables d'environnement
   1. Cliquer sur modifier les variables d'environnements
   2. Cliquer sur le bouton `Variables d'environnement...`
   3. Dans la liste déroulante cliquer sur l'élément `Path`
   4. Cliquer ensuite sur le bouton `Modifier`
   5. Cliquer sur `Nouveau` et copier le chemin du répertoire PHP
7. Ouvrir un terminal et taper `php --version`

## FAQ

1. Que faire en cas d'erreur : `PHP Warning:  'C:\Windows\SYSTEM32\VCRUNTIME140.dll'`
   - Télécharger la dépendance suivante (32 bits): [https://aka.ms/vs/17/release/vc_redist.x86.exe](https://aka.ms/vs/17/release/vc_redist.x86.exe)
   - Où (64 bits): [https://aka.ms/vs/17/release/vc_redist.x64.exe](https://aka.ms/vs/17/release/vc_redist.x64.exe)
