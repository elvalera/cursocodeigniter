<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>

	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<div class="container">
		<div class="row">
			
			<nav class="navbar navbar-inverse navbar-fixed-top" id="menu">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>                        
				      </button>
				      <a class="navbar-brand" href="<?php echo base_url()?>index.php/sistema/principal">IUTOMS</a>
				    </div>
				    <div class="collapse navbar-collapse" id="myNavbar">
				      <ul class="nav navbar-nav">
				        <li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown">Registrar <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a data-btn-href="<?php echo base_url()?>index.php/sistema/ingresar">Usuario</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a class="dropdown-toggle" data-toggle="dropdown">Reportes <span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li><a href="<?php echo base_url()?>index.php/sistema/reporte" target="_blank">Usuarios</a></li>
				          </ul>
				        </li>
				        
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
				        <li><a href="#"><span class="glyphicon glyphicon-user"></span>  <strong class="text-left text-capitalize">Usuario: <?php echo $this->session->userdata('nombre')." ".$this->session->userdata('apellido');	 ?></strong></a></li>
				        <li><a href="<?php echo base_url()?>index.php/sistema/cerrar_sesion"><span class="glyphicon glyphicon-log-in"></span>  Cerrar Sesión</a></li>
				      </ul>
				    </div>
				  </div>
				</nav>
				<div style="padding-bottom: 100px;"></div>
				<div id="contenido">
					
					<h2 class="text-center">Listado de Personas Registradas</h2>

      <center>
          <?php if ($this->session->flashdata('actualizar')) {
            echo '<div class="alert alert-info">'.$this->session->flashdata('actualizar').'</div>';
          } 
          if ($this->session->flashdata('ingreso')) {
            echo '<div class="alert alert-success">'.$this->session->flashdata('ingreso').'</div>';
          }
          if ($this->session->flashdata('sieliminar')) {
            echo '<div class="alert alert-warning">'.$this->session->flashdata('sieliminar').'</div>';
          }
          if ($this->session->flashdata('noeliminar')) {
            echo '<div class="alert alert-danger">'.$this->session->flashdata('noeliminar').'</div>';
          }
          ?>
        </center>

      <div class="col-md-8 col-md-offset-2">
        <table border="1px" align="center" class="table table-bordered">
          <tr>
            <th colspan="6" class="text-center">Datos Personales</th>
          </tr>
          <tr>
            <th class="text-center">Cedula</th>
            <th class="text-center">Nombre y Apellido</th>
            <th class="text-center">Ver</th>
            <th class="text-center">Editar</th>
            <th class="text-center">Eliminar</th>
          </tr>
          <?php foreach ($listado->result() as $datos) { ?>
            <tr>
              <td class="text-center"><?php echo $datos->cedula; ?></td>
              <td><?php echo $datos->nombre." ".$datos->apellido; ?></td>
              <th class="text-center"><a data-btn-href="<?php echo base_url(); ?>index.php/sistema/consultar/<?php echo $datos->id; ?>"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span></th>
              <th class="text-center"><a data-btn-href="<?php echo base_url(); ?>index.php/sistema/editar/<?php echo $datos->id; ?>"><span class=" glyphicon glyphicon-pencil" aria-hidden="true"></span></th>
              <th class="text-center"><a data-toggle="modal" href='#modal-id' > <span class=" glyphicon glyphicon-trash" aria-hidden="true"></span> </th>
            </tr>
          <?php }?>
        </table>
      </div>

      <div class="modal fade" id="modal-id">
      	<div class="modal-dialog">
      		<div class="modal-content">
      			<div class="modal-header">
      				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      				<h4 class="modal-title">Eliminar</h4>
      			</div>
      			<div class="modal-body">
      				¿Desea eliminar el usuario?
      			</div>
      			<div class="modal-footer">
      				<a type="button" class="btn btn-success" href="<?php echo base_url(); ?>index.php/sistema/eliminar/<?php echo $datos->id; ?>">Si</a>
      				<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
      			</div>
      		</div>
      	</div>
    
      
      </div>


      </div>
      </div>
   
        
						
</body>
</html>
<script>
	$("[data-btn-href]").click(function(event){
		href = $(this).data('btn-href')
	   $("#contenido").load(href);	
	})

</script>