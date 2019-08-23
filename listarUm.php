<?php

	try{

		$conecta = mysqli_connect("localhost", "id10375243_luizamaro11", "12345", "id10375243_cadastros");

		$codigo = $_POST['codigo'];

		$query = "select * from tb_livro where codigo = $codigo";

		$resultado = mysqli_query($conecta, $query);

		while($linha = mysqli_fetch_assoc($resultado)){
			$registro = array(
				'livro' => array(
					'codigo' => $linha['codigo'],
					'titulo' => $linha['nm_livro'],
					'autor' => $linha['nm_autor'],
					'ano' => $linha['ds_ano'],
					'imagem' => $linha['uri_imagem'],
				)
			);
		}

		echo json_encode($registro);

	} catch(Exception $e){
		echo "Erro ao buscar: " . $e;
	}
