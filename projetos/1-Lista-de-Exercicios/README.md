# 1-Lista-de-Exercicios
1ª Lista de Exercícios
Comandos Linux — Devops
 
Questão 1 — Comandos Linux
 
(a) Reinicializar ou Desligar o Computador
 
i) Dois comandos para reinicializar imediatamente:
reboot
shutdown -r now
 
ii) Agendar desligamento em horário específico:
shutdown -h 22:00
 
iii) Desligar após alguns minutos ou horas:
shutdown -h +30    	# desliga em 30 minutos
shutdown -h +120    	# desliga em 2 horas
 
iv) Desligar em 5 minutos com mensagem para todos os usuários:
shutdown -h +5 "O sistema sera desligado em 5 minutos. Salve seus trabalhos!"
 
(b) Comandos de Navegação
 
i) Exibir diretório corrente:
pwd
 
ii) Exibir conteúdo do diretório do usuário corrente:
ls ~
 
iii) Listagem completa com arquivos ocultos:
ls -la
 
iv) Árvore de diretórios do /etc/network:
sudo apt install tree
tree /etc/network
 
v) Lista completa e recursiva do /etc/network:
ls -lR /etc/network
 ls
vi) Listagem longa do diretório home com detalhes:
ls -lh ~
 
Significado de cada coluna:
 
Coluna
Significado
drwxr-xr-x
Permissões (tipo + dono + grupo + outros)
2
Número de links (hard links)
usuario
Dono do arquivo
grupo
Grupo do arquivo
4096
Tamanho em bytes
Mar 24 10:00
Data/hora da última modificação
nome
Nome do arquivo ou diretório

 
vii) Listagem longa de /etc ordenada alfabeticamente:
ls -l /etc | sort
 
viii) Listagem curta de /usr, recursiva e ordenada por tamanho:
ls -rsSR /usr
 
ix) Subir um nível:
cd ..
 
x) Retornar ao diretório do usuário:
cd ~
 
xi) Mudar para o diretório raiz:
cd /
 
xii) Retornar ao diretório anterior:
cd -
 
(c) Localização de Arquivos
 
i) Localizar arquivo 'interfaces' em /etc:
find /etc -name "interfaces"
 
ii) Encontrar todos os links simbólicos em /usr:
find /usr -type l
 
iii) Mesmo do item anterior com locate:
sudo apt install plocate
sudo updatedb
locate /usr | xargs -d '\n' sh -c 'for f; do [ -L "$f" ] && echo "$f"; done' _
Obs.: o comando locate nao filtra por tipo diretamente. O find e mais indicado para links simbolicos.
 
(d) Manipulação de Arquivos e Diretórios
 
i/ii) Criar estrutura de diretórios (varios com um unico comando):
mkdir -p ~/diretorio1/diretorio1.1 ~/diretorio1/diretorio1.2 \
          ~/diretorio2/diretorio2.1 ~/diretorio2/diretorio2.2/diretorio2.2.1
 
iii) Criar arquivo numeros.txt:
touch ~/numeros.txt
 
iv) Inserir numeros no numeros.txt:
echo -e "10\n100\n50\n34\n25\n1\n2\n56" > ~/numeros.txt
 
v) Criar arquivo disciplinas.txt:
touch ~/disciplinas.txt
 
vi) Inserir nomes no disciplinas.txt:
cat > ~/disciplinas.txt << EOF
Gerencia de Redes
Laboratorio de Desenvolvimento de Sistemas
Logica de Programacao
Sistemas Operacionais
Governanca de Tecnologia da Informacao
Redes de Computadores
EOF
 
vii) Criar ListaDisciplinas.txt:
echo -e "1\n2\n4\n6\n5" > ~/ListaDisciplinas.txt
 
viii) Duplicar numeros.txt para .txt:
cp ~/numeros.txt ~/numeros1.1.txt
cp ~/numeros.txt ~/numeros2.1.txt
cp ~/numeros.txt ~/numeros2.2.1.txt
 
ix) Duplicar numeros.txt para .num:
cp ~/numeros.txt ~/numeros1.1.num
cp ~/numeros.txt ~/numeros2.1.num
cp ~/numeros.txt ~/numeros2.2.1.num
 
x) Duplicar disciplinas.txt:
cp ~/disciplinas.txt ~/disciplinas1.txt
cp ~/disciplinas.txt ~/disciplinas2.txt
cp ~/disciplinas.txt ~/disciplinas2.2.3.txt
 
xi) Mover arquivos .num para seus diretórios:
mv ~/numeros1.1.num ~/diretorio1/diretorio1.1/
mv ~/numeros2.1.num ~/diretorio2/diretorio2.1/
mv ~/numeros2.2.1.num ~/diretorio2/diretorio2.2/diretorio2.2.1/
 
xii) Mover arquivos .txt para seus diretórios:
mv ~/numeros1.1.txt ~/diretorio1/diretorio1.1/
mv ~/numeros2.1.txt ~/diretorio2/diretorio2.1/
mv ~/numeros2.2.1.txt ~/diretorio2/diretorio2.2/diretorio2.2.1/
 
xiii) Mover arquivos disciplinas:
mv ~/disciplinas1.txt ~/diretorio1/diretorio1.1/
mv ~/disciplinas2.txt ~/diretorio2/diretorio2.1/
mv ~/disciplinas2.2.3.txt ~/diretorio2/diretorio2.2/diretorio2.2.1/
 
