<html>
	<head>
		<meta charset="UTF-8" />
		<title>EAD</title>
		<link rel="stylesheet" href="<?php echo BASE; ?>assets/css/template.css" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	</head>
	<body>
		<div>
			<nav class="navbar navbar-light bg-white">
				<a class="navbar-brand" href="#">
				<img id="img-header" src="<?php echo BASE; ?>assets/images/imagem-topo.svg" />
				</a>
				<button id="btn-header" type="button" class="btn btn-primary">HOME</button>
				
				<button class="navbar-toggler" type="button">
					<span class="navbar-toggler-icon"></span>
				</button>
			</nav>
			
		<?php $this->loadViewInTemplate($viewName, $viewData); ?>


		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/jquery-3.1.0.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE; ?>assets/js/script.js"></script>

	</body>
</html>