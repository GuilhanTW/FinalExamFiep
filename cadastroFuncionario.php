<?php include "includes/header.php"; ?>

        
        <div class="content">
            <div class="resultado">
                
            </div>
            <div class="formulario">
                <h1 class="center">Cadastro</h1>
                <form action="controllers/controllersFuncionario.php"
                      method="post" 
                      name="formCadastro" 
                      id="formCadastro">
                    <div class="formularioInput">
                        Nome:<br>
                        <input type="text" id="nome" name="nome">
                    </div>
                    
                    <div class="formularioInput">
                        Data de Nacimento:<br>
                        <input type="date" id="datanasc" name="datanasc">
                    </div>
                    <div class="formularioInput">
                        telefone:<br>
                        <input type="number" id="telefone" name="telefone">
                    </div>
                    <div class="formularioInput">
                        Funçao:<br>
                        <input type="text" id="funcao" name="funcao">
                    </div>
                    <div class="formularioInput">
                        Salario:<br>
                        <input type="number" id="salario" name="salario">
                    </div>
                    <div class="formularioInput">
                        experiencia:<br>
                        <input type="text" id="exp" name="exp">
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