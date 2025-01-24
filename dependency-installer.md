# Installation de dépendances avec Chocolatey

## Pré-requis

1. Exécuter Powershell en tant qu'Administrateur
2. Exécutez `Get-ExecutionPolicy`. Si le résultat est `Restricted`, exécutez `Set-ExecutionPolicy AllSigned` ou `Set-ExecutionPolicy Bypass -Scope Process`.
3. Exécuter la commande suivante dans le terminal :

```pwsh
Set-ExecutionPolicy Bypass -Scope Process -Force; [System.Net.ServicePointManager]::SecurityProtocol = [System.Net.ServicePointManager]::SecurityProtocol -bor 3072; iex ((New-Object System.Net.WebClient).DownloadString('https://community.chocolatey.org/install.ps1'))
```

## Installer les packages

1. Saisir la commande suivante dans un terminal powershell en Administrateur

```pwsh
choco install php composer vscode git nodejs-lts dotnet-8.0-sdk docker-desktop
```
