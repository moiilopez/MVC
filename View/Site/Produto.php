<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Vista de produto</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="www/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="www/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href=" /font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="www/assets/style.css" />

</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
                    <div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                        <a class="brand" href="index.php">E-COMMERCE</a>
                        <?php
                        $user = "";
                        if(isset($_SESSION['cliente'])):
                            $user = 'Usuario Logado';
                        ?>	
                            <div class="nav-collapse collapse">
                                    <ul class="nav pull-right">
                                        <li class="dropdown">
                                            <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i><?php echo $user;?><i class="caret"></i>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a tabindex="-1" href="#">Logout</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                            </div>
                        <?php endif;?>
				<div class="nav-collapse collapse">
					
					<form class="navbar-form form-search pull-right">
						<input id="Search" name="Search" type="text" placeholder="type text to search for" class="input-medium search-query">
						<button type="submit" class="btn">Search</button>
                                                <a href="index.php?controller=UsuarioController&action=login"<button class="btn btn-primary">Admin</button></a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="container"  id="edit">
		<div class="row">
			<div class="span3">
	

				<div class="well">
					<ul class="nav nav-list">
                                            <li class="nav-header">Menu</li>
                                            <?php foreach ($categorias as $cat):?>
						<li>
                                                    <a href="index.php?controller=SiteController&action=clasificar&categoria=<?php echo $cat['ID'];?>"><?php echo $cat['NOME'];?></a>
						</li>
                                            <?php endforeach;?>   
                                            <li class="nav-header"><a href="index.php?controller=SiteController&action=carrinho">Carrinho de Compras</a></li>
					</ul>
				</div>

				

				<div class="well">
					<form class="form login-form" method="POST" action="index.php?controller=ClienteController&action=login">
						<h2>Sign in</h2>
						<div>
							<label>Username</label>
							<input id="Username" name="username" type="text" style="width:100px" />

							<label>Password</label>
							<input id="Password" name="senha" type="password" style="width:100px"/>

							<label class="checkbox inline">
								<input type="checkbox" id="RememberMe" value="option1" > Remember me
							</label>

							<br /><br />

							<button type="submit" class="btn btn-success">Login</button>
						</div>
						<br />
						<a href="index.php?controller=ClienteController&action=inserir">register</a>&nbsp;&#124;&nbsp;<a href="#">forgot password?</a>
					</form>
				</div>
			</div>

                        <div class="span6" id="edit">
				<ul class="thumbnails">
                                    <?php //    var_dump($categorias);?>
                                    
					<li class="span6">
						<div class="thumbnail">
							<img src="http://placehold.it/520x400" alt="">
						</div>
					</li>
                                    
				</ul>
			</div>
                        <div class="span2" id="edit2">

                                <div class="caption">
                                    <h1><?php echo $produtos['NOME'];?></h1>
                                    <p>R$: <?php echo $produtos['PRECO'];?></p>
                                    <a class="btn btn-success" href="#">Adicionar ao carrinho</a>
                                </div>

                        </div>
		</div>
	</div>
	
	<hr />

	<footer id="footer" class="vspace20">
		<div class="container">
			<div class="row">
				<div class="span4">
					<h4>Info</h4>
					<ul class="nav nav-stacked">
						<li><a href="#">Sell Conditions</a>
						<li><a href="#">Shipping Costs</a>
						<li><a href="#">Shipping Conditions</a>
						<li><a href="#">Returns</a>
						<li><a href="#">About Us</a>
					</ul>
				</div> 

				<div class="span4">
					<h4>Location and Contacts</h4>
					<p><i class="icon-map-marker"></i>&nbsp;I do not Know Avenue, A City</p>
					<p><i class="icon-phone"></i>&nbsp;Phone: 234 739.126.72</p>
					<p><i class="icon-print"></i>&nbsp;Fax: 213 123.12.090</p>
					<p><i class="icon-envelope"></i>&nbsp;Email: info@mydomain.com</p>
					<p><i class="icon-globe"></i>&nbsp;Web: http://www.mydomain.com</p>
				</div>

				<div class="span4">
					<h4>Facebook | Twiter </h4>
					
				</div>
			</div>

			<div class="row">
				<div class="span6">
					<p>&copy; Copyright 2012.&nbsp;<a href="#">Privacy</a>&nbsp;&amp;&nbsp;<a href="#">Terms and Conditions</a></p>
				</div>
				<div class="span6">
					<a class="pull-right" href="http://www.responsivewebmobile.com" target="_blank">credits by Responsive Web Mobile</a>
				</div>
			</div>
		</div>
	</footer>	

	<script src="www/vendor/jquery-1.9.1.min.js"></script>
	<script src="www/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>