<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo getnombre(); ?></title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
</head>
<body>

<nav class="navbar navbar-inverse" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url();?>index.php/login/principal"><?php echo getnombre();?></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a><span class="glyphicon glyphicon-user"></span> </a></li>
				<li><a href="<?php echo base_url();?>index.php/login/cerrarsession">Cerrar Session</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

<div class="container">
	<div class="row">
		<div class="table-responsive col-sm-12">
			<table class="table table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cédula</th>
						<th>Correo</th>
						<th>Pais</th>
						
					</tr>
				</thead>
				<tbody>
				<?php foreach ($id->result() as $valor) { ?>
					<tr class= >
						<td><?php echo $valor->nombre; ?></td>
						<td><?php echo $valor->apellido; ?></td>
						<td><?php echo $valor->cedula; ?></td>
						<td><?php echo $valor->correo; ?></td>
						<td><?php echo $valor->pais; ?></td>
						
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>

	
</body>
</html>