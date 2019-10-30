<?php
$lista =array();

$lista[0] = 'pato';
$lista[1] = 'perro';
$lista[2] = 'ganso';
$lista[3] = 'pollo';

$varibleUnica = 'Hola K ASE';

?>

<script>
  var miVariable = '<?php echo $varibleUnica; ?>';
  var lista = <?php echo json_encode($lista);?>
  console.log(lista);
  
  for (var i=0; i<lista.length;i++){
      document.get.add('<button class="btn-btn-info">')+lista[i]+'</button>');
  }
    
</script>
