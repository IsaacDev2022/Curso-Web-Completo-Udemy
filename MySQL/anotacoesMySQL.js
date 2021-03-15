// ************************************************************************* //
/* Aula 1:

    O que é MySQL?:
    . Banco de dados relacional, serve como interface entre as aplicações e um servidor de banco de dados.
    . SQGB: sistema gerenciador de banco de dados.
    . SQL: setructured query language ou linguagem de consulta estruturada, é uma linguagem para
    a definição, manipulação, organização e armazenamento de dados persistentes em um banco de dados.
    . Modelo relacional é um tipo de estrutura de dados.
*/

// ************************************************************************* //
/* Aula 2:

    . Um pouco mais sobre SQL:
    - DDL: linguagem de definição de dados
    - DML: linguagem de manipulação de dados
    - DCL: linguagem de controle e dados
    - DTL: linguagem de transação de dados
    - DQL: linguagem de consulta de dados
*/

// ************************************************************************* //
/* Aula 3:

    . PHPmyAdmin: ferramenta web para administrar o SQGB MySQL
*/

// ************************************************************************* //
/* Aula 4:

    . Bancos de dados são coleções organizadas de dados que se relacionam de algum modo.
    . Agrupar registros em um domínio específico.
    . Instruções:
    - Para criar bando de dados:
    CREATE DATABASE <nome_bd>;

    - Para excluir:
    DROP DATABASE <nome_bd>;
*/

// ************************************************************************* //
/* Aula 5:

    . Tabela: unidade de armazenamento, semelhante a planilhas.
    . São constituídas por colunas e linhas que armazenam registros.
    . Cada coluna é responsável pelo armazenamento de um tipo de dados específico, e
    isso é feito na definição da tagela.

    . Tipos de dados:
    . Campos de texto:
        - Text (tamanho variável que armazena uma grande quandidade de caracterse).
        - Varchar (tamanho variável que armazena de 0 até 255 caracters).
        - Char (tamanho fixo que armazena de 0 até 255 caracters).

    . Campos numéricos:
        - Int (valores numéricos inteiros).
        - Float (valores numéricos fracionados).

    . Campos de data de hora:
        - Date (data no formato yyyy/mm/dd).
        - Time (hora).
        - Datetime (combinação dos dois anteriores).
*/

// ************************************************************************* //
/* Aula 6:

    . Instruções:

    - Para criar tabelas:
    CREATE TABLE <nome_tabela> (
        dados <tipo_dados>;
    )

    - Para excluir tabelas:
    DROP TABLE <nome_tabela>
*/

// ************************************************************************* //
/* Aula Extra:

        - CHAR - fixo:
            - Vantagem: mais rápido para pesquisas;
            - Desvantagem: quando mau utilizado pode reservar espaço desnecessário em disco.
        - VARCHAR - variável
            - Vantagem: por ser de tamanho variável ocupa menos espaço em disco.
            - Desvantagem: por ser de um tamanho variável possui um meta dado com a instrução
            de finalização do texto, o que produz, em relação ao CHAR, maior lentidão em pesquisas.
*/

// ************************************************************************* //
/* Aula 7:

    . Editando o nome de tabelas já feitas:
    RENAME TABLE <nome_atual> TO <nome_novo>
*/

// ************************************************************************* //
/* Aula 7:
    
    . Editando, incluindo e removendo colunas de tabelas.

    . ALTER TABLE:
        - ADD: pemite a inclusão de uma nova coluna em uma tabela.
        - CHANGE: permite a alteração do nome de uma coluna e de suas propriedades, como por exemplo o seu tipo.
        - DROP: permite a remoção de uma coluna da tabela.
*/

// ************************************************************************* //
/* Aula 7:
    . Inserção 
    INSERT INTO <nome_tabela> (<colunas>) VALUE <valores>
*/

// ************************************************************************* //
/* Aula 8:
    . Consultas:
    SELECT <colunas> FROM <tabela>
    OBS: não utilize o * nas consultas, pelo menos não na maioria dos casos.
*/

// ************************************************************************* //
/* Aula 9:
    . Utilização de filtros para consultas de registros.
    . È como se fosse uma condicional do SQL.
    . Ele transforma uma relação de registros em informação.
    . Cláusula WHERE: indica para o SQGB que para aquela consulta existem filtros que devem ser levados em consideração.

    Operadores de comparação:
    =
    >
    >=
    <
    <=

    Operadores lógicos:
    AND
    OR
*/

// ************************************************************************* //
/* Aula 10:
        Gerando valores aleatórios para a tabela de alunos
*/

// ************************************************************************* //
/* Aula 11:
    Filtros com operadores de comparação: 
*/

// ************************************************************************* //
/* Aula 12:
    Filtros com operadores lógico: 
*/

// ************************************************************************* //
/* Aula 14:
    . Operador BETWEEN: utilizado para filtrar registros cujo valo de uma coluna está entre um intervalo específico, 
    sendo os tipos do tipo number ou date.
*/

// ************************************************************************* //
/* Aula 14:
    . Operador IN: filtros com base em uma lista de possibilidades.
    . retorno de registros com base nas possibilidades especificadas.
*/

// ************************************************************************* //
/* Aula 14:
    . Operador LIKE: realzier filtros com base em uma pesquisa de um conjunto de caracteres dentro de uma coluna textual.
    . Caracteres curingas:
        - Indica que pode haver a existencia de qualquer conjunto de caracter no texto.
        - Indica que pode haver a existencia de um ou mais caracteres em uma posição especícica do texto.
*/

// ************************************************************************* //
/* Aula 14:
    . Order by: ordenar resultado da consulta.
        - ASC: crescente (default)
        - DESC: decrescente.
*/

// ************************************************************************* //
/* Aula 14:
    . Limitando a quantidade de registros do retorno da consulta:
        - LIMIT: limitar a quantidade de registros.
        - OFFSET: deslocamento, a apartir de qual registro deveremos retornar certa quantidade.
*/

// ************************************************************************* //
/* Aula 14:
    . Funções de agregação:
        - MIN (coluna): menor valor.
        - MAX (coluna): maior valor.
        - AVG (coluna): média dos registros.
    . São definidas no bloco SELECT da query.
*/

// ************************************************************************* //
/* Aula 15:
    . Novas funções de agregação:
        - SUM (coluna): retorna a soma dso registros.
        - COUNT (colune): retorna a quantidade de registros.
*/

// ************************************************************************* //
/* Aula 16:
    . Group By: agrupamento de registros.
    . Costuma ser utilizado em conjunto juntamente com funções de agregação.
    . Será posicionado após o WHERE.
*/

// ************************************************************************* //
/* Aula 16:
    . Instrução HAVING: aplicando filtros sobre resultado de colunas agrupadas, ou seja,
    ele depende exclusivamente do GROUP BY.
    . O WHERE está em um nível anterior de precedencia.
*/

// ************************************************************************* //
/* Aula 17:
    . UPDATE: atualização de registros em tabelas
    UPDATE <tabela>
    SET <coluna> = valor
    WHERE <filtro>
*/

// ************************************************************************* //
/* Aula 18:
    . DELETE: excluir registros de tabelas.
    DELETR FROM <tabela> WHERE <filtro>
*/

// ************************************************************************* //
/* Aula 19:
    . Chaves primárias: identificador de registro na tabela.
    . Chaves estrangeiras: referencia de uma chave primária de outra tabela.
*/