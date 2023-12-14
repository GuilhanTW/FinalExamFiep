<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


?>


<table class="table">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Valor a Pagar</th>

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
      <td><?php echo $fetch['valor'];?></td> 
    </tr>
    <td>
            Pago
    </td>
    <?php
        }
        
        
        ?>
  </tbody>
</table>