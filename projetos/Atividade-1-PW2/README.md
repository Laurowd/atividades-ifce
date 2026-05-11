# Atividade Prática - Cards de Perfil

Projeto voltado para o desenvolvimento Front-end interativo com HTML, CSS e JavaScript puros (sem uso de banco de dados, bibliotecas externas ou frameworks complexos).

## Estrutura do Projeto
- `index.html`: Marcação semântica principal e importação de fontes do Google (família *Outfit*).
- `style.css`: Estilização das dezenas de classes, temas (modo claro e escuro), layouts (usando CSS Grid para os cards e Flexbox no header) e design *Glassmorphism* (efeitos de desfoque/vidro para os cards).
- `script.js`: Arquivo contendo dados fictícios dos usuários, criação dinâmica do DOM via JavaScript (para inserir os cards na tela), além do controle de estados dos painéis e interações.

## Funcionalidades
1. **Listagem e Renderização Dinâmica**: Uso da estrutura de dados via array/objetos em JS para renderizar os cards em uma grid flexível perfeitamente adaptável para visualizações *Mobile* e *Desktop*.
2. **Modo Claro / Escuro (Theme Toggle)**: Alternância total de identidade visual, cores base, fundo, luminosidade de cards e contraste dos cartões de perfil.
3. **Mudar a Cor dos Cards (Theme Color)**: Alterna as cores de fundo de todos os cards ativamente renderizados entre estilos pré-programados usando substituição de variáveis nativas CSS e toggle dinâmico pelo JavaScript.
4. **Follow / Unfollow (Seguir e Deixar de Seguir)**: Atualização automática dos textos do botão simultaneamente à somatória realista do contador de seguidores. Se destaca também com a alteração estético-visual de botão azul para verde de status confirmado de sucesso.
5. **Fazer Upload / Atualizar Avatar de Perfil**: Adição fluida de seleção do computador: cada perfil suporta uma troca exclusiva e assíncrona baseada por um input escondido com manipulação por URLs Locais Seguras criadas no lado do cliente.
6. **Card Expandido / Efeito Foco Centralizado (Pop-up dinâmico)**: Interatividade implementada onde o usuário, ao clicar no corpo principal do card, faz o ambiente da tela escurecer via *Backdrop* e o Card pairar em tamanho maior ao centro da tela. Para sair desse foco basta clicar fora na zona de sombra ou no botão superior 'X'.

## Tecnologias e Implementações Realizadas
- **HTML5**: Semântico.
- **CSS3 Vanilla**: Moderno (`flexbox`, `grid`, custom properties `--var`, `backdrop-filter`, `transform`, `box-shadow`, `transitions`, `@media` query para design *responsivo*).
- **JavaScript Moderno (ES6+)**: `forEach`, manipulação do `DOM`, Event Listeners, `createObjectURL` para manipulação em tempo real da seleção de arquivos via API nativa de upload do seu próprio computador de maneira restrita.
