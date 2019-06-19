# Lumen PHP Framework

[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://poser.pugx.org/laravel/lumen-framework/d/total.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/lumen-framework/v/stable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/lumen-framework/v/unstable.svg)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://poser.pugx.org/laravel/lumen-framework/license.svg)](https://packagist.org/packages/laravel/lumen-framework)

# Api REST - OPE

## Sobre

## Coding conventions
* Codigo em ingles
* Comentarios em portugues
* Versionamento com git flow


## Requisitos
* PHP >=7.1
* MySQL 8.0 (`recomendavel`)


## Configuração
```
cd Pasta do projeto
composer install
```

## Execução

```
cd Pasta do projeto
composer install
php -S 127.0.0.1:8000 -t public
```

A aplicaçao estará disponível em `127.0.0.1:8000`.

## Testes
```
Ainda não temos :(
```

## Documentação

### API
```
Ainda não temos :(
```

O arquivo .env para o docker-compose não existe.

## Criar arquivo .env e configurala dessa forma
### Configuracoes para instalcao padrao do MySQL, se voce instalou diferente sinto muito ;)
```
APP_NAME=Lumen
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost
APP_TIMEZONE=UTC

LOG_CHANNEL=stack
LOG_SLACK_WEBHOOK_URL=

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=`nome do banco`
DB_USERNAME=`usuario do banco`
DB_PASSWORD=`senha do banco`

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
```

