<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/bootstrap.css">
	<title>Document</title>

<style>
	header{
		background: #2c3e50;
		color: #fff;
	}

	.main{
		background: #f2f2f2;
	}

	.color1{
		background: #34495e;
		color: #fff;
	}

	aside{
		background: #c0392b;
		color: #fff;
	}

	footer{
		background: #16a085;
		color: #fff;
	}

</style>	
</head>
<body>
	
	<header>
		<div class="container">
			<h1>Header</h1>
		</div>
	</header>

	<div class="container-fluid">
		<section class="main row">
			<article class="col-xs-6 col-sm-9">
				<p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eligendi quos, odit nesciunt doloribus harum, sed quibusdam ipsum ipsa tenetur quae corporis eum error vitae doloremque quasi unde velit. Dignissimos.</p>
			</article>
			<aside class="col-xs-6 col-sm-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolore beatae nobis laborum voluptas repellendus ipsa mollitia quo! Voluptatibus vitae soluta voluptatem suscipit laborum dignissimos ipsa. Laborum, dolores tenetur quod.</p>
				
			</aside>
		</section>
		<section class="row">
			<article class="col-xs-6 col-sm-9">
				<p class="text-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos eligendi quos, odit nesciunt doloribus harum, sed quibusdam ipsum ipsa tenetur quae corporis eum error vitae doloremque quasi unde velit. Dignissimos.</p>
			</article>
			<aside class="col-xs-6 col-sm-3">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto dolore beatae nobis laborum voluptas repellendus ipsa mollitia quo! Voluptatibus vitae soluta voluptatem suscipit laborum dignissimos ipsa. Laborum, dolores tenetur quod.</p>
				
			</aside>
		</section>
	</div>


	<footer class="container-fluid">
		<h1>Leidy Murillo</h1>
	</footer>



	<script src="<?php echo base_url();?>bootstrap/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>bootstrap/js/bootstrap.js"></script>

</body>
</html>