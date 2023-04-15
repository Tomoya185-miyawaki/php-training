DC := @docker-compose

.PHONY: up
up:
	$(DC) up

.PHONY: upd
upd:
	$(DC) up -d

.PHONY: build
build:
	$(DC) build

.PHONY: down
down:
	$(DC) down

.PHONY: php
php:
	$(DC) exec php bash

.PHONY: nginx
nginx:
	$(DC) exec nginx bash

.PHONY: db
db:
	$(DC) exec db bash -c 'mysql -u $$MYSQL_USER -p$$MYSQL_PASSWORD $$MYSQL_DATABASE'