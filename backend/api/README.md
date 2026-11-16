# P2 Full Stack — API

Backend em Laravel para o sistema acadêmico, consumido pelo frontend Next.js em `../frontend`.

## Requisitos

- PHP 8.3 ou superior
- Composer
- Acesso à base MariaDB/MySQL configurada no `.env`

## Executar localmente

Na pasta `backend/api`:

1. Instale as dependências: `composer install`
2. Crie o `.env` a partir do `.env.example`, configure a conexão MariaDB/MySQL e mantenha `SESSION_DRIVER=file`, `CACHE_STORE=file` e `QUEUE_CONNECTION=sync`.
3. Gere a chave: `php artisan key:generate`
4. Quando a conexão estiver conferida, aplique as migrações: `php artisan migrate`
5. Inicie o servidor local: `php artisan serve`

O servidor fica disponível em `http://127.0.0.1:8000`. As rotas HTTP são definidas em `routes/web.php` e as rotas JSON em `routes/api.php`.

Não versione o `.env` nem exponha a porta do banco de dados publicamente. Durante o desenvolvimento, restrinja o acesso da VPS ao IP necessário.
