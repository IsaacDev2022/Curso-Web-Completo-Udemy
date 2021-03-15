// Aula 1 - 12: 

// alert("Bom dia, seja bem vindo meu caro");
// document.getElementById('nome').value = 'Oi';

/* ======================================================================================= */

// As outras aulas estão dentro dos arquivos HTML 

// Comentários: são trechos de código que são desconsiderados pelo intepretador
// Servem para documentar códigos, ajudando em testes, debugs, etc.
// Comentário de uma linha
/*
   Comentário de mais de uma linha.
*/

// Variáveis: espaços em memória para armazenar valores
/*
   Tipos:
   - String;
   - Number int/float;
   - Boolean;

   Regras:
   - Não podem começar com números, apenas letras ou "_";
   - Não podem começar com caracteres especiais;
   - Não podem ser palavras reservadas da linguagem;
   - Não pode ter espaço entre duas palavras caso tenha;
   - Recomendação: o nome da variável deve representar seu conteúdo;


// Declaração:
var variavel;

// JS é case sensitive

// String:
var texto = 'Curso de JacaScript';

// Number:
var numeroInteiro = -7;
var numeroFracionado = 10.75;

// Boolean (para testes condicionais):
var teste = true;

// OBS: a tipagem é realizada em relação ao valor atribuído a variável

// alert(); // abrir um dialog
// document.write(texto); // mostrar conteúdo no browser
// console.log(); // comando para mostrar conteúdo no terminal

// prompt(): serve para a entrada de dados pelo browser
var nome = prompt("Digite o seu nome: ");
var idade = prompt("Digite a sua idade: ");
console.log(idade)
console.log(nome);

document.write("<h1> Olá " + nome + ", tudo bem?, percebi que voce tem " + idade + " anos </h1>");

// null: ausencia intencional de um valor;
var teste = null;

// undefined: de fato não possui valor
var teste2 = undefined;

console.log(teste)
console.log(teste2);

// Para alterar valores de variáveis em JS, basta apenas fazer uma nova atribuição



// If - else: estrutura de controle que possibilita
baseada em uma determinada condição, definir o fluxo que a aplicação vai tomar 

Operadores de comparação: formar expressões para serem inseridas no if
/* if (false) {
   document.write("Entrou dentro do bloco if (verdadeiro)");
}

 else {
   document.write("Entrou no dentro do bloco else (falso)");
} 

// Desafio:
var nota = prompt("Digite a nota: ");
var media = 7;

if (nota < media) {
   document.write("Tu foi reprovado!");
}

else if (nota >= media) {
   document.write("Tu estás aprovado!");
}

// Casting de tipos: converter tipo de dados


/* ======================================================================================= */

// Aula 13: Operadores lógicos
/*
   && = E - verdadeiro se todas as expressões forem verdadeiras
   || = OU - Verdadeiro se pelo menos uma das expressões for verdadeiro
   ! = Negação - Inverte o resultado da expressão de comparação:
*/

/* ======================================================================================= */

// Aula 14: If/else com operadores lógicos:
/* if (2 == 2 && 3 >= 1) {
   document.write("Verdadeiro");
   console.log("Verdadeiro");
}

else {
   document.write("Falso");
   console.log("Falso");
}

var nota = prompt("Digite a nota: ");
var faltas = prompt("Digite a quantidade de faltas: ");
var media = 7;
var faltas_max = 15;

if (nota >= media && faltas <= faltas_max) {
   document.write("Tu estás aprovado!");
}

else if (nota < media) {
   document.write("Tu foi reprovado!");
} */

/* ======================================================================================= */

// Aula 15: operador ternário
// operadores <condição> ? <verdadeiro> : <falso>
// var resultado = (nota >= media && faltas <= faltas_max) ? "Aprovado" : "Reprovado";

/* ======================================================================================= */

// Aula 16: operador switch: 
/* var opcao = 2;

switch(opcao) {
   case 1:
      document.write("Oi 1");
      break;

   case 2:
      document.write("Oi 2");
      break;

   default:

      break;
}

var parametro = prompt("Digite um parametro: ");

switch(parseInt(parametro)) {
   case 1:
      document.write("Parametro 1");
      break;

   case 2:
      document.write("Parametro 2");
      break;

   default:
      document.write("Default");
      break;
} */

/* ======================================================================================= */

// Aula 17: operadores aritméricos:
/*
   +
   -
   /
   *
   %
   ++
   --
*/

/* ======================================================================================= */

