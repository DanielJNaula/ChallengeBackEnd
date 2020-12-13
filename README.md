## Ejecución con Docker
```
docker-compose up -d
```
## Ejecución con migraciones y seeder en el contenedor docker
```
docker-compose exec php php /var/www/html/artisan  migrate --seed
```

## Permisos en el contenedor de docker
```
chown -R www-data: /var/www/html
```