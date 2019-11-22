# Laravel-Docker plug-and-play
This is a quick plug-and-play setup for your `Laravel-Docker` projects

Comes with:
- web-app: `Laravel/PHP-7.2`
- web-server: `Nginx:alpine`
- database: `Mysql-5.7.22`

## Installatioin
- `git clone https://github.com/mayankpatel1004/laravel_cli.git`
- `cd laravel_cli`
- `docker-compose up -d`
- `docker-compose exec app composer install`
- `cp .env.example .env`
- `Update database configuration as below in .env file`
	DB_CONNECTION=mysql
	DB_HOST=db
	DB_PORT=3306
	DB_DATABASE=laravel
	DB_USERNAME=root
	DB_PASSWORD=root
- `composer update`
- `docker-compose exec app php artisan key:generate`
- `Execute Command : php artisan config:cache`
- `Execute Command : php artisan cache:clear`
- `Execute Command : php artisan config:clear`
- `docker-compose down` `(To down application)`
- `docker-compose up -d`

Now that all containers are up, we can add `127.0.0.1 project.local` to our `/etc/hosts` file

Execute http://127.0.0.1

## How to get CSV data via Command Line Interface?
Execute "php csv_cli.php" into command line
"cli.csv" Will placed on root of directory

## Questions and Improvements
For any question or emprovement please send an e-mail to Mayank Patel [mayank.patel104@gmail.com](mailto:mayank.patel104@gmail.com).