<?php
if(isset($_POST['acao'])){
    $acao = filter_input(INPUT_POST,'acao',FILTER_SANITIZE_SPECIAL_CHARS);  
}elseif(isset ($_GET['acao'])){
    $acao = filter_input(INPUT_GET,'acao',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $acao="";
}

if(isset($_POST['id'])){
    $id= filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['id'])){
    $id= filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id=0;
}

if(isset($_POST['produto'])){
    $produto= filter_input(INPUT_POST,'produto',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['produto'])){
    $produto= filter_input(INPUT_GET,'produto',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $produto="";
}

if(isset($_POST['quantidade'])){
    $quantidade= filter_input(INPUT_POST,'quantidade',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['quantidade'])){
    $quantidade= filter_input(INPUT_GET,'quantidade',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $quantidade="";
}

if(isset($_POST['utiliza'])){
    $utiliza= filter_input(INPUT_POST,'utiliza',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['utiliza'])){
    $utiliza= filter_input(INPUT_GET,'utiliza',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $utiliza="";
}