# Seed of docker image linked with mariadb

## Prerequisites

- docker-compose ( included in　[Docker Desktop](https://www.docker.com/products/docker-desktop/) )
- git ( or download zip from https://github.com/MichinobuMaeda/docker-php-mariadb-seed )

## Usage

```
$ git clone git@github.com:MichinobuMaeda/docker-php-mariadb-seed.git
$ cd docker-php-mariadb-seed
$ docker-compose up

^C

$ docker-compose start
$ docker-compose stop
$ docker-compose down
```

## Directories and files

```
+--- volumes            # created automatically
    +--- db             # --> db:/var/lib/mysql
    +--- php            # --> php:/var/www/html
+--- php                # customised image
        Dockerfile
        php-custom.ini
    docker-compose.yml
    README.md           # this file
```