// Aula 18: praticando operadores aritméticos:
/* var num1 = prompt("Digite o primeiro número: ");
var num2 = prompt("Digite o segundo número: ");

document.write("A soma entre " + num1 + " e " + num2 + " é: " + (parseInt(num1) + parseInt(num2)));
document.write("<br>");
document.write("A subtração entre " + num1 + " e " + num2 + " é: " + (parseInt(num1) - parseInt(num2)));
document.write("<br>");
document.write("A multiplicação entre " + num1 + " e " + num2 + " é: " + (parseInt(num1) * parseInt(num2)));
document.write("<br>");
document.write("A divisão entre " + num1 + " e " + num2 + " é: " + (parseInt(num1) / parseInt(num2)));

/* ======================================================================================= */

// Aula 19: Operações aritméticas na atribuição de valores: 

/* var teste = 10;

teste = teste + 5;
teste += 5;
teste -= 5;

// Podemos fazer o mesmo para quaisquer operações aritméticas.

document.write("Seu valor: " + teste);

/* ======================================================================================= */

// Aula 20: precedencia de execução

// document.write(11 + 4 - 4 * 2 / 2);
// 1° Multiplicação e divisão
// 2° Soma e subtração
// Os parenteses tem precedencia maior caso sejam inseridos na expressão


/* ======================================================================================= */

// Aula 21: Funções

// Funções: Tem como objetivo encapsular um bloco de códigos com um objetivo definido;

/*
   Escopo de funções:

   function nomeDaFunção (parametro1, parametro2...) {
      bloco de códigos

      return valor de retorno (o retorno é opcional, depende da função)
   }

   Para utilizar uma função, é preciso chamá-la, por isso
*/

/* ======================================================================================= */

// Aula 22: funções - prática: 

/* function calcularAreaTerreno(largura, comprimento) {
   var area = largura * comprimento;
   return area;
}

var largura = prompt("Digita a altura do terreno: ");
var comprimento = prompt("Digite o comprimento: ");

var area = calcularAreaTerreno(largura, comprimento);

document.write(area);

/* ======================================================================================= */

// Aula 23: Flexibilidade dos parametros: 

/* function soma(a, b) {
   // b = b === undefined ? o : b
   return a + b;
}

console.log(soma(10, 15));
console.log(soma(10, 15, 10, 5)); // O JS desconsidera os parametros adicionais

/* ======================================================================================= */

// Aula 24: escopo de variáveis:

// 3 escopos: global, função e bloco.

/* var serie = "Friends";

// Escopo de bloco
if (true) {
   var serie2 = "Game of Thrones";
   document.write(serie);
}

document.write(serie2);

document.write("<br>");

// Escopo de função
function x() {
   var serie3 = "The Walking dead";
   document.write(serie);
   document.write(serie2);
}

x();

/* ======================================================================================= */

// Aula 25: Funções anonimas e técnica de wrapper

/* var exibirSaudacao = function(nome) {
   document.write("Olá " + nome + ", Tudo bem?");
}

exibirSaudacao("Isaac");

/* ======================================================================================= */

// Aula 26: funções de callback

// São funções que são passadas como parametro para outras funções.

/*
   function exibirArtigo (id, callbackSucesso, callbackErro) {
      if (?) {
         callbackSucesso("Titulo", "descricao");
      }

      else {
         callbackErro("Erro");
      }
   }

function exibirArtigo (id, callbackSucesso, callbackErro) {
   if (false) {
      callbackSucesso("Funções de callback em JS", "Funções de callback");
   }

   else {
      callbackErro("Erro ao recuperar dados");
   }
}

var callbackSucesso = function(titulo, descricao) {
   document.write("<h1>" + titulo + "</h1>");
   document.write("<hr>");
   document.write("<p>" + descricao + "</p>");
}

var callbackErro = function(erro) {
   document.write("<p><b>" + erro + "</p>");
}

exibirArtigo(1, callbackSucesso, callbackErro);

/* ======================================================================================= */

// Aula 27: funções para manipular strings

// propriedade length: retorna a quantidade de caracteres de uma string

/* var nome = "Jorjão da massa";

document.write(nome.substring(6));

/* ======================================================================================= */

// Aula 28: funções para tarefas matemáticas:

// Acessados através do objeto Math:

/* var x = Math.floor(10.380);

document.write(x);

/* ======================================================================================= */

// Aula 29: datas

// Acessadas pelo objeto Date

/* var data = new Date();

document.write(data.getDate() + "/" + (data.getMonth() + 1) + "/" + data.getFullYear()); */

