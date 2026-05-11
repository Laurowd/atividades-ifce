let inscricaoID = 0;

function gerarNumeroInscricao() {
    inscricaoID += 1;
    return `INS-${inscricaoID.toString().padStart(4, '0')}`;
}

function registrarInscricao() {
    const nome = document.getElementById("nomeParticipante").value;
    const modalidade = document.getElementById("modalidade").value;
    const categoria = document.getElementById("categoria").value;
    const formaPagamento = document.getElementById("formaPagamento").value;

    if (nome && modalidade && categoria && formaPagamento) {
        const numeroInscricao = gerarNumeroInscricao();

        const recibo = `
            Número de Inscrição: ${numeroInscricao} <br>
            Nome: ${nome} <br>
            Categoria: ${modalidade} <br>
            Modalidade: ${categoria} <br>
            Forma de Pagamento: ${formaPagamento}
        `;

        document.getElementById("recibo").innerHTML = recibo;
        document.getElementById("comprovante").style.display = "block";

        alert(`Inscrição realizada com sucesso! Número: ${numeroInscricao}`);
    } else {
        alert("Por favor, preencha todos os campos.");
    }
}
let modalidades = [];
let rodadas = [];
let desempenhos = [];
let confrontosGerados = false;

function adicionarModalidade() {
    const nome = document.getElementById("nomeModalidade").value;
    if (nome) {
        modalidades.push(nome);
        const lista = document.getElementById("listaModalidades");
        const item = document.createElement("li");
        item.textContent = nome;
        lista.appendChild(item);
        document.getElementById("formModalidade").reset();
    }
}

function adicionarRodada() {
    const pares = document.getElementById("pares").value;
    if (pares) {
        rodadas.push(pares);
        const lista = document.getElementById("listaRodadas");
        const item = document.createElement("li");
        item.textContent = pares;
        lista.appendChild(item);
        document.getElementById("formRodada").reset();
    }
}

function registrarDesempenho() {
    const id = document.getElementById("competidorID").value;
    const pontuacao = document.getElementById("pontuacao").value;
    const tempo = document.getElementById("tempo").value;
    const observacoes = document.getElementById("observacoes").value;

    if (id && pontuacao && tempo) {
        const desempenho = {
            id: id,
            pontuacao: parseFloat(pontuacao),
            tempo: parseFloat(tempo),
            observacoes: observacoes
        };
        desempenhos.push(desempenho);

        const lista = document.getElementById("listaDesempenhos");
        const item = document.createElement("li");
        item.textContent = `ID: ${id}, Pontuação: ${pontuacao}, Tempo: ${tempo}s, Observações: ${observacoes}`;
        lista.appendChild(item);
        document.getElementById("formDesempenho").reset();
    }
}

function gerarProximosConfrontos() {
    if (confrontosGerados) {
        alert("Confrontos já gerados!");
        return;
    }

    const proximosConfrontos = desempenhos
        .sort((a, b) => b.pontuacao - a.pontuacao || a.tempo - b.tempo)
        .map(d => `ID: ${d.id} - Pontuação: ${d.pontuacao}`);

    const lista = document.getElementById("listaConfrontos");
    proximosConfrontos.forEach(confronto => {
        const item = document.createElement("li");
        item.textContent = confronto;
        lista.appendChild(item);
    });

    confrontosGerados = true;
    alert("Próximos confrontos gerados com base nos resultados.");
}