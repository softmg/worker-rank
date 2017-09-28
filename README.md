### Worker rank
Rank worker by what they really do

## Lesson 1: Laravel introduction
# Lesson 1.1
1. Install Laravel globally
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

## Home works
Настроить проект и с ветки мастера дойти до ветки lesson-1.1
Настроить проект через vhosts config по url [worker-rank.loc](http://worker-rank.loc)
Настроить phpstorm

Выучить базовые shortcuts для редактора и навигации:
```
Ctrl + W (Cmd + W) - выделить слово, несколько раз выделить большую область
Alt + <- - перемещение на слово
Alt + J (Ctrl + G) - мультикурсорное редактирование
fn + вверх/вниз - для мака пагинация вверх и вниз
Cmd + <-/-> - для в начало, в конец линии
Ctrl + shift + A (Cmd + shift + A) - выполнить экшен
Shift + shift - поиск по проекту
Ctrl + E - недавно редактируемые файлы
Ctrl + Alt + <-/-> - переход по недавно редактированным местам
Ctrl + Alt + T (Cmd + Alt + T) - обрамить текст тегом, скобками
```

Настроить несколько своих shortcut и создать Live Template
