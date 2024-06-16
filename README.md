# Webunion
[Desc]

## Project Installation
1. Clone the repository 
```shell
git clone https://github.com/TNAlthea/webunion.git
```

2. Switch to the repo folder 
```shell
cd webunion
```

3. Install all the dependencies using composer
```shell
composer install
```
```shell
composer require tymon/jwt-auth
```

4. Publish config
```shell
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
```

5. Generate secret key
```shell
php artisan jwt:secret
```

6. Run the database migrations (Set the database connection in .env before migrating)
```shell
php artisan migrate
```

7. Seed the database 
```shell
php artisan db:seed
```

8. Start the local development server 
```shell
php artisan serve
```


