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

if(isset($_POST['quarto'])){
    $quarto= filter_input(INPUT_POST,'quarto',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['quarto'])){
    $quarto= filter_input(INPUT_GET,'quarto',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $quarto="";
}

if(isset($_POST['localizacao'])){
    $localizacao= filter_input(INPUT_POST,'localizacao',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['localizacao'])){
    $localizacao= filter_input(INPUT_GET,'localizacao',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $localizacao="";
}

if(isset($_POST['tamanho'])){
    $tamanho= filter_input(INPUT_POST,'tamanho',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['tamanho'])){
    $tamanho= filter_input(INPUT_GET,'tamanho',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $tamanho="";
}

if(isset($_POST['disponivel'])){
    $disponivel= filter_input(INPUT_POST,'disponivel',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['disponivel'])){
    $disponivel= filter_input(INPUT_GET,'disponivel',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $disponivel="";
}

if(isset($_POST['itens'])){
    $itens= filter_input(INPUT_POST,'itens',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['itens'])){
    $itens= filter_input(INPUT_GET,'itens',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $itens="";
}