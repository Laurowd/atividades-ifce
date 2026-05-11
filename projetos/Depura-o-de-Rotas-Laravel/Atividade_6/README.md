# Atividade 6 — Parâmetro não declarado

## 1. Explicação
O parâmetro `{id}` está definido na rota (`/usuario/{id}`), mas o método `usuario()` no controller não definou nenhum parâmetro para receber esse valor. O Laravel injeta o valor do parâmetro na função, mas se a função não o espera, ele apenas executa (dependendo da versão do PHP pode dar warning ou apenas ignorar), mas o valor não é utilizável dentro do método.

## 2. Correção
Adicionar o parâmetro `$id` na definição do método `usuario` para que ele possa capturar e utilizar o valor passado na URL.

**Arquivo Alterado:** `app/Http/Controllers/PaginaController.php`
