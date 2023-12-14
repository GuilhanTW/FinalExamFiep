<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


?>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Data nascimento</th>
      <th scope="col">telefone</th>
      <th scope="col">funcao</th>
      <th scope="col">salario</th>
      <th scope="col">Exp</th>
      <th scope="col">Action</th>

    </tr>
    <?php
        $crud = new classCrud();
        $bFetch= $crud->selectDB(
           "*",
           "funcionario",
           "",
           array()
        );
        while($fetch= $bFetch->fetch(PDO::FETCH_ASSOC)){
            ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['nome'];?></th>                
            <td><?php echo $fetch['datanasc'];?></td>
            <td><?php echo $fetch['telefone'];?></td> 
            <td><?php echo $fetch['funcao'];?></td>
            <td><?php echo $fetch['salario'];?></td>
            <td><?php echo $fetch['exp'];?></td>

            <td> <a href="<?php echo "funcionarioDetalhe.php?id={$fetch['id']}"; ?>"> Detalhes  </a>
                 <a href="<?php echo "controllers/controllersFuncionarioDelete.php?id={$fetch['id']}"; ?>"> Excluir </a>
                 
            </td>
    </tr>
    <?php
        }       
        
        ?>

  </tbody>

</table>