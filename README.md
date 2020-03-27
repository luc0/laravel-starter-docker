# Laravel Base

| Laravel | PHP | Postgres |
| ------------- | ------------- |  ------------- |
 ^6.2 | 7.4 | 11.6 |

Features:
- Laravel 6
- Structure: 
    - Entities
    - Enumerables
	- Repositories
	- Services
- Docker Containers (based on [this repo](https://github.com/aschmelyun/docker-compose-laravel))
	nginx, postgres, php, npm, composer, artisan
	
### Install

```
// Docker build containers
docker-compose up -d

// Composer install
docker-compose run --rm composer install
```

```
// Keys
docker-compose run --rm artisan key:generate
```

publish repository package
```
php artisan vendor:publish --provider="Torann\LaravelRepository\RepositoryServiceProvider" --tag=config
```

```
// Update DB credentials in .env with docker-compose.yml
```

### Docker Usage
composer, artisan, npm: [docs](https://github.com/aschmelyun/docker-compose-laravel)

```
// get into container
docker exec -it php sh
```

### Structure

    app
        http
            Transformers
            Controllers
            Middleware
            Payloads
            Requests
            Util (helpers)
            ViewComposers

    src (business logic)
        Entities
        Enumerables (ValueObjects)
        Repositories
        Services

### Optional
Request: validation, data manipulation.

Transformer: translation, formatting data.

Repository: raw query

---
### Troubleshooting

#### #1
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

#### #2
```
MYSQL CONTAINER: /run/mysqld/mysqld.sock (esto puede ser el sock)
```
https://stackoverflow.com/questions/4219970/warning-mysql-connect-2002-no-such-file-or-directory-trying-to-connect-vi