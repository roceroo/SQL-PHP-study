<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','root');
	define('BASE','Mercado do zé');
	
	$conn = new mysqli(HOST,USER,PASS,BASE);
	
	if( mysqli_connect_errno() ){
		print_r("Conexão falhou: ",mysqli_connect_error());
		exit();
	}
?>