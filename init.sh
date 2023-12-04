cp ./back-end/.env.example ./back-end/.env

docker-compose up -d --build

docker exec ddd_php-fpm chmod -R 777 storage/ /bin/bash
docker exec ddd_php-fpm php artisan key:generate

docker exec ddd_php-fpm php artisan migrate --seed