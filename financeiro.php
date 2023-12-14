<?php
include_once 'includes/header.php';
include_once 'class/classCrud.php';


$crud = new classCrud();



$bFetch= $crud->selectDB(
    "clienteconta.valor, SUM(valor) AS receber",
    "clienteconta",
    "",
   array()
  );

  $fetch= $bFetch->fetch(PDO::FETCH_ASSOC);
  ?>

  <table class="table table-dark table-hover">
  <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">TOTAL</th> 
  
      </tr>
    <thead>
  
    </thead>
    <tbody>
      <tr>
        <th scope="row">VALOR PARA RECEBIMENTO</th>      
        <td>BRL<?php echo $fetch['receber'];?></td>       

      </tr>
      </tbody>
  </table>

<?php
  $cFetch= $crud->selectDB(
    "funcionario.salario, SUM(salario) AS pagar",
    "funcionario",
    "",
   array()
  );

  $fetch= $cFetch->fetch(PDO::FETCH_ASSOC);
?>
<table class="table table-dark table-hover">
  <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">TOTAL</th> 
  
      </tr>
    <thead>
  
    </thead>
    <tbody>
      <tr>
        <th scope="row">VALOR DE PAGAMENTO</th>      
        <td>BRL<?php echo $fetch['pagar'];?></td>       

      </tr>
      </tbody>
  </table>


