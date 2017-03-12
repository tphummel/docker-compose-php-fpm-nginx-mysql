# php, fpm, nginx, mysql in docker-compose

a local dev setup for a php/mysql application in docker-compose

### setup
```
docker-compose up
```

### php app
browse http://127.0.0.1/index.php

![php app index](/index.php.png?raw=true "php app index")

### php app with mysql backend
browse http://127.0.0.1/db.php

![php app db](/db.php.png?raw=true "php app db")

### notes

this configuration works as of 2017-03-12 using these versions:
```
➜  docker-compose-php-fpm-nginx-mysql git:(master) docker --version
Docker version 17.03.0-ce, build 60ccb22
➜  docker-compose-php-fpm-nginx-mysql git:(master) docker-compose --version
docker-compose version 1.11.2, build dfed245
```

this is largely based on the instructions in this article: http://geekyplatypus.com/dockerise-your-php-application-with-nginx-and-php7-fpm/
