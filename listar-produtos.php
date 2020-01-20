<h1>Listar Produtos</h1>
<?php
	$sql = "SELECT * FROM produto";
	
	$res = $conn->query($sql);
	
	$qtd = $res->num_rows;
	
	if($qtd > 0){
		print "<table class='table table-striped table-hover'>";
		echo "<tr>";
		echo "<th>#</th>";
		echo "<th>Nome do Produto</th>";
		echo "<th>Preço</th>";
		echo "<th>Código de barra</th>";
		echo "<th>Ações</th>";
		echo "</tr>";
		echo "Foram encontrados <b>$qtd</b> resultados";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>". $row->id_produto."</td>";
			print "<td>". $row->nome_produto."</td>";
			echo "<td>R$:". $row->preco_produto ."</td>";
			echo "<td>". $row->codigo_barra ."</td>";
			echo "<td><a class='btn btn-danger' href='?page=deletar-prod&id=".$row->id_produto."' role='button'>Deletar</a></td>";
			print "</tr>";
		}
		
	}else{
		echo "Não foram encontrados resultados";
	}
	echo '</table>'
?>