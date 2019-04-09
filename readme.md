# Plataforma de Recrutamento

## Sobre
Uma plataforma para envio e gerenciamento de currículos.

### Tecnologias
  * Laravel 5.6
  * PHP 7.1
  * Material Design Lite
  * MongoDB

## Instalação
> Configure o seu .env

> Entre no diretório do projeto e execute os seguintes comandos
```
  - $ npm install
  - $ composer install
  - $ yarn run dev
  - $ yarn watch
```
## Configurações
* Logo: As logos devem ser colocadas em public/images, com o mesmo nome ou com outro e nesse caso lembre-se de alterar também nos locais onde elas são chamadas.
* Áreas de Interesse: Abra o terminal e execute os comandos:
```
 1 - php artisan tinker
 2 - $office = new App\Office
 3 - $office->name = 'Área de interesse'
 4 - $office->is_office = true
 5 - $office->save()
 ```
* Usuário Admin: Abra o terminal e execute os comandos:
```
 1 - php artisan tinker
 2 - $user = new App\User
 3 - $user->name = 'Nome do usuário'
 4 - $user->email = 'email_do_usuário@email.com.br'
 5 - $user->password = 'senha'
 5 - $user->save()
```
## Execução do Container

* Construa o container da aplicação com o Docker Compose, utilizando o seguinte comando:
```
 docker-compose build
```
* Após a construção do container, já podemos iniciar a execução:
```
 docker-compose up -d
```
* Crie o arquivo .env, copiando o aquivo .env.example e altere as seguintes informações:
```
DB_CONNECTION=mongodb
DB_HOST=10.0.0.12
DB_PORT=27017
DB_DATABASE=recruitment-platform-2019-03
DB_USERNAME=
DB_PASSWORD=
```
* A seguir, é necessário entrar como bash e gerar a chave de aplicação:
```
docker-compose exec web bash
php artisan key:g
```
* Libere as permissões de grupo para as pastas storage e vendor:
```
chown www-data storage vendor -R
```
* Ainda como bash, atualize o composer:
```
composer update
```
* Por fim, instale as dependências necessárias para a execução da aplicação e construa a aplicação:
```
npm install
npm run watch
```
* 
Você pode testar se o container está funcionando, acessando o caminho:
```
 localhost:8000
```