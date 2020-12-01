# Laravel Base

| Laravel | PHP | Mysql |
| ------------- | ------------- |  ------------- |
 ^8.0 | 7.4 | :white_check_mark: |

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

    App
        Http
            Controllers (or Handlers)
            Middleware
            Requests
            Util (helpers)
            ViewComposers/Presenters
        Contracts (contracts & traits)
        Console
        Exceptions
        Transformers
        Support (when implements external functionality)

    Src (business logic)
        Models
        Enumerables (ValueObjects)
        Repositories
        Services
        Traits
