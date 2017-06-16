<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $titulo; ?></title>
</head>
<body>
	<h1><?php echo $encabezado; ?></h1>


	<form name="login" method="post" action="<?php echo base_url(); ?>index.php/login/validar">
		<label for="usuario">Usuario: </label>
		<input type="text" name="usuario"><br>

		<label for="clave">clave: </label>
		<input type="password" name="clave"><br>

		<button type="submit">Ingresar</button>
	</form>
<!-- Creamos un condicional para mostrar el mensaje segun su nombre-->
	<?php 
		if ($this->session->flashdata('error')) {
			echo $this->session->flashdata('error');
		}

		if ($this->session->flashdata('fin')) {
			echo $this->session->flashdata('fin');
		}

	?>

</body>
</html>