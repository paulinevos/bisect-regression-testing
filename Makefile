up:
	docker-compose up -d
	docker exec -it trogdor composer install
	@echo "🎉 Trogdor ready! Try running it with \`make run\`."

down:
	docker-compose down

run:
	docker exec -i trogdor php ./app/run.php

test:
	docker exec -i trogdor vendor/bin/phpunit app/tests