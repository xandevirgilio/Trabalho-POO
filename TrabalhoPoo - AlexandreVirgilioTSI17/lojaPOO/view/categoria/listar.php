<script>
    $(document).ready(function(){
        $(".btn-excluir").click(function(){
            if (window.confirm("Deseja excluir a categoria?")){
                window.location = "index.php?acao=excluir&id="+this.dataset.value;
            }
        });
    });
</script>

<h1>Lista de Categorias</h1>
<a href="index.php?acao=incluir" id="linkNewCat">
<i class="fas fa-plus-square"></i><span id="newCat">Inserir Categoria...</span></a>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
<?php

    $categorias = $dados['categorias'];
    foreach ($categorias as $categoria){
        echo '<tr>';
        echo '<td>'.$categoria->getId().'</td>';
        echo '<td><a href="index.php?acao=detalhes&id='.$categoria->getId().'">'.$categoria->getNome().'</a></td>';
        echo '<td>'.$categoria->getDescricao().'</td>';
        echo '<td><a href="index.php?acao=atualizar&id='.$categoria->getId().'"><i class="fas fa-pen-square"></i></td>';
        echo '<td><a href="#" data-value="'.$categoria->getId().'" class="btn-excluir"><i class="fas fa-trash-alt"></i></i></td>';
        echo '</tr>';
    }
?>
    </tbody>
</table>


