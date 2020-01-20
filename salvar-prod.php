<?php
	switch($_REQUEST["acao"]){
		case "cadastrar":
			$sql = "INSERT INTO produto (nome_produto, preco_produto, codigo_barra) VALUES ('".$_REQUEST["nome-produto"]."', '".$_REQUEST["preco-prod"]."', '".$_REQUEST["cod-barra"]."')";
			$res = $conn->query($sql);
			
			if($res==true){
				print "<br><div class='alert alert-success'>Foi cadastrado com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar.</div>";
			}
		break;
	}
?>