<?php include "includes/header.php";
    include_once 'class/classCrud.php'; 


    if(isset($_GET['id'])){
        $crud= new classCrud();
        $bFetch = $crud->selectDB(
                "*", 
                "clientes", 
                "where id=?", 
                array( $_GET['id'])
                );
        $fetch = $bFetch -> Fetch(PDO :: FETCH_ASSOC);
        $id= $fetch['id'];
        $nome= $fetch['nome'];
            }
    
        


?>

        
        <div class="content">
            <div class="resultado">
                
            </div>
            <div class="formulario">
                <h1 class="center">Cadastre utilizacao de servico</h1>
                <form action="controllers/controllersClienteGasto.php"
                      method="post" 
                      name="formCadastro" 
                      id="formCadastro">
                    <div class="formularioInput">
                        <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $id; ?>" readonly>
                        <input type="hidden" id="nomecliente" name="nomecliente" value="<?php echo $nome;?>" readonly>
                        Nome:<br>
                        <input type="text" id="nome" name="nome" value="<?php echo $nome;?>" readonly>
                    </div>                    
                    <div class="formularioInput">
                        Valor:<br>
                        <input type="text" id="valor" name="valor">
                    </div>
                    <div class="formularioInput formularioInput100 center">
                        <input class="button" type="submit" value="cobrar">
                        
                    </div>

                </form>
            </div>
        </div>
        