// Adicionar / remover dias
/* var data = new Date();

document.write(data.toString());
document.write("<hr>");
data.setDate(data.getDate() - 1);
document.write(data.toString());
document.write("<hr><br>");

// Adicionar / remover meses
document.write(data.toString());
document.write("<hr>");
data.setMonth(data.getMonth() - 5);
document.write(data.toString());
document.write("<hr><br>");

// Adicionar / remover anos
document.write(data.toString());
document.write("<hr>");
data.setFullYear(data.getFullYear() - 5);
document.write(data.toString());

var data1 = new Date(2020, 10, 15);

var data2 = new Date(2020, 10, 18);

document.write(data1.toString());
document.write("<hr>");
document.write(data2.toString());
document.write("<hr><br><br>");
// Converter as datas para algo que possamos calcular.
document.write(data1.getTime());
document.write("<hr>");
document.write(data2.getTime());

// Encontrar a quantidade de milissegundos entre data1 e data2
document.write("<hr><br><br>");
var millissegundos_entre_datas = Math.abs(data1.getTime()) - Math.abs(data2.getTime());
document.write(millissegundos_entre_datas);
document.write("<hr>");
var millissegundos_por_dia = 1*24*30*1000;
document.write("1 dia tem "+ millissegundos_por_dia + " milissegundos");
document.write("<hr>");
document.write(Math.ceil(millissegundos_entre_datas / millissegundos_por_dia));

/* ======================================================================================= */

// Aula 30: Eventos

// Introdução:

/*
   Eventos: ações que são feitas pelo usuário dentro do browser.
*/

/* ======================================================================================= */

// Aula 31: Eventos: mouse:

/*
   - onclick: elemento clicado
   - ondblcick: elemento clicado 2 vezes
   - onmouseup: clique liberado
   - onmouseover: cursor sobre o elemento
   - onemouseout: elemento sai de cima do elemento


function acao1() {
   alert("Elemento clicado");
}

function acao2() {
   alert("O cursos do mouse deixou a região do elemento");
}

/* ======================================================================================= */

// Aula 32: Eventos: teclado

/*
   - onkeydown: no momento em que uma tecla é teclada
   - onkeypress: ocorre quando a tecla está pressionada (apenas caracteres)
   - onkeyup: no momento em que a tecla é liberada


function acao1() {
   alert("Elemento clicado");
}

/* ======================================================================================= */

// Aula 33: Eventos: janela

/*
   - onresize: quando o frame/página é redimensionada
   - onscroll: quando o scroll do mouse é acionado
*/

/* ======================================================================================= */

// Aula 34: Eventos: Formulários

/*
   - onfocus: quando o elemento recebe o foco do cursor do mouse
   - onblur: quando o elemento perde o foco
   - onchange: quando o estado do elemento é modificado
*/

/* ======================================================================================= */

// Aula 35: DOM: document object model: é uma API que serve para acessar e modificar os elementos HTML

// Cada elemento da DOM é organizado como uma árvore, onde os elementos pais encapsulam os elementos filhos
// para estabelecer trajetos bem específicos para alcançar elementos da página.

// Cada elemento de chama nó.

/* ======================================================================================= */

// Aula 36: DOM: selectionando elementos da página

// A partir do objeto document (API DOM)
/*
   - getElmentById();
   - getElementsByTagName();
   - getElementsByClassName();
   - getElementsByName();
*/

// console.log(document.getElementsByName("nome"));

/* ======================================================================================= */

// Aula 37: DOM: manipulando valores de inputs (text)

/* function disbtribuiCaracter() {
   // Selecionar o valor digitado
   var caracter = document.getElementById('entrada').value;

   // Limpar o campo de digitação;

   document.getElementById('entrada').value = "";

   // Limpar espaços em branco na extremidades da string
   caracter.trim();


      switch (caracter) {
         case '0':
         case '1':
         case '2':
         case '3':
         case '4':
         case '5':
         case '6':
         case '7':
         case '8':
         case '9':
            // Adicionar o caracter no campo referente a números
               document.getElementById('apenas_numeros').value += caracter;
            break;

            default:
               // Adicionar o caracter no campo referente a letras
               document.getElementById('apenas_letras').value += caracter;
      }
}

/* ======================================================================================= */

// Aula 38: DOM: manipulando estilos de elementos:

/* function modificarEstilo(corDeFundo, largura, altura) {
   document.getElementById('quadrado').style.background = corDeFundo;
   document.getElementById('quadrado').style.height = altura;
   document.getElementById('quadrado').style.width = largura;
}

/* ======================================================================================= */

// Aula 39: DOM: manipulando classes de elementos HTML:

/* function modificaClasse() {
   document.getElementById('mensagem').className = 'estilo2';
}

/* ======================================================================================= */

