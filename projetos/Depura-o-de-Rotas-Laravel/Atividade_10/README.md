# Atividade 10 — Rota duplicada

## 1. Qual rota será executada?
A rota que retorna "Blog 2" será executada.

## 2. Justificativa
O Laravel armazena as rotas em uma coleção onde a chave pode ser considerada a URI + Método ou a ordem de definição. Quando há definições duplicadas para a mesma URI e Método (como GET /blog), a última definição sobrescreve ou tem precedência sobre a primeira na hora de resolver a rota final.

## 3. Solução
As rotas devem ter URIs únicas ou métodos diferentes se tiverem o mesmo propósito. Se a intenção era ter duas páginas diferentes, deve-se alterar a URI de uma delas (ex: `/blog` e `/blog-detalhe` ou `/blog/2`).

**Correção sugerida:**

```php
Route::get('/blog', function () {
    return "Blog Principal";
});

Route::get('/blog/detalhes', function () {
    return "Detalhes do Blog";
});
```

**Arquivo Alterado:** `routes/web.php`
