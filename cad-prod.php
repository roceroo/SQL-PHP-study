<h1>Cadastrar Produto</h1>
<form action="?page=salvar-prod" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<label>Nome do Produto:</label>
		<input type="text" name="nome-produto" class="form-control">
		<label>Preço do Produto:</label>
		<input type="text" name="preco-prod" class="form-control"> 
		<label>Código de barras</label>
		<input type="number" name="cod-barra" class="form-control">
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-success">Cadastrar</button>
	</div>
</form>
<style>
	label{
		margin-left:20px;
	}
	input{
		max-width: 50%;
		margin-left: 20px;
	}
</style>