// Aula 40: Array básico: introdução

// Arrays: são listas ordenadas de itens que são associadas a índices (chaves)

/* ======================================================================================= */

// Aula 41: Array básico: prática:

// var lista_frutas = Array();
// var lista_frutas = [];

/* lista_frutas[1] = 'Banana';
lista_frutas[2] = 'Maça';
lista_frutas[3] = 'Morango';
lista_frutas[4] = 'Uva';

console.log(lista_frutas[3]);
*/

/* var lista_frutas = Array('Banana', 'Maça', 'Morango', 'Uva');

console.log(lista_frutas[0]);

/* ======================================================================================= */

// Aula 42: Extra: diferença entre o atributo length de variáveis do tipo string e array.

// length: armazena o tamanho de arrays e string.

/* ======================================================================================= */

// Aula 43: Array multidimensional:

/* var lista_coisas = Array();

lista_coisas['frutas'] = Array('Banana', 'Maça', 'Morango', 'Uva');

lista_coisas['pessoas'] = ['João', 'Isaac', 'Matheus'];

console.log(lista_coisas['pessoas'][2]);

document.write(lista_coisas['pessoas'][0]);

/* ======================================================================================= */

// Aula 44: Array: métodos de inclusão e exclusão de elementos:

/* var lista_coisas = Array();

lista_coisas['frutas'] = Array();
lista_coisas['pessoas'] = [];

lista_coisas['frutas'].push('Banana');

// Para incluir um elemento no final do Array(): push
// lista_frutas.push('Uva');

// Para incluir um elemento no início do Array(): unshift
// lista_frutas.unshift('Uva');

// Para excluir um elemento do final do Array(): pop
// lista_frutas.pop();

// Para excluir um elemento do início do Array(): shift
// lista_frutas.shift();

console.log(lista_coisas);

/* ======================================================================================= */

// Aula 45: Array: método de pesquisa

/* var lista_frutas = Array();

lista_frutas[0] = 'Banana';
lista_frutas[1] = 'Maça';
lista_frutas[2] = 'Morango';
lista_frutas[3] = 'Uva';

// indexOf(): para pesquisar elementos dentro de arrays:
// O retorno desse método é o índice do valor pesquisado

if (lista_frutas.indexOf('Uva') === -1) {
   console.log("Elemento não existe");
}

else {
   console.log("Elemento existe e está na posição: " + lista_frutas.indexOf('Uva'))
}

/* ======================================================================================= */

// Aula 46: Array: ordenação de elementos:

/* var lista_frutas = Array();

lista_frutas[0] = 'Uva';
lista_frutas[1] = 'Maça';
lista_frutas[2] = 'Morango';
lista_frutas[3] = 'Banana';
 */

/* var lista_numeros = Array();

lista_numeros[0] = 12;
lista_numeros[1] = 40;
lista_numeros[2] = 3;
lista_numeros[3] = 7;
lista_numeros[4] = 19;
lista_numeros[5] = 1;

// Para ordenar os arrays: sort() para alfanuméricos e faz um novo arranjo de índices
console.log(lista_numeros.sort(ordenaNumeros));

function ordenaNumeros(a, b) {
   return a - b;
   // < 0 = a ordenado antes de b
   // > 0 = ordenado antes de a
   // == a ordem é mantida
   // Se o tipo do valor for diferente, ele dará erro na ordenação
   // Caso haja valores numéricos dentro de Strings, o sort() fará um casting e depois a ordenação normalmente
}

/* ======================================================================================= */

// Aula 47: estrutura de repetição: introdução:

// São estruturas que permitem repetição de comandos até que uma condição seja satisfeita.

/* ======================================================================================= */

// Aula 48: estrutura while:

/* var x = 0;

while (x <= 20) {
   document.write("<br>" + x);

   if (x == 5) {
      break;
   }
   x++;
}

/* ======================================================================================= */

// Aula 49: estrutura do-while:

/* var x = 11;

do {

   document.write("<br>" + x);
   x++;
} while (x <= 10);

/* ======================================================================================= */

// Aula 50: estrutura for:

/* var i;

for (i = 0; i <= 10; i++) {
   document.write("<br>" + i);
}

/* ======================================================================================= */

// Aula 51: percorrendo arrays com estruturas de repetição:

/* var lista_frutas = Array();

lista_frutas[0] = "Banana";
lista_frutas[1] = "Maça";
lista_frutas[2] = "Morango";
lista_frutas[3] = "Uva";

var y = 0;

while (y < lista_frutas.length) {
   document.write(lista_frutas[y] + "<br>");
   y++;
}

/* ======================================================================================= */

