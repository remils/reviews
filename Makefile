SHELL=/bin/bash -e

.DEFAULT_GOAL := help

DOCKER_COMPOSE := 'docker-compose -f ./docker-compose.yml --env-file ./.env'

-include .env

help: ## This help
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_-]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

build: ## Build local
	@'${DOCKER_COMPOSE}' build

up: ## Up local
	@'${DOCKER_COMPOSE}' up -d

down: ## Down local
	@'${DOCKER_COMPOSE}' down

bash: ## Bash local
	@'${DOCKER_COMPOSE}' exec --user www-data php bash