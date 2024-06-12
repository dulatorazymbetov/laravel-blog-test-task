<p><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt=""></a></p>

<p>
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Laravel Blog
### Тестовое задание

## Установка проекта

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
``` 

## Запуск проекта

```
sail up -d 

or

php artisan serve
```

```
sail artisan key:generate

or

php artisan key:generate
```

```
sail artisan migrate --seed

or

php artisan migrate --seed
```

```
sail npm install

or

npm install
```

```
sail artisan storage:link

or

php artisan storage:link
```

## Сборка фронта

```
sail npm run build

or

npm run build
```

## Авторизация

### Админ
```
email: admin@example.com
password: admin
```

### Модератор
```
email: moderator@example.com
password: moderator
```
