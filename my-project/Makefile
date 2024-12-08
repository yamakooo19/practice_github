.PHONY: init down restart logs

# プロジェクトの初期化とDockerコンテナの起動
init:
	docker-compose up -d
	docker-compose exec app composer install
	docker-compose exec app cp .env.example .env
	docker-compose exec app php artisan key:generate
	docker-compose exec app chmod -R 777 storage bootstrap/cache
	docker-compose exec app php artisan migrate
	@echo "初期化が完了しました！"

app:
	docker-compose exec app bash

# Dockerコンテナの停止
down:
	docker-compose down -v

# コンテナの再起動
restart:
	docker-compose restart

# ログの表示
logs:
	docker-compose logs -f
