# Atividade 1 — Controller inexistente

## 1. Identificação do erro
O erro apresentado é `Target class [PaginaController] does not exist.` ou similar, indicando que a classe `PaginaController` referenciada na rota não foi encontrada.

## 2. Explicação
O erro ocorre porque o arquivo do Controller `PaginaController.php` ainda não foi criado ou não está no namespace correto, e a rota está tentando instanciar uma classe que o autoloader do Laravel não consegue localizar.

## 3. Correção
A correção consiste em criar o arquivo do Controller `PaginaController.php` no diretório `app/Http/Controllers`.

**Arquivo Criado:** `app/Http/Controllers/PaginaController.php`
