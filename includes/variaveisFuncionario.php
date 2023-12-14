<?php
if(isset($_POST['id'])){
    $id= filter_input(INPUT_POST,'id',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['id'])){
    $id= filter_input(INPUT_GET,'id',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $id=0;
}

if(isset($_POST['nome'])){
    $nome= filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['nome'])){
    $nome= filter_input(INPUT_GET,'nome',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $nome="";
}

if(isset($_POST['datanasc'])){
    $datanasc= filter_input(INPUT_POST,'datanasc',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['datanasc'])){
    $datanasc= filter_input(INPUT_GET,'datanasc',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $datanasc="";
}

if(isset($_POST['telefone'])){
    $telefone= filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['telefone'])){
    $telefone= filter_input(INPUT_GET,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $telefone="";
}

if(isset($_POST['funcao'])){
    $funcao= filter_input(INPUT_POST,'funcao',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['funcao'])){
    $funcao= filter_input(INPUT_GET,'funcao',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $funcao="";
}

if(isset($_POST['salario'])){
    $salario= filter_input(INPUT_POST,'salario',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['salario'])){
    $salario= filter_input(INPUT_GET,'salario',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $salario="";
}

if(isset($_POST['exp'])){
    $exp= filter_input(INPUT_POST,'exp',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['exp'])){
    $exp= filter_input(INPUT_GET,'exp',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $exp="";
}