<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


?>


<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Valor a Pagar</th>
      <th scope="col">Pagar</th>

    </tr>
    <?php
        $crud = new classCrud();
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $bFetch= $crud->selectDB(
           "clientes.id, clientes.nome, clienteconta.id, clienteconta.idcliente, clienteconta.valor",
           "clienteconta",
           "INNER JOIN clientes on (clientes.id=clienteconta.idcliente)  WHERE idcliente=?",
           array($id)
        );
        while($fetch= $bFetch->fetch(PDO::FETCH_ASSOC)){
            ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['nome'];?></th>
      <td>BRL<?php echo $fetch['valor'];?></td> 
      <td>
      <a href="<?php echo "controllers/controllersClienteGastoDelete.php?id={$fetch['id']}"; ?>"> Pago </a>
      </td>
    </tr>
          
    <?php
        
        
        }
        
        
        ?>
  </tbody>
</table>
<table class="table table-dark table-hover">
<thead>
    <tr>
      <th scope="col"></th>
      <th scope="col"></th>
      <th scope="col"></th>     

    </tr>
  <thead>
<?php         $bFetch= $crud->selectDB(
          "clientes.id, clienteconta.id, clienteconta.valor, SUM(valor) AS valortotal",
          "clienteconta",
         "INNER JOIN clientes on (clientes.id=clienteconta.idcliente)  WHERE idcliente=?",
         array($id)
        );

        $fetch= $bFetch->fetch(PDO::FETCH_ASSOC);
        
?>
  </thead>
  <tbody>
    <tr>
      <th scope="row">VALOR TOTAL</th>

      
      <td>BRL<?php echo $fetch['valortotal'];?></td>
     
      <td>
        <?php
      $bFetch = $crud->selectDB(
                "*", 
                "clientes", 
                "where id=?", 
                array( $_GET['id'])
                );
                $fetch = $bFetch -> Fetch(PDO :: FETCH_ASSOC);
                ?>
      <a href="<?php echo "controllers/controllersClienteGastoTotalDelete.php?id={$fetch['id']}"; ?>"> Pago </a>
      </td>
    </tr>
    </tbody>
</table>