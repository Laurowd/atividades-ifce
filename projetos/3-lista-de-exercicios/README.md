**1. Identificação de Processadores via /proc/cpuinfo**

**(a) Usando os comandos grep e wc, exiba o número de processadores presentes.**
```bash
grep "processor" /proc/cpuinfo | wc -l
```

**(b) Faça o mesmo com sed em vez de grep.**
```bash
sed -n '/processor/p' /proc/cpuinfo | wc -l
```

**2. Exploração do arquivo /etc/passwd**

**(a) Quais usuários têm acesso a um shell Bash?**
```bash
grep "/bin/bash" /etc/passwd
```

**(b) Muitos dos usuários não têm acesso a um shell. Quantos deles estão presentes no sistema?**
```bash
grep -E 'nologin|false' /etc/passwd | wc -l
```

**(c) Quantos usuários e grupos existem em seu sistema (use apenas o arquivo /etc/passwd)?**
```bash
# Quantidade de usuários (total de linhas):
wc -l < /etc/passwd

# Quantidade de grupos (contando os GIDs únicos no 4º campo):
cut -d: -f4 /etc/passwd | sort -u | wc -l
```

**(d) Liste apenas a primeira, a última e a décima linha do arquivo /etc/passwd.**
```bash
sed -n '1p; 10p; $p' /etc/passwd
```

**3. Considere este arquivo de exemplo /etc/passwd.**

**(a) Liste todos os usuários no grupo 1000 do arquivo mypasswd.**
```bash
sed -n '/^[^:]*:[^:]*:[^:]*:1000:/p' mypasswd
```

**(b) Liste apenas o nome completo de todos os usuários deste grupo.**
```bash
sed -n '/^[^:]*:[^:]*:[^:]*:1000:/p' mypasswd | cut -d: -f5
```

**4. Comando Bash para selecionar um indivíduo do Main Office.**
```bash
sed -n '/Main Office/p' mypasswd | cut -d: -f5 | cut -d' ' -f1 | sort -R | head -n 1
```
