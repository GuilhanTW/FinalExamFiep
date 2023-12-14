<?php
include_once '../includes/variaveisFuncionario.php';
include_once '../class/classCrud.php';

$crud = new classCrud();
$crud ->insertDB(
        "funcionario",
        "?,?,?,?,?,?,?",
        array(
            $id,
            $nome,
            $datanasc,
            $telefone,
            $funcao,
            $salario,
            $exp
        )
);

header("Location:../index.php");
