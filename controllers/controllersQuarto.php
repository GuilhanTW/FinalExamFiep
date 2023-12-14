<?php
include_once '../includes/variaveisQuarto.php';
include_once '../class/classCrud.php';


$crud = new classCrud();
if($acao =='cadastrar'){
    $crud ->insertDB(
            "quartos",
            "?,?,?,?,?,?",
            array(
                $id,
                $quarto,
                $localizacao,
                $tamanho,
                $disponivel,
                $itens

            )
    );
    
}elseif($acao=='Atualizar'){
    $crud->updateDb(
        "quartos",
        "quarto=?,
        localizacao=?,
        tamanho=?,
        disponivel=?,
        itens=?",
        "id=?",
        array(
            $quarto,
            $localizacao,
            $tamanho,
            $disponivel,
            $itens,
            $id
        )    
    );
}

header("Location:../quarto.php");
