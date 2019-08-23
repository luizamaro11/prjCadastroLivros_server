<?php

	try {
		
		$conecta = mysqli_connect("localhost", "id10375243_luizamaro11", "12345", "id10375243_cadastros");

		$codigo = $_POST['codigo'];
		$livro = $_POST['livro'];
		$autor = $_POST['autor'];
		$ano = $_POST['ano'];
		
		if($_FILES['foto1']['name'] != ''){
            $test = explode('.', $_FILES['foto1']['name']);
            $extensao = end($test);
            
            if($extensao == "jpg" || $extensao == "png"){
                $nome = rand(100,9999).'.'.$extensao;
                $local = 'foto/'.$nome;
                move_uploaded_file($_FILES['foto1']['tmp_name'], $local);
            }
        }

		$query = "update tb_livro set nm_livro = '$livro', nm_autor = '$autor', ds_ano = '$ano', uri_imagem = '$local' where codigo = $codigo";

		mysqli_query($conecta, $query);
		echo "alterado com sucesso";
		
	} catch (Exception $e) {
		echo "erro ao alterar: " . $e;
	}