<!DOCTYPE html> 
<html>
<head>
  	<title>Titulo</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="<?php echo base_url('css/jquery-ui-1.10.4.min.css'); ?>" rel="stylesheet"  media="all" type="text/css"> 
 	<link href="<?php echo base_url('css/bootstrap.css'); ?>" rel="stylesheet"  media="all" type="text/css">
 	<link href="<?php echo base_url('css/bootstrap.css.map'); ?>" rel="stylesheet"  media="all" type="text/css">
 	<link href="<?php echo base_url('css/jquery.jqplot.min.css'); ?>" rel="stylesheet"  media="all" type="text/css">
 	<link href="<?php echo base_url('css/custom.css'); ?>" rel="stylesheet"  media="all" type="text/css">
	 <style>
        body{padding-top:70px}
      </style>
 </head>
<body>
    <div class="navbar navbar-default navbar-fixed-top">
<?php
	if (1==1){
?>
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="#" draggable="true">Quimbaya</a>
			</div>
			<div class="collapse navbar-collapse navbar-ex1-collapse">
			  <form class="navbar-form navbar-left text-justify" role="search">
				<div class="form-group">
				  <input type="text" class="form-control" placeholder="Buscar">
				</div>
				<button type="submit" class="btn btn-default">Enviar</button>
			  </form>
			  <a class="btn btn-primary btn-sm navbar-btn navbar-right" data-target="#iniciar_sesion" data-toggle="modal">Iniciar Sesión</a>
			  <a class="btn btn-primary btn-sm navbar-btn navbar-right" style="" data-target="#crear_cuenta" data-toggle="modal" >Crear Cuenta</a>
			</div>
		</div>
	</div>

<?php
	}
?>
	
