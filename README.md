#  LinkUp — Clone Professionnel LinkedIn 

LinkUp est un réseau social innovant destiné aux professionnels et aux recruteurs. Ce projet est développé avec le framework **Laravel 12** et stylisé avec **Tailwind CSS**. L'objectif de cette première semaine est de poser des bases architecturales robustes en modélisant les données fondamentales (utilisateurs et publications) et en affichant un fil d'actualité dynamique, fluide et performant.

---

##  Fonctionnalités Implémentées (Épic 1)

* **[US 1.1] Fil d'actualité dynamique (`/feed`) :** Une page d'accueil qui récupère et affiche l'ensemble des publications de la communauté, triées automatiquement de la plus récente à la plus ancienne.
* **[US 1.2] Profilage complet des auteurs :** Affichage transparent des métadonnées professionnelles de chaque auteur (Nom, Headline, Entreprise, Avatar) directement sur chaque post grâce à la puissance des relations Eloquent.
* **Héritage de Layouts Blade (DRY) :** Utilisation d'un système d'héritage de layouts parents (`layouts/app.blade.php`) contenant une barre de navigation supérieure moderne (style LinkedIn) pour éviter toute redondance de code HTML.
* **Gestion des états vides (`@forelse`) :** Le fil d'actualité anticipe l'absence de données grâce à la structure `@forelse` de Blade, affichant un message propre et ergonomique si aucun post n'existe.

---

## Architecture Technique & Base de données

L'application repose sur deux entités interconnectées avec une intégrité référentielle stricte :
* **User (Utilisateur) :** Possède plusieurs `Posts` (Relation `hasMany()` dans le modèle `User`).
* **Post (Publication) :** Appartient à un seul `User` (Relation `belongsTo()` dans le modèle `Post`). En cas de suppression d'un compte utilisateur, l'ensemble de ses publications est supprimé automatiquement grâce à la contrainte d'intégrité de la base de données (`onDelete('cascade')`).

###  Structure Clé du Projet Manipulée :
```text
├── app/
│   ├── Http/Controllers/
│   │   └── PostController.php    # Récupère les posts et orchestre la vue
│   └── Models/
│       ├── Post.php              # Gère la relation inverse (BelongsTo User)
│       └── User.php              # Gère la relation (HasMany Posts)
├── database/
│   └── migrations/
│       ├── 2014_10_12_000000_create_users_table.php  # Adaptée avec headline, company, image_url
│       └── 2026_06_19_000000_create_posts_table.php  # Clé étrangère et contenu du post
├── routes/
│   └── web.php                   # Définition propre de la route /feed (Zéro logique métier)
└── resources/
    └── views/
        ├── feed.blade.php        # Vue principale du fil d'actualité (Hérite du layout)
        └── layouts/
            └── app.blade.php     # Structure HTML globale (Navbar moderne & fonts)


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
