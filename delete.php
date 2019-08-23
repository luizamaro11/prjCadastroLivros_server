<?php

	try {
		$conecta = mysqli_connect("localhost", "id10375243_luizamaro11", "12345", "id10375243_cadastros");

		$codigo = $_POST['codigo'];

		$query = "delete from tb_livro where codigo = $codigo";

		mysqli_query($conecta, $query);
		
		echo "deletado com sucesso";	
	} catch (Exception $e) {
		echo "erro ao deletar: " . $e;
	}
	