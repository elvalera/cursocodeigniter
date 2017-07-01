

<center><h1>Bienvenidos al curso de CodeIgniter</h1></center>

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
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($datos->result() as $valor) { ?>
					<tr class= >
						<td><?php echo $valor->nombre; ?></td>
						<td><?php echo $valor->apellido; ?></td>
						<td><?php echo $valor->cedula; ?></td>
						<td><?php echo $valor->correo; ?></td>
						<td><?php echo $valor->pais; ?></td>
						<td><a href="<?php echo base_url(); ?>index.php/login/consultar/<?php echo $valor->idpersona; ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						</td>
					</tr>
				<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
  
<script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>

</body>
</html>