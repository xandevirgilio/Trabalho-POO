<?php
//capturo o objeto categoria que foi passado em $dados
$categoria = $dados['categorias'][0];
?>
<!DOCTYPE html>
<html>
<head>
	<title><h1>Detalhes da categoria</h1></title>
	<a href='index.php?acao=buscaUpdade&id=<?=$categoria->getId()?>'>Atualizar</a> 
<a href='index.php?acao=deletar&id=<?=$categoria->getId()?>'>Deletar</a>
</head>
<body>
	<div id="detalhes">
		<fieldset>
			<p>Nome: <?= ($categoria->getNome()) ?></p>
			<p>Descrição: <?=($categoria->getDescricao()) ?></p>
		</fieldset>
		<a href="javascript:window.history.go(-1)">Voltar</a>
</a>
	</div>
	
</body>
</html>







