# Laravel Stratosphere starter kit

With this, Your project will ascend to the stratosphere

| Version | Laravel | PHP | Mysql |
| ------------- | ------------- | ------------- |  ------------- |
| 1.0 | 6.2 | 7.2 | 5.7.22 |

Features:
- Laravel 6
- Docker (PHP 7.2, Mysql)
- Structure: 
  - Services
  - Repositories
  - Value Objects
  - Enums

DockerFile based on:
https://github.com/aschmelyun/docker-compose-laravel

Some composer.json ideas:
https://github.com/darryldecode/laravel-starter-kit/blob/master/composer.json

### Help
1. Enter container
```
docker-compose exec php sh
or
docker exec -it php sh
```

2.
```
php artisan key:generate.
```

### Troubleshooting

tirarlos afuera, aunque quizas haga falta hacerlo dentro del container
```
sudo chgrp -R www-data storage bootstrap/cache
sudo chmod -R ug+rwx storage bootstrap/cache
```

---
"ERROR: for nginx  Cannot start service nginx: OCI runtime create failed: container_linux.go:345:" ...

https://github.com/docker/compose/issues/4039#issuecomment-276037199

![stratosphere](https://i.ytimg.com/vi/2Z7x4FOSfBk/hqdefault.jpg)
