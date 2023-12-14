<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


?>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Telefone</th>
      <th scope="col">Email</th>
      <th scope="col">Cidade</th>
      <th scope="col">Estado</th>
      <th scope="col">Profissao</th>
      <th scope="col">Motivo</th>
      <th scope="col">Social</th>
      <th scope="col">Acoes</th>

    </tr>
    <?php
        $crud = new classCrud();
        $bFetch= $crud->selectDB(
           "*",
           "clientes",
           "",
           array()
        );
        while($fetch= $bFetch->fetch(PDO::FETCH_ASSOC)){
            ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['nome'];?></th>
            <td><?php echo $fetch['telefone'];?></td>
            <td><?php echo $fetch['email'];?></td> 
            <td><?php echo $fetch['cidade'];?></td>
            <td><?php echo $fetch['estado'];?></td>
            <td><?php echo $fetch['profissao'];?></td>
            <td><?php echo $fetch['motivo'];?></td>
            <td><?php echo $fetch['redesocial'];?></td>  
            <td> <a href="<?php echo "clienteConta.php?id={$fetch['id']}"; ?>"> Conta  </a>
                 <a href="<?php echo "clienteGasto.php?id={$fetch['id']}"; ?>"> NovoGasto </a>
                 <i class="bi bi-currency-dollar"></i>
            </td>
    </tr>
    <?php
        }       
        
        ?>

  </tbody>

</table>