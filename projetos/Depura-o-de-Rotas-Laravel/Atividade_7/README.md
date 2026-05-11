# Atividade 7 — Ordem incorreta de rotas

## 1. Teste da rota
Ao acessar `/produto/novo`, o resultado observado é "Produto novo" (interpretando "novo" como o ID) em vez de "Novo Produto".

## 2. Explicação
No Laravel, as rotas são processadas na ordem em que são definidas. A rota `/produto/{id}` captura qualquer coisa que venha depois de `/produto/`. Como "novo" é uma string válida, a primeira rota (`/produto/{id}`) intercepta a requisição antes que a rota `/produto/novo` tenha a chance de ser verificada.

## 3. Correção
A correção consiste em inverter a ordem das rotas, colocando as rotas específicas (estáticas, come `/produto/novo`) ANTES das rotas genéricas (dinâmicas, como `/produto/{id}`).

**Arquivo Alterado:** `routes/web.php`
