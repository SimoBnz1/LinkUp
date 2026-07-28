# 1. Nom du projet

**Nom du projet :** LinkUp - Plateforme de Réseau Social Professionnel

---

# 2. Présentation du projet

Ce projet est une application web de réseau social professionnel qui permet de publier, modifier, supprimer et partager des actualités en temps réel.

Il s'adresse principalement aux étudiants, développeurs et professionnels souhaitant échanger des opportunités et des idées au sein d'une communauté.

Son objectif principal est d'offrir une plateforme fluide, sécurisée et intuitive pour faciliter le réseautage et le partage de contenu professionnel.

---

# 3. Problématique

Le problème identifié est que les utilisateurs manquent souvent d'un espace simple et épuré pour partager rapidement leurs actualités professionnelles sans être submergés par des fonctionnalités trop complexes.

La solution proposée permet de consulter un fil d'actualité en temps réel, de publier du contenu instantanément et de gérer ses propres publications de manière sécurisée et interactive.

---

# 4. Fonctionnalités principales

- Créer un compte et se connecter de façon sécurisée
- Publier une actualité textuelle sur le fil d'actualité
- Modifier dynamiquement ses propres publications via une fenêtre modale
- Supprimer ses publications en toute sécurité
- Consulter les informations et profils des autres membres
- Interagir avec les publications du réseau (Aimer, Commenter, Partager)

---

# 5. Technologies utilisées

| Technologie | Utilisation dans le projet |
|-------------|----------------------------|
| PHP 8.2 & Laravel 12 | Développement du backend, gestion de la logique métier et de l'architecture MVC |
| Blade Templating | Structuration et affichage des vues côté serveur |
| Tailwind CSS | Conception d'une interface utilisateur moderne, fluide et responsive |
| JavaScript (Vanilla JS) | Gestion dynamique des fenêtres modales et manipulation du DOM sans rechargement |
| MySQL | Stockage relationnel des utilisateurs et des publications |
| FontAwesome 6 | Intégration des icônes pour améliorer l'expérience utilisateur (UI/UX) |

> Nous avons utilisé **Laravel 12** pour structurer l'application selon le modèle MVC et sécuriser les accès grâce aux Policies.

---

# 6. Installation et lancement

## 6.1 Prérequis

Pour utiliser ce projet, vous devez disposer de :

- PHP >= 8.2
- Composer
- Node.js & npm
- Un serveur local (XAMPP / WampServer) avec MySQL
- Git

---

## 6.2 Cloner le dépôt

git clone https://github.com/mohamed-ben-izza/linkup.git

---

## 6.3 Ouvrir le dossier

cd linkup

---

## 6.4 Installer les dépendances

composer install
npm install

---

## 6.5 Variables d'environnement

Créer le fichier `.env` en copiant le fichier d'exemple :

cp .env.example .env

Variables de votre projet à configurer dans `.env` :

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=linkup
DB_USERNAME=root
DB_PASSWORD=

Générez ensuite la clé d'application :

php artisan key:generate

---

## 6.6 Lancer le projet

Exécutez les migrations de la base de données :

php artisan migrate --seed

Lancez le serveur de développement et la compilation des assets :

npm run dev
php artisan serve

---

## 6.7 Ouvrir le projet

Après le lancement, ouvrez votre navigateur à l'adresse suivante :

http://127.0.0.1:8000

---

# 7. Captures d'écran

## Capture 1

### Titre

Fil d'actualité principal (Feed)

### Image

![Fil d'actualité](public/images/screenshots/feed.png)

### Explication

Cette capture montre l'interface principale de l'application avec le fil d'actualité, la liste des membres en ligne et le profil sommaire de l'utilisateur connecté.

---

## Capture 2

### Titre

Modification dynamique d'une publication

### Image

![Modale de modification](public/images/screenshots/edit-modal.png)

### Explication

Cette capture montre la fenêtre modale s'affichant lors du clic sur le bouton "Modifier", permettant à l'utilisateur de mettre à jour son post sans recharger la page.

---

# 8. Contribution personnelle

Ma contribution principale a porté sur l'architecture backend du projet, la gestion de la base de données MySQL ainsi que la fonctionnalité de modification dynamique des posts via JavaScript.

J'ai également travaillé sur la sécurisation des actions avec les Laravel Policies, l'intégration de la pagination et la création de l'interface utilisateur responsive avec Tailwind CSS.

J'ai été responsable de la mise en place du CRUD complet des publications et de l'intégration des modales dynamiques.

---

# 9. Difficultés rencontrées

## Difficulté 1

### Problème rencontré

Lors de la modification d'un post via la fenêtre modale, les saut de lignes (newlines) dans le contenu provoquaient une erreur de syntaxe JavaScript (`SyntaxError: ',' expected`).

### Recherches / Tests

J'ai d'abord essayé d'échapper les caractères avec la fonction PHP `addslashes()`, mais les retour à la ligne n'étaient pas correctement gérés par l'attribut `onclick`.

### Solution

J'ai extrait le contenu et l'URL de l'action directement dans des attributs HTML `data-content` et `data-action`, puis j'ai utilisé `dataset` en JavaScript pour récupérer les valeurs proprement.

### Ce que j'ai appris

J'ai appris à manipuler correctement les données entre Blade et JavaScript en passant par les `data-attributes` pour éviter les erreurs d'échappement de chaîne.

### Texte final

J'ai rencontré le problème suivant : l'ouverture de la modale de modification échouait avec une erreur de syntaxe JS lorsque le post contenait des retours à la ligne.

Pour comprendre l'origine du problème, j'ai analysé la console du navigateur et testé différentes méthodes d'échappement en PHP.

J'ai résolu le problème en passant les données du post via les attributs `data-*` de HTML et en les lisant avec `dataset` en JavaScript.

Cette difficulté m'a permis d'apprendre une bonne pratique de séparation entre le rendu HTML/Blade et l'exécution du code JavaScript.

---

## Difficulté 2

### Problème rencontré

Autoriser la modification et la suppression uniquement à l'auteur réel de la publication sur le frontend et le backend.

### Recherches / Tests

J'ai consulté la documentation de Laravel sur les **Policies** et la directive Blade `@can`.

### Solution

J'ai créé une `PostPolicy` avec la méthode `update` et `delete` vérifiant si `user_id` du post correspond à l'ID de l'utilisateur connecté, puis je l'ai appliquée dans le contrôleur et la vue Blade.

### Ce que j'ai appris

J'ai appris à mettre en place un système d'autorisation granulaire et sécurisé dans Laravel grâce aux Policies.

---

# 10. Améliorations possibles

Dans une prochaine version, je pourrais :

- Ajouter un système de commentaires et de likes en temps réel.
- Permettre le partage d'images et de fichiers multimédias dans les publications.
- Mettre en place un système de notifications en direct.
- Ajouter des tests automatisés (Feature tests) avec Pest / PHPUnit.

### Conclusion

Ces améliorations permettraient de rendre la plateforme plus interactive, d'augmenter l'engagement des utilisateurs et d'assurer une meilleure stabilité du code.

---

# 👨‍💻 Auteur

**Mohamed Ben Izza**  
Développé dans le cadre du projet d'application web **LinkUp**.