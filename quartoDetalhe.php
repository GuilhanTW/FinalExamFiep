<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';
 
if(isset($_GET['id'])){
    $acao = "Atualizar";
    $crud= new classCrud();
    $bFetch = $crud->selectDB(
            "*", 
            "quartos", 
            "where id=?", 
            array( $_GET['id'])
            );
    $fetch = $bFetch -> Fetch(PDO :: FETCH_ASSOC);
    $id= $fetch['id'];
    $quarto= $fetch['quarto'];
    $localizacao= $fetch['localizacao'];
    $tamanho= $fetch['tamanho'];
    $disponivel= $fetch['disponivel'];
    $itens= $fetch['itens'];
    
   }

?>

<div class="content">
            <div class="resultado">
                
            </div>
            <div class="formulario">
                <h1 class="center">Cadastro</h1>
                <form action="controllers/controllersQuarto.php"
                      method="post" 
                      name="formCadastro" 
                      id="formCadastro">
                    <input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
                    <input type="hidden" name="id" id="acao" value="<?php echo $id; ?>">
                    <div class="formularioInput">
                         Quarto:<br>
                        <input type="text" id="quarto" name="quarto" value="<?php echo $quarto;?>" readonly>
                    </div>                  
                
                    <div class="formularioInput">
                    localizacao:<br>
                        <input type="text" id="localizacao" name="localizacao" value="<?php echo $localizacao;?>" readonly>
                    </div>
                    <div class="formularioInput">
                    Tamanho:<br>
                        <input type="text" id="tamanho" name="tamanho" value="<?php echo $tamanho;?>" readonly>
                    </div>
                    <div class="formularioInput">
                        Disponibilidade:<br>
                        <input type="text" id="disponivel" name="disponivel" value="<?php echo $disponivel;?>">
                    </div>
                    <div class="formularioInput">
                    Itens:<br>
                        <input type="text" id="itens" name="itens" value="<?php echo $itens;?>" readonly>
                    </div>
                    
                    <div class="formularioInput formularioInput100 center">
                        <input type="submit" value="<?php echo $acao;?>">
                        
                    </div>

                </form>
            </div>
        </div>
        
        <?php

        ?>
<?php include "includes/footer.php"; ?>