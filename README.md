# php, fpm, nginx, mysql in docker-compose

a local dev setup for a php/mysql application

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

---
this is largely based on the instructions in this article: http://geekyplatypus.com/dockerise-your-php-application-with-nginx-and-php7-fpm/
