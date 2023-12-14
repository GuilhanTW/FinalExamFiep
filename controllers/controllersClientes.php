<?php
include_once '../includes/variaveisClientes.php';
include_once '../class/classCrud.php';

$crud = new classCrud();
$crud ->insertDB(
        "clientes",
        "?,?,?,?,?,?,?,?,?",
        array(
            $id,
            $nome,
            $telefone,
            $email,
            $cidade,
            $estado,
            $profissao,
            $motivo,
            $redesocial
        )
);

header("Location:../index.php");
