install: # установить зависимости
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

validate:
	composer validate

lint: # запуск линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin
