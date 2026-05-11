# Atividade 5 — Falta de importação do Controller

## 1. Identificação do erro
O erro apresentado será `Target class [PaginaController] does not exist.`

## 2. Explicação
O controller `PaginaController` está sendo referenciado no arquivo de rotas, mas o PHP não sabe onde encontrá-lo porque não houve a declaração `use App\Http\Controllers\PaginaController;` no início do arquivo. O Laravel 8+ usa a sintaxe de classe (`[PaginaController::class, 'contato']`), que exige a importação do namespace.

## 3. Correção
A correção consiste em adicionar a linha `use App\Http\Controllers\PaginaController;` no topo do arquivo `routes/web.php`.

**Arquivo Alterado:** `routes/web.php`
