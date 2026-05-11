# Atividade 4 — Erro de nome de view

## 1. Identificação do erro
Ao acessar a rota, o erro `View [sobre] not found.` persiste, mesmo com o arquivo `Sobre.blade.php` criado.

## 2. Explicação
O sistema de arquivos de muitos servidores (como Linux) é case-sensitive (diferencia maiúsculas de minúsculas). O Laravel procura por `sobre.blade.php` (tudo minúsculo) conforme passado na função `view('sobre')`, mas o arquivo foi criado com "S" maiúsculo (`Sobre.blade.php`).

## 3. Correção
A correção consiste em renomear o arquivo da view para `sobre.blade.php` (tudo minúsculo) para corresponder ao nome chamado no controller.

**Arquivo Renomeado:** `resources/views/sobre.blade.php`
