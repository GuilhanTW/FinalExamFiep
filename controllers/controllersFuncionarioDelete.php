<?php
include 'C:\xampp\htdocs\senai\FinalExamFiep\class\classCrud.php';
include_once '../includes/variaveisFuncionario.php';

$crud = new classCrud();
$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
$crud-> deleteDB(
        "funcionario",
        "id=?",
        array($id)
);

header("Location: ../funcionarios.php");