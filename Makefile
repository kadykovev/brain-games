install: # установить зависимости
	composer install

brain-games:
	./bin/brain-games

brain-even:
	./bin/brain-even

brain-calc:
	./bin/brain-calc

validate:
	composer validate

lint: # запуск линтера
	composer exec --verbose phpcs -- --standard=PSR12 src bin
