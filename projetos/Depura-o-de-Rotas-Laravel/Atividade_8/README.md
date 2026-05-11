# Atividade 8 — Método HTTP incorreto

## 1. Erro ao acessar
Ao tentar acessar `/servicos` pelo navegador (que usa GET por padrão), o erro será `The POST method is not supported for this route. Supported methods: GET, HEAD.`

## 2. Explicação
A rota foi definida com `Route::post(...)`, o que significa que ela só aceita requisições do tipo POST. Navegadores, ao digitar uma URL na barra de endereço, enviam requisições do tipo GET.

## 3. Correção
Para que a rota seja acessível via navegador através da barra de endereços, o método deve ser alterado para `Route::get(...)` ou `Route::any(...)` (se a intenção for aceitar ambos, mas GET é o mais correto para exibição).

**Arquivo Alterado:** `routes/web.php`
