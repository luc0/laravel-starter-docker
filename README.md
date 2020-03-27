# Laravel Base

| Laravel | PHP | Postgres |
| ------------- | ------------- |  ------------- |
 ^6.2 | 7.4 | 11.6 |

Scalable structure:
- Repositories
- Services
- Docker Containers (based on [this repo](https://github.com/aschmelyun/docker-compose-laravel))
	nginx, postgres, php, npm, composer, artisan
	
### Install

```
docker-compose up -d
docker-compose run --rm composer install
docker-compose run --rm artisan key:generate
php artisan vendor:publish --provider="Torann\LaravelRepository\RepositoryServiceProvider" --tag=config
```
```
copy DB credentials in .env with docker-compose.yml
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