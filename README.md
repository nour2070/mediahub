# MediaHub - Plateforme de gestion de contenus multimédias

## Description
MediaHub est une application web développée avec Laravel permettant aux utilisateurs de publier, gérer et consulter des contenus multimédias (images, vidéos, etc.).

## Fonctionnalités
- Authentification (Inscription, Connexion, Déconnexion)
- CRUD complet des publications avec téléversement d'images
- Gestion des catégories
- Système de commentaires
- API REST pour consulter les publications

## Installation
1. Cloner le projet
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. `php artisan migrate:fresh --seed` (Crée la base de données et insère les données de test)
6. `php artisan storage:link`
7. `php artisan serve`

## Tests
Exécuter `php artisan test` pour lancer la suite de tests automatisés.