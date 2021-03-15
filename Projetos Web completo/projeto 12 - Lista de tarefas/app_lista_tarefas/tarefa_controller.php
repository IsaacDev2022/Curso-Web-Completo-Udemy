<?php 
    require "tarefa.model.php";
    require "conexao.php";
    require "tarefa.service.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    if (isset($_GET['acao']) && $_GET['acao'] == 'inserir') {
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);
    
        $conexao = new Conexao();
    
        $tarefaService = new TarefaService($conexao ,$tarefa);
        $tarefaService->inserir();
    
        header('Location: ../app_lista_tarefas_public/nova_tarefa.php?inclusao=1');
    }

    else if ($acao == 'recuperar') {
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperar();
    }

    else if ($acao == 'atualizar') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id'])->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->atualizar();

            if ($tarefaService->atualizar()) {
                header('Location: ../app_lista_tarefas_public/todas_tarefas.php');
            }
    }

    else if ($acao == 'remover') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->remover();

        header('Location: ../app_lista_tarefas_public/todas_tarefas.php');
    }

    else if ($acao == 'marcarRealizada') {
        $tarefa = new Tarefa();
		$tarefa->__set('id', $_GET['id'])->__set('id_status', 2);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->marcarRealizada();

        header('Location: ../app_lista_tarefas_public/todas_tarefas.php');
    }

    else if ($acao == 'recuperarTarefasPendentes') {
        $tarefa = new Tarefa();
        $tarefa->__set('id_status', 1);
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefaService->recuperarTarefasPendentes();
    }
?>