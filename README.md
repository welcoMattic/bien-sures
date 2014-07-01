Bien Sûres
===

## Requirements

Require : composer https://getcomposer.org/


## Install project

At project root :

`php composer.phar install`

`chown www-data -R app/storage`

(www-data is apache user of your OS, it could change between OS X and Linux)

Create a database called bien-sure in your MySQL and execute :

`php artisan migrate --seed`

## Vhost

Create a vhost called `bien-sures.dev` with public/ directory as target

## Configure database.php for local environment 

Edit app/config/local/database.php
Set your local MySQL config here

