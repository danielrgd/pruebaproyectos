<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>Ejecutar Consulta</title>
	
</head>
<body>
<center>
<br>

<?= form_open('CQL/ejecutar');?>
   <p>
      <?=form_label('Consulta:', 'consulta')?>
      <?= form_input('consulta');?>
   </p>
   <br>
	  <?= form_submit('ejecutar', 'Ejecutar')?>
<?=form_close()?>
<?php $this->load->view('resultados'); ?>
</center>
</body>
</html>