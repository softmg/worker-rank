### Worker rank
Rank worker by what they really do

## Lesson 1: Laravel introduction
# Lesson 1.1
1. Install Laravel globally

Basic from video [laracasts](https://laracasts.com/series/laravel-from-scratch-2017)

Set alias to composer and install global Laravel
```bash
composer global require "laravel/installer"
```

```bash
laravel new worker-rank
```

```bash
php artisan key:generate
```

Create database and edit .env

2. Basic routes and views

create `about.blade.php`
pass data to view

# Lesson 1.2
Create model 
1. User
2. Tag
3. Project
4. Task
5. Rank

```bash
php artisan make:migration create_workers_table --create=workers
```
Edit migration file and run

```bash
php artisan migrate
```
