<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';
 
if(isset($_GET['id'])){
    $acao = "editar";
    $crud= new classCrud();
    $bFetch = $crud->selectDB(
            "*", 
            "estoque", 
            "where id=?", 
            array( $_GET['id'])
            );
    $fetch = $bFetch -> Fetch(PDO :: FETCH_ASSOC);
    $id= $fetch['id'];
    $produto= $fetch['produto'];
    $quantidade= $fetch['quantidade'];
    $utiliza= $fetch['utiliza'];
    
   }


?>


<div class="content">
            <div class="resultado">
                
            </div>
            <div class="formulario">
                <h1 class="center">Cadastro</h1>
                <form action="controllers/controllersEstoque.php"
                      method="post" 
                      name="formCadastro" 
                      id="formCadastro">
                    <input type="hidden" name="acao" id="acao" value="<?php echo $acao; ?>">
                    <input type="hidden" name="id" id="acao" value="<?php echo $id; ?>">
                    <div class="formularioInput">
                        Produto:<br>
                        <input type="text" id="produto" name="produto" value="<?php echo $produto;?>" readonly>
                    </div>                  
                
                    <div class="formularioInput">
                        Quantidade:<br>
                        <input type="number" id="quantidade" name="quantidade" value="<?php echo $quantidade;?>" >
                    </div>
                    <div class="formularioInput">
                        Utilizado:<br>
                        <input type="text" id="utiliza" name="utiliza" value="<?php echo $utiliza;?>" readonly>
                    </div>
                    
                    <div class="formularioInput formularioInput100 center">
                        <input class="button" type="submit" value="<?php echo $acao;?>">
                        
                    </div>

                </form>
            </div>
        </div>
        
        <?php

        ?>
<?php include "includes/footer.php"; ?>
