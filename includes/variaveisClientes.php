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

if(isset($_POST['telefone'])){
    $telefone= filter_input(INPUT_POST,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['telefone'])){
    $telefone= filter_input(INPUT_GET,'telefone',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $telefone="";
}

if(isset($_POST['email'])){
    $email= filter_input(INPUT_POST,'email',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['email'])){
    $email= filter_input(INPUT_GET,'email',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $email="";
}
if(isset($_POST['cidade'])){
    $cidade= filter_input(INPUT_POST,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['cidade'])){
    $cidade= filter_input(INPUT_GET,'cidade',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $cidade="";
}
if(isset($_POST['estado'])){
    $estado= filter_input(INPUT_POST,'estado',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['estado'])){
    $estado= filter_input(INPUT_GET,'estado',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $estado="";
}

if(isset($_POST['profissao'])){
    $profissao= filter_input(INPUT_POST,'profissao',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['profissao'])){
    $profissao= filter_input(INPUT_GET,'profissao',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $profissao="";
}

if(isset($_POST['motivo'])){
    $motivo= filter_input(INPUT_POST,'motivo',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['motivo'])){
    $motivo= filter_input(INPUT_GET,'motivo',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $motivo="";
}

if(isset($_POST['redesocial'])){
    $redesocial= filter_input(INPUT_POST,'redesocial',FILTER_SANITIZE_SPECIAL_CHARS);
    
}elseif(isset($_GET['redesocial'])){
    $redesocial= filter_input(INPUT_GET,'redesocial',FILTER_SANITIZE_SPECIAL_CHARS);
}else{
    $redesocial="";
}
?>