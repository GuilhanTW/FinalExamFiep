<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


?>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Utilizado</th>
      <th scope="col"> </th>


    </tr>
    <?php
        $crud = new classCrud();
        $bFetch= $crud->selectDB(
           "*",
           "estoque",
           "",
           array()
        );
        while($fetch= $bFetch->fetch(PDO::FETCH_ASSOC)){
            ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['produto'];?></th>                
            <td><?php echo $fetch['quantidade'];?></td>
            <td><?php echo $fetch['utiliza'];?></td> 

            <td> <a href="<?php echo "estoqueDetalhe.php?id={$fetch['id']}"; ?>"> Detalhes  </a>
                 <a href="<?php echo "controllers/controllersEstoqueDelete.php?id={$fetch['id']}"; ?>"> Excluir </a>
                 
            </td>
    </tr>
    <?php
        }       
        
        ?>

  </tbody>

</table>