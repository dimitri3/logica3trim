<?php
	function listaTarefas(){
		$tarefas = array();
		$dados=file("dados/tarefas.csv");
		foreach ($dados as $posicao => $linha) {
			if ($posicao!=0) {
				$colunas=explode(",", $linha);
				$tarefa['turma']=$colunas[0];
				$tarefa['data']=$colunas[1];
        $tarefa['disciplina']=$colunas[2];
        $tarefa['titulo']=$colunas[3];
        $tarefa['descricao']=$colunas[4];

				$tarefas[]=$tarefa;
			}
		}
		return $tarefas;
	}


	function buscaTarefas($codigo){
		$tarefa = array();
		$dados = file("dados/tarefas.csv");

		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0]==$codigo) {
        $tarefa['turma']=$colunas[0];
				$tarefa['data']=$colunas[1];
        $tarefa['disciplina']=$colunas[2];
        $tarefa['titulo']=$colunas[3];
        $tarefa['descricao']=$colunas[4];
			}
		}
		return $tarefa;
	}


?>
