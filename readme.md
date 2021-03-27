## Выполнил: Карачёв Игорь

## Описание проекта:
Todo list на фреймворке Laravel.
## Подготовительные действия:

1. Клонировать репозиторий на ваш компьютер командой git clone https://github.com/eternal097/todo.git;
2. Необходимо предварительно сохдать базу данных и указать парамерты подключения к бд в файле .env, копировав файл
.env.example без расширения .example.
3. Из корня папки проекта в терминале выполнить следующие команды:
- composer install;
- composer update;
- php artisan key:generate;
- php artisan migrate --seed;

## Как запустить проект:

Из корня папки проекта в терминале выполнить php artisan serve и перейти в браузере по полученному адресу в терминале.
