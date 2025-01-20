# Exercice : Créer un jeu de Mastermind en PHP

## Objectif

Créer un jeu de Mastermind en ligne de commande où le joueur doit deviner une combinaison secrète de couleurs.

## Règles du jeu

1. Le jeu génère une combinaison secrète de 4 couleurs parmi 6 possibles.
2. Le joueur a 10 tentatives pour deviner la combinaison.
3. Après chaque tentative, le jeu fournit des indices :
   - Un pion noir pour chaque couleur correcte à la bonne position.
   - Un pion blanc pour chaque couleur correcte mais à la mauvaise position.

## Étapes à suivre

### 1. Initialisation

- Générer aléatoirement une combinaison secrète de 4 couleurs parmi 6 (par exemple : R (rouge), B (bleu), V (vert), J (jaune), O (orange), P (violet)).
- Afficher un message de bienvenue et expliquer les règles du jeu.

### 2. Saisie du joueur

- Demander au joueur de saisir une combinaison de 4 lettres représentant les couleurs.
- Valider la saisie pour s'assurer qu'elle contient exactement 4 lettres parmi les 6 possibles.

### 3. Comparaison et indices

- Comparer la combinaison du joueur avec la combinaison secrète.
- Générer les indices (pions noirs et blancs) en fonction de la comparaison.

### 4. Affichage des résultats

- Afficher les indices au joueur.
- Indiquer le nombre de tentatives restantes.

### 5. Fin du jeu

- Si le joueur devine la combinaison secrète, afficher un message de victoire.
- Si le joueur utilise toutes ses tentatives sans deviner la combinaison, afficher un message de défaite et révéler la combinaison secrète.
