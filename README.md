# 🚀 LinkUp - Modern Professional Networking Platform

**LinkUp** est une application web moderne inspirée de LinkedIn, conçue pour connecter les professionnels et les étudiants. L'application offre un fil d'actualité fluide et interactif permettant de publier, modifier et partager des mises à jour professionnelles au sein d'une communauté dynamique.

---

## ✨ Fonctionnalités Principales

* 🔐 **Système d'Authentification** : Gestion sécurisée des sessions utilisateurs avec authentification personnalisée.
* 📰 **Fil d'actualité en Temps Réel** : Affichage dynamique des publications triées par date avec intégration d'auteurs et timestamps humanisés (`diffForHumans`).
* 🛠️ **Gestion Complète des Posts (CRUD)** :
  * Création de publications via une modale interactive.
  * Edition dynamique en ligne avec chargement des données via `JavaScript dataset`.
  * Suppression sécurisée.
* 🛡️ **Autorisations & Sécurité (Laravel Policies)** :
  * Contrôle d'accès strict : seuls les auteurs légitimes d'un post peuvent le modifier ou le supprimer (`@can('update')`, `@can('delete')`).
* 🎨 **Interface Utilisateur Moderne (UI/UX)** :
  * Design soigné avec **Tailwind CSS** (Glassmorphism, Avatars Squircle, Modales fluides).
  * Menu d'actions contextuel (Dropdown 3 points) pour une expérience utilisateur épurée.

---

## 🛠️ Stack Technique

| Composant | Technologie |
| :--- | :--- |
| **Backend** | PHP 8.2 / Laravel 12 (Architecture MVC) |
| **Frontend** | Blade Templating, Tailwind CSS, Vanilla JS |
| **Base de Données** | MySQL (Relations `HasMany` / `BelongsTo`, `cascadeOnDelete`) |
| **Icônes & Style** | FontAwesome 6 |
| **Environnement** | XAMPP / Vite |

---

## 📂 Architecture de la Base de Données

Le projet repose sur une structure relationnelle claire :

[Users] 1 ─── N [Posts]

* **User** : Contient les informations de profil (Nom, Headline, Entreprise, Avatar).
* **Post** : Contient le contenu textuel et la référence `user_id` avec suppression en cascade.

---

## ⚙️ Installation & Configuration Locale

Suivez ces étapes pour installer et exécuter le projet localement :

### 1. Cloner le dépôt
git clone https://github.com/votre-nom/linkup.git
cd linkup

### 2. Installer les dépendances
composer install
npm install

### 3. Fichier d'environnement
Copiez le fichier `.env.example` en `.env` :
cp .env.example .env

Configurez vos accès MySQL dans le fichier `.env` :
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=linkup
DB_USERNAME=root
DB_PASSWORD=

Générez la clé d'application :
php artisan key:generate

### 4. Migration & Données de test
Exécutez les migrations et alimentez la base avec les Seeders :
php artisan migrate --seed

### 5. Lancer le serveur
npm run dev
php artisan serve

Rendez-vous sur http://127.0.0.1:8000 sur votre navigateur.

---

## 👨‍💻 Auteur
Mohamed Ben Izza
Développé dans le cadre du projet d'application web **LinkUp**.