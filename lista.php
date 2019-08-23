<?php

	try{

		$conecta = mysqli_connect("localhost", "id10375243_luizamaro11", "12345", "id10375243_cadastros");

		$query = "select * from tb_livro";

		$resultado = mysqli_query($conecta, $query);

		$registro = array(
			'livros' => array() 
		);

		$i = 0;

		while($linha = mysqli_fetch_assoc($resultado)){
			$registro['livros'][$i] = array(
				'codigo' => $linha['codigo'],
				'titulo' => $linha['nm_livro'],
				'autor' => $linha['nm_autor'],
				'ano' => $linha['ds_ano'],
			);
			$i++;
		}

		echo json_encode($registro);

	} catch (Exception $e) {
		echo "Erro ao buscar: ".$e;
	}