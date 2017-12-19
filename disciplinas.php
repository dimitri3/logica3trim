<?php
	function listaDisciplinas(){
		$disciplinas = array();
		$dados=file("dados/disciplinas.csv");
		foreach ($dados as $posicao => $linha) {
			if ($posicao!=0) {
				$colunas=explode(",", $linha);
				$disciplina['codigo']=$colunas[0];
				$disciplina['nome']=$colunas[1];

				$disciplinas[]=$disciplina;
			}
		}
		return $disciplinas;
	}


	function buscaDisciplinas($codigo){
		$disciplina = array();
		$dados = file("dados/disciplinas.csv");

		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[0]==$codigo) {
				$disciplina['codigo']=$colunas[0];
				$disciplina['nome']=$colunas[1];
			}
		}
		return $disciplina;
	}

	function listaOfertas($ano, $turma){
		$ofertas= array();
		$dados=file("dados/ofertas.csv");
		foreach ($dados as $posicao => $linha) {
			$colunas=explode(",", $linha);
			if ($colunas[0]==$ano and $colunas[1]==$turma) {
				$oferta['ano']=$colunas[0];
				$oferta['turma']=$colunas[1];
				$oferta['cod_disciplina']=$colunas[2];
				$oferta['cod_professor']=$colunas[3];
				$oferta['nome_disciplina']=$colunas[4];
				$ofertas[]=$oferta;
			}
		}
		return $ofertas;
	}

?>
