<?php
/**
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->script('https://code.jquery.com/jquery-1.12.0.min.js');
		echo $this->Html->script('bootstrap.min');
		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('main.css');
		//echo $this->Html->css('cake.generic');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="navbar-header">
								 
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
								</button> <a class="navbar-brand" href="#" title="Volkswagen">
									<img src="/webroot/img/logo_principal.png" alt="logo" height="30" width="30">Volkswagen</a>
							</div>
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav">
									<li class="active">
										<a href="Home/home">Inicio</a>
									</li>
									<li>
										<a href="#">Catálogo</a>
									</li>
									<li>
										<a href="#">Servicios</a>
									</li>
									<li>
										<a href="#">Conócenos</a>
									</li>
									<li>
										<a href="#">Contáctanos</a>
									</li>
									<li class="dropdown">
										 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">Action</a>
											</li>
											<li>
												<a href="#">Another action</a>
											</li>
											<li>
												<a href="#">Something else here</a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="#">Separated link</a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="#">One more separated link</a>
											</li>
										</ul>
									</li>
								</ul>
								<form class="navbar-form navbar-left" role="search">
									<div class="form-group">
										<input type="text" class="form-control" />
									</div> 
									<button type="submit" class="btn btn-default">
										Submit
									</button>
								</form>
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="#">Link</a>
									</li>
									<li class="dropdown">
										 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
										<ul class="dropdown-menu">
											<li>
												<a href="#">Action</a>
											</li>
											<li>
												<a href="#">Another action</a>
											</li>
											<li>
												<a href="#">Something else here</a>
											</li>
											<li class="divider">
											</li>
											<li>
												<a href="#">Separated link</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							
						</nav>
					</div>
				</div>
			</div>



		</div>
		<div id="content" class ="container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<footer id="footer" class="footer footer-fixed-bottom">
	    	<div class="container">
	        <p class="text-muted">Place sticky footer content here.</p>
	      </div>
	    </footer>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
