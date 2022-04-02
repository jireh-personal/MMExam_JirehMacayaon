INSTALLATION -----------------------------

Clone or Download the file.

composer install

cp .env.example .env

php artisan key:generate

Setup a Database in your phpmyadmin

Go to application .ENV file and edit the port, db_name, db_username & db_password

run php artisan migrate or php artisan migrate:fresh --seed

if you run only php artisan migrate please run php artisan db:seed to populate some dummy data maximun of 50 records

php artisan serve


LARAVEL version 9

PHP version 8
