<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


?>

<table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col">Quarto</th>
      <th scope="col">Localizacao</th>
      <th scope="col">Tamanho</th>
      <th scope="col">Disponibilidade</th>
      <th scope="col">Itens</th>
      <th scope="col"> </th>



    </tr>
    <?php
        $crud = new classCrud();
        $bFetch= $crud->selectDB(
           "*",
           "quartos",
           "",
           array()
        );
        while($fetch= $bFetch->fetch(PDO::FETCH_ASSOC)){
            ?>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['quarto'];?></th>                
            <td><?php echo $fetch['localizacao'];?></td>
            <td><?php echo $fetch['tamanho'];?></td>
            <td><?php echo $fetch['disponivel'];?></td>  
            <td><?php echo $fetch['itens'];?></td> 

            <td> <a href="<?php echo "quartoDetalhe.php?id={$fetch['id']}"; ?>"> Detalhes  </a>
                 
            </td>
    </tr>
    <?php
        }       
        
        ?>

  </tbody>

</table>