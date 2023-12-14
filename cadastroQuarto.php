<?php include "includes/header.php"; 
 $acao = "cadastrar";
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
                    <div class="formularioInput">
                        Quarto:<br>
                        <input type="text" id="quarto" name="quarto">
                    </div>                  
                
                    <div class="formularioInput">
                        Localizacao:<br>
                        <input type="text" id="localizacao" name="localizacao">
                    </div>
                    <div class="formularioInput">
                        Tamanho:<br>
                        <input type="text" id="tamanho" name="tamanho">
                    </div>
                    <div class="formularioInput">
                        Disponibilidade:<br>
                        <input type="text" id="disponivel" name="disponivel">
                    </div>
                    <div class="formularioInput">
                        itens:<br>
                        <input type="text" id="itens" name="itens">
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