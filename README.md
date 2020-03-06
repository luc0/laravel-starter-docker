# Laravel Stratosphere starter kit

With this, Your project will ascend to the stratosphere

| Version | Laravel | PHP | Mysql |
| ------------- | ------------- | ------------- |  ------------- |
| 1.0 | ^6.2 | 7.2 | 5.7.22 |

Features:
- Laravel 6
- Docker Containers (based on [this repo](https://github.com/aschmelyun/docker-compose-laravel))
	- nginx - :8080
	- mysql - :3306
	- php - :9000
	- npm
	- composer
	- artisan
- Structure: 
	- Services
	- Repositories
	- Value Objects
	- Enums

### Install

Inside container.

1. Keys
```
php artisan key:generate.
```

2. Permissions
```
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```

### Docker Usage

Three new containers have been added that handle Composer, NPM, and Artisan commands without having to have these platforms installed on your local computer. Use the following command templates from your project root, modifiying them to fit your particular use case:
```
docker-compose run --rm composer install
docker-compose run --rm npm run dev
docker-compose run --rm artisan migrate
```
([see more here](https://github.com/aschmelyun/docker-compose-laravel))

```
docker-compose exec php sh
```
or
```
docker exec -it php sh
```

### Structure

app
	http
		Transformers
		Controllers ✓
		Middleware ✓
		Payloads
		Requests
		Util (helpers)
		ViewComposers

src (business logic)
	Entities
	Enumerables (ValueObjects)
	Repositories
	Services

Flow:
Controller -> Service -> Repository

### Troubleshooting

```
"ERROR: for nginx  Cannot start service nginx: OCI runtime create failed: container_linux.go:345:" ...
```

https://github.com/docker/compose/issues/4039#issuecomment-276037199

Change database name, you must rebuild in this way. the following command to recreate anonymous volumes:
```
docker-compose up -d --build --force-recreate --renew-anon-volumes db
```

modify php.ini
```
docker exec -it php vi /usr/local/etc/php/php.ini-development
```
# MYSQL CONTAINER: /run/mysqld/mysqld.sock (esto puede ser el sock)
# https://stackoverflow.com/questions/4219970/warning-mysql-connect-2002-no-such-file-or-directory-trying-to-connect-vi

### TODO

- Update composer.json
- Structure

Some ideas:
Repo w/ search: https://lyften.com/projects/laravel-repository/doc/searching.html
https://github.com/mtolhuys/laravel-schematics
composer.json: https://github.com/darryldecode/laravel-starter-kit/blob/master/composer.json
Diagram your models: https://github.com/mtolhuys/laravel-schematics

Also:
SPA: https://inertiajs.com/


---
![stratosphere](https://i.ytimg.com/vi/2Z7x4FOSfBk/hqdefault.jpg)

