<?php
include_once '../includes/variaveisEstoque.php';
include_once '../class/classCrud.php';


$crud = new classCrud();
if($acao =='cadastrar'){
    $crud ->insertDB(
            "estoque",
            "?,?,?,?",
            array(
                $id,
                $produto,
                $quantidade,
                $utiliza
            )
    );
    
}elseif($acao =='editar'){
    $crud ->updateDb(
        "estoque",
        "produto=?,
        quantidade=?,
        utiliza=?",
        "id=?",
        array(
            $produto,
            $quantidade,
            $utiliza,            
            $id
    )
    );
}

header("Location:../estoque.php");


