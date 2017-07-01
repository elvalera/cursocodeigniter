<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
<style>
	.login{
		max-width: 420px;
		padding: 30px 30px;
		border: 1px solid #cccccc;
		background-color: white;
		background: #fff; 
	}

</style>

</head>
<body style="background:#d6eaf8">
	<h1 class="text-center" style="padding-bottom:20px;"><?php echo $encabezado; ?></h1>


	<div class="container">

		<div class="row">

			<form name="login" method="post" action="<?php echo base_url(); ?>index.php/login/validar" class="col-sm-6 col-sm-offset-3 login">
				<img src="<?php echo base_url();?>bootstrap/img.jpg" alt="" class="img-responsive img-circle center-block" style="width:150px; height:150px;">
				<!-- Creamos un condicional para mostrar el mensaje segun su nombre-->
				<?php 
					if ($this->session->flashdata('error')) {
						echo"<div class='alert alert-danger'>".$this->session->flashdata('error')."</div>";
						
					}
				
					if ($this->session->flashdata('fin')) {
						echo"<div class='alert alert-success'>".$this->session->flashdata('fin')."</div>";
					}
				
				?>

				<div class="form-group" style="padding-top:10px">
					<label for="usuario" class="sr-only">Usuario: </label>
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></div>
						<input type="text" name="usuario" class="form-control" placeholder="Usuario">
					</div>
				</div>
			
				<div class="form-group">
					<label for="clave" class="sr-only">clave: </label>
					<div class="input-group">
						<div class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></div>
						<input type="password" name="clave" class="form-control" placeholder="Contraseña">
					</div>
				</div>
			
				<button class="btn btn-info btn-block" type="submit">Ingresar</button>

			</form>
		</div>
	</div>

<script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>

</body>
</html>