# Lista-4-Devops

Exercício:

```bash
#!/bin/bash

monitorar_disco() {
    echo -e "\n--- Uso de Disco ---"
    df -h
    echo "--------------------"
}

listar_usuarios() {
    echo -e "\n--- Usuários Logados ---"
    who
    echo "------------------------"
}

atualizar_sistema() {
    echo -e "\n--- Atualizando Sistema ---"
    sudo apt update && sudo apt upgrade -y
    echo "---------------------------"
}

verificar_site() {
    echo -e "\n--- Verificador de Site ---"
    read -p "Digite a URL do site (ex: google.com): " site
    
    if ping -c 1 "$site" &> /dev/null; then
        echo "Sucesso: O site $site está ONLINE!"
    else
        echo "Falha: O site $site está OFFLINE ou inacessível."
    fi
    echo "---------------------------"
}

while true; do
    echo -e "\n===== MENU DE ADMINISTRAÇÃO ====="
    echo "1 - Monitorar uso de disco"
    echo "2 - Listar usuários logados"
    echo "3 - Atualizar sistema"
    echo "4 - Verificar site online"
    echo "0 - Sair"
    read -p "Escolha uma opção: " opcao

    case $opcao in
        1) monitorar_disco ;;
        2) listar_usuarios ;;
        3) atualizar_sistema ;;
        4) verificar_site ;;
        0) echo "Saindo do sistema..."; break ;;
        *) echo "Opção inválida! Tente novamente." ;;
    esac
done
```

Desafio: 
```bash
#!/bin/bash

ARQUIVO_LOG="monitoramento_desafio.log"
DATA=$(date '+%Y-%m-%d %H:%M:%S')

LIMITE_CPU=80
LIMITE_MEM=80
LIMITE_DISCO=90

echo "Iniciando verificação de saúde do sistema em $DATA..."

CPU_IDLE=$(top -bn1 | grep "Cpu(s)" | sed "s/.*, *\([0-9.]*\)%* id.*/\1/")
CPU_USO=$(echo "$CPU_IDLE" | awk '{print int(100 - $1)}')

MEM_USO=$(free | awk '/Mem/ {printf("%d", ($3/$2) * 100)}')

DISCO_USO=$(df / | awk 'NR==2 {print $5}' | sed 's/%//')


registrar_e_alertar() {
    local recurso=$1
    local uso=$2
    local limite=$3

    local mensagem_log="[$DATA] $recurso: ${uso}% de uso."

    echo "$mensagem_log" >> "$ARQUIVO_LOG"

    if [ "$uso" -ge "$limite" ]; then
        alerta="[ALERTA CRÍTICO] Uso de $recurso atingiu ${uso}% (Limite: ${limite}%)!"
        echo "$alerta" | tee -a "$ARQUIVO_LOG"
    else
        echo "[$recurso] Status Normal (${uso}%)."
    fi
}

echo -e "\n--- Relatório de Status ---"
registrar_e_alertar "CPU" "$CPU_USO" "$LIMITE_CPU"
registrar_e_alertar "Memória" "$MEM_USO" "$LIMITE_MEM"
registrar_e_alertar "Disco" "$DISCO_USO" "$LIMITE_DISCO"
echo "---------------------------"
echo "Monitoramento concluído. Log salvo em: $ARQUIVO_LOG"
```
