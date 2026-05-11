# Atividade 3 — View inexistente

## 1. Identificação do erro
O erro retornado pelo Laravel será `View [sobre] not found.`

## 2. Explicação
O método `sobre` do Controller está tentando retornar uma view chamada `sobre` (`return view('sobre');`), mas o arquivo correspondente (`sobre.blade.php`) não existe no diretório `resources/views`.

## 3. Correção
A correção consiste em criar o arquivo `sobre.blade.php` dentro da pasta `resources/views`.

**Arquivo Criado:** `resources/views/sobre.blade.php`
