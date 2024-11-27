## Installation

1. Clone The repository

2. start xamp server

3. run:
```sh
    composer update
    php artisan migrate:fresh --seed
```

4. create a database named ghorsheba (if not created)

5. rename the file .env.example to .env

6. run: php artisan serve

## With docker

1. Clone the repository
2. Setup the docker images
```sh
docker compose up
```
3. Install dependencies
```sh
docker compose exec app composer install
```
4. Setup APP_KEY if not present in .env
```sh
docker compose exec app php artisan key:generate
```
4. Run migration

```sh
docker compose exec app php artisan migrate:fresh --seed
```
5. Open
The website: [ghorsheba](http://localhost:8081) 
Php Myadmin: [phpmyadmin](http://localhost:8082)
