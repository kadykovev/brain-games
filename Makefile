install: # установить зависимости
	composer install

brain-games: # запуск игры
	./bin/brain-games

validate:
	composer validate

lint: # запуск линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin
