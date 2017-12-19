<?php

	function buscaUser($login,$senha){
		$user = array();
//abrir arquivo
		$dados = file("dados/usuarios.csv");
//percorrer
		foreach ($dados as $linha) {
			$colunas = explode(",", $linha);
			if ($colunas[2]==$login && $colunas[3]==$senha) {
				$user['cod']=$colunas[0];
				$user['nome']=$colunas[1];
				$user['login']=$colunas[2];
				$user['senha']=$colunas[3];
				$user['tipo']=$colunas[4];
				$user['foto']=$colunas[5];
			}
		}

		return $user;
	}

//print_r(buscaUser('admin'));

	function listaUsers(){
		$users = array();

		//abrir arquivo
		$dados = file("dados/usuarios.csv");
		//percorrer
		foreach ($dados as $posicao => $linha) {
			if ($posicao!=0) {
				$colunas = explode(",", $linha);
				$user['cod']=$colunas[0];
				$user['nome']=$colunas[1];
				$user['login']=$colunas[2];
				$user['senha']=$colunas[3];
				$user['tipo']=$colunas[4];
				$user['foto']=$colunas[5];

				$users[] = $user;
			}

		}

		return $users;
	}



?>
