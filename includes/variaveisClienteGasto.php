<?php
if(isset($_POST['id'])){
    $id= filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['id'])){
    $id= filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id=0;
}

if(isset($_POST['idcliente'])){
    $idcliente= filter_input(INPUT_POST,'idcliente',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['idcliente'])){
    $idcliente= filter_input(INPUT_GET,'idcliente',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $idcliente=0;
}

if(isset($_POST['nomecliente'])){
    $nomecliente= filter_input(INPUT_POST,'nomecliente',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['nomecliente'])){
    $nomecliente= filter_input(INPUT_GET,'nomecliente',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $nomecliente=0;
}

if(isset($_POST['valor'])){
    $valor= filter_input(INPUT_POST,'valor',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['valor'])){
    $valor= filter_input(INPUT_GET,'valor',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $valor=0;
}