function validarSenhas() {
    var senha = document.getElementById("senha").value;
    var checksenha = document.getElementById("checksenha").value;

    if (senha !== checksenha) {
        alert("As senhas não coincidem. Por favor, digite novamente.");
        return false;
    }

    return true;
}


// scripts.js

// Script para inicializar o gráfico Lista 1
var dadosLista1 = [33.3, 66.3];
var totalLista1 = dadosLista1.reduce((a, b) => a + b, 0);
var porcentagemLista1 = dadosLista1.map(valor => ((valor / totalLista1) * 100).toFixed(2));
var configLista1 = {
  type: 'doughnut',
  data: {
    labels: ['Certo', 'Pendente'],
    datasets: [{
      data: dadosLista1,
      backgroundColor: ['#36a2eb', '#ff6384'],
    }],
  },
};
var ctxLista1 = document.getElementById('lista1Chart').getContext('2d');
new Chart(ctxLista1, configLista1);

// Script para inicializar o gráfico Lista 2
var dadosLista2 = [50, 50];
var totalLista2 = dadosLista2.reduce((a, b) => a + b, 0);
var porcentagemLista2 = dadosLista2.map(valor => ((valor / totalLista2) * 100).toFixed(2));
var configLista2 = {
  type: 'doughnut',
  data: {
    labels: ['Certo', 'Pendente'],
    datasets: [{
      data: dadosLista2,
      backgroundColor: ['#36a2eb', '#ff6384'],
    }],
  },
};
var ctxLista2 = document.getElementById('lista2Chart').getContext('2d');
new Chart(ctxLista2, configLista2);


// Script para inicializar o gráfico do Terceiro Card
var dadosProva1 = [20, 50, 30]; // Exemplo: 20% Certo, 50% Pendente, 30% Incorreto
var totalProva1 = dadosProva1.reduce((a, b) => a + b, 0);
var porcentagemProva1 = dadosProva1.map(valor => ((valor / totalProva1) * 100).toFixed(2));

var configProva1 = {
  type: 'doughnut',
  data: {
    labels: ['Certo', 'Pendente', 'Incorreto'],
    datasets: [{
      data: dadosProva1,
      backgroundColor: ['#36a2eb', '#ff6384', '#ffd700'], // Adiciona amarelo para Incorreto
    }],
  },
};

var ctxProva1 = document.getElementById('prova1Chart').getContext('2d');
new Chart(ctxProva1, configProva1);


// Script para inicializar o gráfico do Quarto Card
var dadosLista3 = [50, 20, 30]; // Exemplo: 50% Certo, 20% Pendente, 30% Incorreto
var totalLista3 = dadosLista3.reduce((a, b) => a + b, 0);
var porcentagemLista3 = dadosLista3.map(valor => ((valor / totalLista3) * 100).toFixed(2));

var configLista3 = {
  type: 'doughnut',
  data: {
    labels: ['Certo', 'Pendente', 'Incorreto'],
    datasets: [{
      data: dadosLista3,
      backgroundColor: ['#36a2eb', '#ff6384', '#ffd700'], // Adiciona amarelo para Incorreto
    }],
  },
};

var ctxLista3 = document.getElementById('lista3Chart').getContext('2d');
new Chart(ctxLista3, configLista3);


//importando a ide estilo vscode
// Carrega o Módulo de Inicialização do Monaco
require.config({ paths: { 'vs': 'https://cdn.jsdelivr.net/npm/monaco-editor/min/vs' } });
require(['vs/editor/editor.main'], function () {
    // Configuração do editor
    monaco.editor.create(document.getElementById('editor'), {
        value: "int main() {\n\t// Seu código C aqui\n}\n",
        language: 'c',
        theme: 'vs-dark',
    });
});