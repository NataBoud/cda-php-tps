# XDebug

## Liens

- [https://xdebug.org/download](https://xdebug.org/download)

## Instructions

1. Télécharger `xdebug` depuis le lien de la section précédente. Dans la section Windows binaries choisissez la version adaptée à celle de votre version de PHP. (`php -v` dans le terminal, attention Thread Safe ou non!)
2. Renommer le fichier téléchargé en `php_xdebug.dll`
3. Se rendre dans le dossier d'installation de php, par exemple `%localappdata%\php`
4. copier le fichier `php_xdebug.dll` dans le répertoire `ext/`
5. Editier le fichier `php.ini`. Si le fichier n'est pas présent, faire une copie de `php.ini-development` et le renommer en `php.ini`.
6. Copier le chemin complet jusqu'à la librairie xdebug, par exemple `C:\Users\admin\AppData\Local\php\ext\php_xdebug.dll`
7. Ajouter une ligne `zend_extension=chemin/vers/extension/xdebug.dll` en remplaçant le chemin par celui copié précédemment
8. Ajouter ces deux lignes au php.ini pour activer le débuggage en remote
   ```ini
   xdebug.mode = debug
   xdebug.start_with_request = yes
   ```
9. Installer l'extension `PHP Debug` sur VSCode
