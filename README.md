# testga
тестовое задание GA. Laravel 5.2
Вывод статей из БД с пагинацией и сортировкой по дате.
Добавление новых статей.
Админка с авторизацией: удаление и одобрение статей для публикации.

1. установите пустой проект:

composer create-project laravel/laravel --prefer-dist

2. Скачайте и скопируйте файлы поверх проекта

3. composer update

4. создайте пустую БД

5. настройте доступ к БД в файле .env:

DB_HOST=localhost

DB_DATABASE= your_database_name

DB_USERNAME= your_database_username

DB_PASSWORD= your_database_password

6. php artisan migrate - создайте таблицы

7. php artisan migrate --seed  - заполните данными

8.Доступ к админке

email: admin@info.ry

password: pass