// Aula 52: criando uma tabuada (laços encadeados):

/* for (var y = 1; y <= 10; y++) {
   document.write("--------------------------------- <br> ");
   for (var x = 1; x <= 10; x++) {
      document.write(y + "x " + x + " = " + (y * x) + "<br>");
   }
}

/* ======================================================================================= */

// Aula 53: estrutura for-in:

// var listaConvidados = ['Jorge', 'Jamilton', 'José', 'Ana', 'Maria'];

/* var listaConvidados = Array();

listaConvidados['a'] = "Jorge";
listaConvidados[10] = "Jamilton";
listaConvidados['Zebra'] = "José";
listaConvidados['a'] = "Jorge";
listaConvidados[true] = "Maria";

console.log(listaConvidados);

for (var x in listaConvidados) {
   console.log('indice: ' + x + ' Valor: ' + listaConvidados[x]);
}

/* ======================================================================================= */

// Aula 54: estrutura foreach

// função do prototipe do array;

/* var listaFuncionarios = ['Viviane', 'Rosangela', 'Miguel', 'Lucas', 'Fernanda'];

var f = function(valor, indice) {
   console.log(valor, indice);
}

listaFuncionarios.forEach(f);

/* console.log(listaFuncionarios);
document.write(listaFuncionarios[3]);

listaFuncionarios.forEach(function(valor, indice, array) {
   console.log('indice: ' + indice + ' | valor: ' + valor);

   if (valor == 'Lucas') {
      array[indice] = "Um novo valor";
   }
   
   console.log(array);
});

console.log(listaFuncionarios);
document.write("<br>" + listaFuncionarios[3]); */

/* ======================================================================================= */

// Aula 54: funções: trabalhando com parametros variáveis: 

/* function soma(a, b) {
   return a + b;
}

console.log(soma(7, 7));
console.log(soma(7, 7, 9, 15)); // desconsidera os parametros adicionais
console.log(soma(7));
console.log(soma()); */

/* function soma() {
   var resultado = 0;
   // console.log(arguments); // Instrução para todas as funções JS que retorna uma espécie de array contendo a relação
   // de parametros passados para uma função
   // Representa um objeto, como uma variável local do escopo da função
   for (var i in arguments) {
      resultado += arguments[i];
   }

   return resultado;
}

console.log(soma(7, 5)); */

/* ======================================================================================= */

// Aula 55: tratamento de erros com try-catch-finally

/* var video = Array();

video[1] = Array();
video[1]['Nome'] = "Fullmetal Alchemist";
video[1]['Categoria'] = "Anime";

function getVideo() {
   try {
      console.log(video[0]['Nome']);  

   } catch (erro) {
      tratarErro(erro);
      throw new Error("Houve um erro");

   } finally {
      console.log("Sempre passa por aqui (try / catch)");
   }

   console.log("A aplicação não morreu");
}

getVideo();

function tratarErro(e) {
   console.log(e);
}

/* ======================================================================================= */

// Aula 56: BOM: browser object model, é uma API que permite acesso via JS a recursos do browser
// Não estão relacionadas a elementos HTML, e sim elementos do próprio browser

/* ======================================================================================= */

// Aula 57: BOM: windows (janela onde todo o conteúdo é renderizado)

/* function abrirPopUp() {
   var janela = window.open("http://www.google.com", "Nova_janela", 'width=200');
}

function fecharPopUp() {
   janela.close();
}

/* ======================================================================================= */

// Aula 58: Screen: atributos nativos da tela do browser

/* var altura = window.screen.availHeight;
var largura = window.screen.availWidth;

document.write("Altura: " + altura + "<br>");
document.write("Largura: " + largura)

/* ======================================================================================= */

// Aula 59: Location: fornece acesso a atributos e métodos da URL atual

// window.location.href = "http://www.google.com";

/* ======================================================================================= */

// Aula 60: BOM: Timing:

/*
   Métodos de timing: Permitem com base na definição de um intervalo de tempo, executar ações de forma programática.

   - setTimeOut(acao, tempo em milissegundos): ação executada uma vez após o tempo informado
      clarTimeout()

   - setInterval(acao, tempo em milissegundos): executar uma ação de forma constante no intervalo de tempo informado
      clarInterval()
   )
*/

// var i = 5;

/* setTimeout(function() {
   document.write("Teste");
}, 2000); */

/* setInterval(function() {
   document.write(i);
   i = i - 1;

      if (i == 0) {
         window.location.reload();
      }

}, 1000);

*/