xiv) Copiar /etc/network para diretorio01:
cp -r /etc/network ~/diretorio01
 
xv) Renomear numeros.txt:
mv ~/numeros.txt ~/numerosAtualizados.txt
 
xvi) Executar ping e redirecionar saída:
ping -c10 www.google.com.br > ~/request.txt
 
xvii) Tentar remover diretorio1.2 e diretorio2.1 com rmdir:
rmdir ~/diretorio1/diretorio1.2
rmdir ~/diretorio2/diretorio2.1
Resultado esperado: o rmdir so remove diretorios VAZIOS. Se houver arquivos dentro, o comando retornara erro:
rmdir: falhou ao remover "...": Diretorio nao vazio
 
xviii) Remover todos os arquivos .num recursivamente:
find ~ -name "*.num" -exec rm -v {} \;
 
(e) Filtragem e Paginação
 
i) Mostrar conteúdo total de request.txt:
cat ~/request.txt
 
ii) Primeiras 5 linhas:
head -n 5 ~/request.txt
 
iii) Última linha:
tail -n 1 ~/request.txt
 
iv) Contar linhas:
wc -l ~/request.txt
 
v) Quantidade de palavras:
wc -w ~/request.txt
 
vi) Substituir minúsculas por maiúsculas e salvar em novo arquivo:
tr 'a-z' 'A-Z' < ~/disciplinas.txt > ~/disciplinasMaiusculas.txt
 
vii) Ordenar numerosAtualizados.txt em ordem crescente:
sort -n ~/numerosAtualizados.txt > ~/numerosOrdemCrescente.txt
 
viii) Ordenar em ordem decrescente:
sort -rn ~/numerosAtualizados.txt > ~/numerosOrdemDesCrescente.txt
 
ix) Ordenar disciplinas.txt em ordem crescente:
sort ~/disciplinas.txt > ~/disciplinasOrdemCrescente.txt
 
x) Ordenar ListaDisciplinas.txt:
sort -n ~/ListaDisciplinas.txt > ~/ListaDisciplinasAtualizada.txt
 
xi) Colar ListaDisciplinas.txt com disciplinas.txt (formato numerado):
paste ~/ListaDisciplinas.txt ~/disciplinas.txt > ~/listanumerada.txt
 
xii) Mostrar apenas a primeira coluna de request.txt:
cut -d' ' -f1 ~/request.txt
 
xiii) Mostrar a coluna com os tempos de cada requisição ping:
awk '/icmp_seq/{print $7}' ~/request.txt
 
xiv) Mostrar a coluna com o endereço IP:
awk '/icmp_seq/{print $5}' ~/request.txt | tr -d ':'
 
 
Questão 2 — Diretórios do Linux
 
Nas distribuições Linux, as principais bibliotecas de sistema e os arquivos de configuração e scripts de inicialização ficam armazenados nos seguintes diretórios:
 


Diretório
Conteúdo
/lib e /lib64
Bibliotecas compartilhadas essenciais do sistema (usadas pelos binários em /bin e /sbin)
/etc
Arquivos de configuração de sistema e serviços
/etc/init.d ou /etc/systemd
Scripts e units de inicialização de serviços (SysVinit / systemd)
/usr/lib
Bibliotecas dos programas instalados pelo usuário
/bin e /sbin
Binários essenciais do sistema e administração
/var
Logs, filas, dados variáveis gerados em tempo de execução
/boot
Kernel, initrd e arquivos necessários para a inicialização do sistema

 
Questão 3 — O que é o ping?
 
O ping e um utilitario de diagnostico de rede que utiliza o protocolo ICMP (Internet Control Message Protocol) para testar a conectividade entre dois hosts. Ele envia pacotes Echo Request ao destino e aguarda Echo Reply, medindo o tempo de resposta (latencia) e verificando se ha perda de pacotes.
 
Casos de uso:
•        Verificar se um host esta acessivel na rede
•        Medir a latencia (tempo de ida e volta - RTT)
•        Diagnosticar problemas de conectividade
•        Verificar resolucao de nomes DNS (quando usado com hostname)
•        Estimar a qualidade do enlace de rede
 
Exemplo de uso:
ping -c 4 www.google.com.br
 
Questão 4 — Sub-redes (192.168.100.0/24)
 
Com o bloco 192.168.100.0/24 (256 endereços), dividimos em 2 sub-redes utilizando máscara /25 (128 endereços cada):
 
Sub-rede
Endereço de Rede
Máscara
Faixa Utilizável
Broadcast
Computadores
192.168.100.0
255.255.255.128 (/25)
192.168.100.1 a .126
192.168.100.127
Telefones IP
192.168.100.128
255.255.255.128 (/25)
192.168.100.129 a .254
192.168.100.255

 
Atribuição de IPs por dispositivo:
 

Dispositivo
Endereço IP
Máscara de Sub-rede
PC 1
192.168.100.1
255.255.255.128
PC 2
192.168.100.2
255.255.255.128
PC 3
192.168.100.3
255.255.255.128
Telefone IP
192.168.100.129
255.255.255.128
Servidor
192.168.100.126
255.255.255.128

 
Obs.: O servidor recebe o ultimo IP utilizavel da sub-rede de computadores (.126) e precisa de roteamento (ou configuracao de multiplas interfaces / gateway) para se comunicar com a sub-rede dos telefones.
 

