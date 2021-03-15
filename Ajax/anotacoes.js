// ********************************************************************** //
/* 
    Aula 1: introdução ao Ajax:
    . Uma metodologia de programação que possibilita a comunicação assíncrona entre front-end e back-end de aplicações 
    web.
    . Inicialmente disponibilizado na versão 4.0 do Internet Explorer.

    . Potencializou a criação do conceito de web 2.0.

    . Comunicação entre front e back antigamente era xml.

    . XML e JSON são apenas notações, formas de escrita, e o Ajax é uma metodologia.

    . No modelo tradicional, o cliente trava após realizar uma requisição, pois
    ele fica a espera de uma resposta do servidor.

    . No Ajax, a aplicação através da captura de um evento, realiza um XMLHTTP request (objeto que gerencia tudo o servidor) 
    para o servidor, mas nesse caso, a aplicação não fica guardada enquanto o client aguarda a resposta.

    . Através dos elementos do DOM, podemos pegar a resposta do servidor e exibi-la para o cliente.
*/

// ********************************************************************** //
/* 
    Aula 2: O que são requisições síncronas e assíncronas.
    . Síncrona: apenas uma requisição por vez, a próxima é apenas será enviada quando o servidor enviar 
    a resposta.
    . Assíncrona: as requisições são praticamente simultaneas, disparando diversas delas.
*/

// ********************************************************************** //
/* 
    Aula 3: apenas extraindo arquivos zip para as aulas.

*/

// ********************************************************************** //
/* 
    Aula 4: testando requisições síncronas.
*/

// ********************************************************************** //
/* 
    Aula 5: efetuando requisições HTTP via XMLHTTPRequest
    . Requisições assíncronas entre o front-end e o back-end.
    . A pŕopria aplicação cuidará do processamento de requisição e resposta.
    . Uma única página requisitará o conteúdo dinamico.
    . A aplicação não precisa dar refresh.
    . XML é um objeto JS.
*/

// ********************************************************************** //
/* 
    Aula 6: estados de requisição
    . ReadyStade:
        - 0: request not initialized. (requisição não iniciada)
        - 1: server connection established. (conexão estabelecida com o servidor)
        - 2: request received. (requisição recebida)
        - 3: processing request. (processando requisição)
        - 4: request finished and response is ready. (requisição finalizada)

    . Status != State.
*/

// ********************************************************************** //
/* 
    Aula 7: aplicando um loading
    . Anexando um gif de loading
*/

// ********************************************************************** //
/* 
    Aula 8: status da requisição.
    . A resposta da requisição pode ter diversos status diferentes.
    . A resposta é diferente da requisição.
    . Grupos de status:
        - Mensagens de redirecionamento: range 100.
        - Mensagens de sucesso: range 200.
        - Mensagens de redirecionamento: range 300.
        - Mensagens de erros do cliente: range 400.
        - Mensagens de erros do servidor: range 500.
*/

// ********************************************************************** //
/* 
    Aula 9: ResponseTest
*/

// ********************************************************************** //
/*
    Aula 9: o que é XML?
    . Extensible Markup Language. (linguagem de marcação).
    . Estruturar e descrever informações.
*/

// ********************************************************************** //
/*
    Aula 10 até 15: Recuperando arquivo XML do servidor via HTTP.
    . Projeto catálogo de filmes
*/