**1. Cadastro de Usuários**
```bash
sudo useradd -m alice
sudo useradd -m bob
sudo useradd -m carlos
sudo useradd -m daniel
sudo useradd -m erica
```

**2. Criação dos Diretórios**
```bash
mkdir ~/producao ~/rh ~/financeiro ~/ti
```

**3. Cadastro de Grupos**
```bash
sudo groupadd funcionarios
sudo groupadd gerentes
sudo groupadd informatica
```

**4. Adição de Usuários aos Grupos**
```bash
sudo usermod -aG funcionarios alice
sudo usermod -aG funcionarios daniel
sudo usermod -aG funcionarios erica
sudo usermod -aG gerentes bob
sudo usermod -aG gerentes carlos
sudo usermod -aG informatica carlos
sudo usermod -aG informatica alice
```

**5. Alteração de Dono e Grupo dos Diretórios**
```bash
sudo chown bob:funcionarios ~/producao
sudo chown erica:gerentes ~/rh
sudo chown bob:gerentes ~/financeiro
sudo chown carlos:informatica ~/ti
```

**6. Alteração de Permissões (Modo Octal e Literal)**

**producao**
```bash
chmod 474 ~/producao
chmod u=r,g=rwx,o=r ~/producao
```

**rh**
```bash
chmod 070 ~/rh
chmod u=,g=rwx,o= ~/rh
```

**financeiro**
```bash
chmod 430 ~/financeiro
chmod u=r,g=wx,o= ~/financeiro
```

**ti**
```bash
chmod 740 ~/ti
chmod u=rwx,g=r,o= ~/ti
```

**7. Análise de Permissões de Arquivos e Diretórios (Figura 1)**

**a) Quais os nomes dos diretórios contidos nessa relação? Qual o nome dos arquivos contidos nesta relação?**
*   Diretórios: pgms, teste1, teste2 e Faturamento.
*   Arquivos: Controle, mbox, exemplo e Linux.

**b) Existe algum usuário do mesmo grupo de Rui? Caso positivo, qual?**
Sim. Pedro e Tiago (grupo Contab).

**c) Qual o tamanho do arquivo Controle?**
1565 bytes.

**d) Quais as permissões de acesso que os usuários do mesmo grupo de João possuem para acessar o arquivo Controle?**
Leitura e gravação (rw-).

**e) Eu sou do grupo do usuário Pedro, que permissões tenho com relação ao arquivo exemplo?**
Leitura e execução (r-x).

**f) Diga o comando completo para permitir que os usuários do mesmo grupo de Rui possam ler e gravar, mas não possam executar o arquivo Linux.**
```bash
chmod g=rw Linux
```

**g) Qual o código octal para a permissão de acesso do arquivo exemplo.**
755

**h) Qual o código literal para a permissão de acesso do arquivo exemplo.**
u=rwx,g=rx,o=rx

**i) Altere o dono do arquivo Linux para Rui.**
```bash
sudo chown Rui Linux
```

**j) Altere o grupo do arquivo Linux para Staff.**
```bash
sudo chgrp Staff Linux
```
