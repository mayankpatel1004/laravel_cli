# Laravel-Docker plug-and-play

This is a quick plug-and-play setup for your `Laravel-Docker` projects

Comes with:
- web-app: `Laravel/PHP-7.2`
- web-server: `Nginx:alpine`
- database: `Mysql-5.7.22`

## Installatioin
- `git clone https://github.com/mayankpatel1004/laravel_cli.git`
- `cd laravel-docker`
- `docker-compose up -d`
- `docker-compose exec app composer install`
- `cp .env.example .env`
- `docker-compose exec app php artisan key:generate`

Now that all containers are up, we can add `127.0.0.1 project.local` to our `/etc/hosts` file

Execute http://127.0.0.1

## Questions and Improvements
For any question or emprovement please send an e-mail to Mayank Patel [mayank.patel104@gmail.com](mailto:mayank.patel104@gmail.com).