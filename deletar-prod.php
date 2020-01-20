<?php
	$sql = "DELETE FROM produto WHERE id_produto='".$_REQUEST['id']."'";
	$act = $conn->query($sql);
	echo $sql;
	if($act==true){
		header('Location:http://localhost/aa/?page=listar-produtos');
	}else{
		echo "<div class='alert alert-danger'>Algo deu errado</div>";
	}
?>