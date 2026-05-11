# Atividade 2 — Método inexistente no controller

## 1. Identificação do erro
Ao acessar `/sobre`, o erro apresentado será algo como `Method App\Http\Controllers\PaginaController::sobre does not exist.`

## 2. Explicação
O erro ocorre porque o Controller `PaginaController` existe, mas não possui o método público `sobre` que foi definido na rota como a ação a ser executada.

## 3. Correção
A correção consiste em adicionar o método `sobre` dentro da classe `PaginaController`.

**Arquivo Alterado:** `app/Http/Controllers/PaginaController.php`
