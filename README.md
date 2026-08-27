# Les Histoires de Raoul Gomez — Site WordPress

Version WordPress du site vitrine de la chaîne YouTube
[Les Histoires de Raoul Gomez](https://www.youtube.com/@LeshistoiresdeRaoulGomez),
développée en local avec MAMP.

Ce dépôt ne versionne **que le contenu spécifique au projet** (thème custom,
plugins custom éventuels) — pas le cœur de WordPress ni les fichiers générés
localement (uploads, config, cache). Voir `.gitignore`.

## Prérequis

- [MAMP](https://www.mamp.info/) installé
- WordPress installé dans `htdocs/les-histoires-de-raoul-gomez-wp`

## Installation en local (nouvelle machine)

1. Cloner ce dépôt dans `Applications/MAMP/htdocs/les-histoires-de-raoul-gomez-wp`
2. Démarrer MAMP (Apache sur le port 8888, MySQL sur le port 8889)
3. Créer la base de données locale :
   ```bash
   /Applications/MAMP/Library/bin/mysql -h 127.0.0.1 -P 8889 -u root -proot \
     -e "CREATE DATABASE raoul_gomez_wp CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
   ```
4. Installer le cœur de WordPress avec [wp-cli](https://wp-cli.org/) et créer
   `wp-config.php` (voir `wp-config-sample.php`, non versionné) avec :
   - `DB_NAME` = `raoul_gomez_wp`
   - `DB_USER` = `root`
   - `DB_PASSWORD` = `root`
   - `DB_HOST` = `127.0.0.1:8889`
5. Aller sur http://localhost:8888/les-histoires-de-raoul-gomez-wp/

## Thème

Le thème custom du site vit dans `wp-content/themes/` (à venir : génération
à partir d'une maquette Canva).

## Accès admin local

Voir le fichier local `.admin-password-DO-NOT-COMMIT.txt` (non versionné)
pour les identifiants de l'administrateur WordPress en local.
