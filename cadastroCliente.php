<?php include "includes/header.php"; 
 
?>

        
        <div class="content">
            <div class="resultado">
                
            </div>
            <div class="formulario">
                <h1 class="center">Cadastro</h1>
                <form action="controllers/controllersClientes.php"
                      method="post" 
                      name="formCadastro" 
                      id="formCadastro">
                    <div class="formularioInput">
                        Nome:<br>
                        <input type="text" id="nome" name="nome">
                    </div>
                    
                    <div class="formularioInput">
                        Telefone:<br>
                        <input type="text" id="telefone" name="telefone">
                    </div>
                    <div class="formularioInput">
                        email:<br>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="formularioInput">
                        Cidade:<br>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div class="formularioInput">
                        Estado:<br>
                        <input type="text" id="estado" name="estado">
                    </div>
                    <div class="formularioInput">
                        profissao:<br>
                        <input type="text" id="profissao" name="profissao">
                    </div>
                    <div class="formularioInput">
                        Motivo:<br>
                        <input type="text" id="motivo" name="motivo">
                    </div>
                    <div class="formularioInput">
                        Rede social:<br>
                        <input type="text" id="redesocial" name="redesocial">
                    </div>

                    <div class="formularioInput formularioInput100 center">
                        <input class="button" type="submit" value="cadastrar">
                        
                    </div>

                </form>
            </div>
        </div>
        
        <?php

        ?>
<?php include "includes/footer.php"; ?>
