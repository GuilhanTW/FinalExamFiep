<?php include "includes/header.php"; 
 $acao = "cadastrar";
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
                    <div class="formularioInput">
                        Produto:<br>
                        <input type="text" id="produto" name="produto">
                    </div>                  
                
                    <div class="formularioInput">
                        Quantidade:<br>
                        <input type="number" id="quantidade" name="quantidade">
                    </div>
                    <div class="formularioInput">
                        Utilizado:<br>
                        <input type="text" id="utiliza" name="utiliza">
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