# Laravel Migrations - Laboratório

## Estrutura de Pastas

*   **[lab_migrations/database/migrations](lab_migrations/database/migrations)**: Contém as migrations das Atividades 1 a 10.
*   **[biblioteca_lab/database/migrations](biblioteca_lab/database/migrations)**: Contém as migrations da Atividade Prática 1 (Sistema de Biblioteca).
*   **[sistema_academico/database/migrations](sistema_academico/database/migrations)**: Contém as migrations da Atividade Prática 2 (Sistema Acadêmico).
*   **[gestao_projetos/database/migrations](gestao_projetos/database/migrations)**: Contém as migrations da Atividade Prática Avançada (Gestão de Projetos).

## Como utilizar

Se você estiver em um ambiente local com PHP, Composer e MySQL instalados:

1.  Crie os projetos Laravel ou copie as migrations geradas para a pasta `database/migrations` dos seus projetos.
2.  Configure o arquivo `.env` de cada projeto com as credenciais do banco.
3.  Execute os comandos solicitados:

### Comandos Úteis (Activity 1 & 8)

*   Rodar migrations: `php artisan migrate`
*   Verificar status: `php artisan migrate:status`
*   Reverter última migration: `php artisan migrate:rollback`
*   Reverter tudo e rodar novamente: `php artisan migrate:refresh`

### Detalhes de Implementação

*   **Atividade 5 (Uso de foreignId)**: Implementado no arquivo `2024_02_14_000003_create_produtos_table.php` usando `foreignId()->constrained()->onDelete('cascade')`.
*   **Atividade 14.7 (Prioridade)**: O campo `prioridade` foi adicionado diretamente no arquivo `create_tarefas_table.php` para refletir o estado "Alterado" solicitado no roteiro final, garantindo a integridade ao gerar o banco final.

## Correção de Erros (Atividade 10)

Para a atividade de diagnóstico, um erro comum em migrations é tentar criar uma chave estrangeira referenciando uma tabela que ainda não foi criada (ordem incorreta de migrations) ou tipos de dados incompatíveis (ex: referenciar um `bigIncrements` com um `integer` simples em vez de `unsignedBigInteger`).

As migrations geradas aqui já seguem a ordem cronológica correta (prefixo de data/hora) e usam `foreignId` que garante o tipo correto.
