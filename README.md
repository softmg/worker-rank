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
1. User (existed)
2. Tag
3. Project
4. Task
5. Rank

```bash
php artisan make:model -mr Tag
```
Edit migration file and run

```bash
php artisan migrate
```

+ seeder/factories

## Phpstorm
Настройки проекта:
1. Отметить app как директорию source
2. Исключить vendor и инициализировать composer
3. Сделать public "Resources root" директорией
4. Настроить базу через вкладку database

Выучить вспомогательные shortcuts:
```
Alt+1 (Cmd+1) - убрать панель Project слева
Для терминала и Version Control сделать шорткаты или использовать готовые
Shift+F6 - переименовать файл и переменную в редакторе
Tab/Shift+Tab - табуляция
Cmd+Alt+L - форматировать код
```

# Lesson 2.1

phpunit тесты (настройка и прогон для добавления тасков, проектов и тегов)
