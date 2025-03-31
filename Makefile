.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-php-ohce .

build-container:
	docker run -dt --name docker-php-ohce -v .:/540/Ohce docker-php-ohce
	docker exec docker-php-ohce composer install

start:
	docker start docker-php-ohce

test: start
	docker exec docker-php-ohce ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it docker-php-ohce /bin/bash

stop:
	docker stop docker-php-ohce

clean: stop
	docker rm docker-php-ohce
	rm -rf vendor
