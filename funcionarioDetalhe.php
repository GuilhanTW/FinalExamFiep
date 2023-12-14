<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


?>

<div class="content">
    <?php
    $crud = new classCrud();
    $idUser = filter_input(INPUT_GET,'id', FILTER_SANITIZE_SPECIAL_CHARS);
    $bFetch = $crud ->selectDB(
            "*",
            "funcionario",
            "WHERE id =?",
            array ($idUser)
    );
    $fetch = $bFetch-> fetch(PDO::FETCH_ASSOC);
        
    ?>
    <div class="visualizacao">
    <h1>DADOS DO FUNCIONARIO</h1>
    <hr>
    <strong>NOME:</strong><?php echo $fetch ['nome'];?><br>
    <strong>DATA NASCIMENTO:</strong><?php echo $fetch ['datanasc'];?><br>
    <strong>TELEFONE:</strong><?php echo $fetch ['telefone'];?><br>
    <strong>FUNCAO:</strong><?php echo $fetch ['funcao'];?><br>
    <strong>SALARIO:</strong><?php echo $fetch ['salario'];?><br>
    <strong>EXP:</strong><?php echo $fetch ['exp'];?><br>
    <strong>NOTAS:</strong><br>
    <div class="formularioInput formularioInput100 center">
        <a href="funcionarios.php"> <img src="src/keyboard.svg" alt="return icon"/>     </a>
    </div>
</div>
</div>