<?php
include_once '../includes/variaveisClienteGasto.php';
include_once '../class/classCrud.php';

$crud = new classCrud();
$crud ->insertDB(
        "clienteconta",
        "?,?,?,?",
        array(
            $id,
            $idcliente,
            $nomecliente,
            $valor
        )
);

header("Location:../clientes.php");
