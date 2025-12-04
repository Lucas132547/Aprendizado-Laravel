🚀 Tecnologias Utilizadas

PHP

Laravel

Blade (Laravel Blade Templates)

XAMPP (Apache + MySQL + PHP)

📌 Sobre o Projeto

Este projeto foi desenvolvido utilizando o framework Laravel, com templates Blade, rodando em ambiente local via XAMPP.
O objetivo do sistema é: descreva rapidamente aqui o propósito do seu projeto.

🛠️ Como Rodar o Projeto em um Novo Computador
1. Requisitos

Antes de tudo, instale:

XAMPP (PHP 8+ recomendado)

Composer (gerenciador de dependências do PHP)

Git (opcional, para clonar o projeto)

2. Clonar o Repositório
git clone https://github.com/SEU_USUARIO/SEU_REPOSITORIO.git
cd SEU_REPOSITORIO

3. Instalar Dependências do Laravel

No terminal, dentro da pasta do projeto, rode:

composer install

4. Criar o Arquivo .env

Duplique o arquivo .env.example e renomeie para .env:

cp .env.example .env


Depois, gere a chave da aplicação:

php artisan key:generate

5. Configurar Banco de Dados

Abra o arquivo .env e ajuste as linhas:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nome_do_banco
DB_USERNAME=root
DB_PASSWORD=


No phpMyAdmin, crie o banco de dados com o nome que você colocou.

6. Rodar Migrações (opcional)

Se estiver usando migrations:

php artisan migrate

7. Iniciar o Servidor Laravel

Rodar o servidor local:

php artisan serve


O projeto ficará disponível em:

http://127.0.0.1:8000
