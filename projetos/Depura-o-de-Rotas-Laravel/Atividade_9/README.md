# Atividade 9 — View em diretório incorreto

## 1. Explicação
O controller está chamando `view('sobre')`, o que instrui o Laravel a procurar o arquivo `resources/views/sobre.blade.php` (na raiz da pasta views). Porém, a view foi criada em um subdiretório: `resources/views/paginas/sobre.blade.php`.

## 2. Correção
A chamada da view deve incluir o caminho relativo dentro da pasta `views`, usando a notação de ponto. Deve-se alterar o retorno para `view('paginas.sobre')`.

**Arquivo Alterado:** `app/Http/Controllers/PaginaController.php` (simulado, ou routes/web.php se fosse closure)
