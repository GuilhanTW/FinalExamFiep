<?php
include 'C:\xampp\htdocs\controleHotel\class\classCrud.php';
include_once '../includes/variaveisClienteGasto.php';

$crud = new classCrud();
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
$crud-> deleteDB(
        "clienteconta",
        "id=?",
        array($id)
);

header("Location: ../clientes.php");