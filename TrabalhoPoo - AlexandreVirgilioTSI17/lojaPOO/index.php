<?php

require_once "controller/CategoriaController.php";
// require_once "model/CategoriaDAO.php";

//ROTAS -

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index':
        $cat = new CategoriaController();
        $cat->principal();
        exit;
    case 'detalhes':
        //pega o ID enviado
        $id = $_GET['id'];
        //instancia o controlador
        $cat = new CategoriaController();
        //chama o método
        $cat->detalhes($id);
        exit;
    case 'incluir':
        $cat = new CategoriaController();
        $cat->incluir();
        exit;
    case 'gravaInserir':
        //pegar dados do POST
        $categoriaNova = new Categoria();
        $categoriaNova->setNome($_POST['nome']);
        $categoriaNova->setDescricao($_POST['descricao']);
        $cat = new CategoriaController();
        $cat->inserir($categoriaNova);
        exit;

    case 'buscaUpdate':
            $id=$_GET['id'];
            $cat = new CategoriaController();
            $cat->buscaUpdate($id);
            exit;

    case 'gravaUpdate':
            $categoriaUpdate = new Categoria();
            $categoriaUpdate->setId($_POST['id']);                    
            $categoriaUpdate->setNome($_POST['nome']);
            $categoriaUpdate->setDescricao($_POST['descricao']);
            $cat = new CategoriaController();
            var_dump($categoriaUpdate);
            $cat->gravaUpdate($categoriaUpdate);
            exit;

    case 'deletar':
            $id=$_GET['id'];
            $cat = new CategoriaController();
            $cat->deletar($id);
            exit;

    default:
        echo "Operação inválida";                    


}





