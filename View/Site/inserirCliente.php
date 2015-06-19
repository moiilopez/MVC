<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
	<title>Cadastro de cliente</title>

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="www/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" href="www/bootstrap/css/bootstrap-responsive.min.css" />
	
	<!-- Includes FontAwesome -->
	<link rel="stylesheet" href=" /font-awesome.min.css" />

	<!-- Css -->	
	<link rel="stylesheet" href="www/assets/style.css" />

</head>
<body>

	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
                    <div class="container">
				<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="brand" href="/">E-COMMERCE</a>
				<div class="nav-collapse collapse">
					
					<form class="navbar-form form-search pull-right">
						<input id="Search" name="Search" type="text" placeholder="type text to search for" class="input-medium search-query">
						<button type="submit" class="btn">Search</button>
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
						<li class="nav-header">Sidebar</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>

						<li class="nav-header">Sidebar</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>

						<li class="nav-header">Sidebar</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
						<li>
							<a href="#">Link</a>
						</li>
					</ul>
				</div>

				

				<div class="well">
					<form class="form login-form">
						<h2>Sign in</h2>
						<div>
							<label>Username</label>
							<input id="Username" name="Username" type="text" style="width:100px" />

							<label>Password</label>
							<input id="Password" name="Password" type="password" style="width:100px"/>

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
                        
                    <div class="span9" id="edit">	
                            
                            <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Cadastro de Cliente</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form action="index.php?controller=ClienteController&action=inserir" method="POST" class="form-horizontal">
                                        <fieldset>

                                            <?php if ($msg) : ?>
                                                <div class="alert alert-info">
                                                    <button class="close" data-dismiss="alert">x</button>
                                                    <strong>Info!</strong> <?php echo $msg ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="control-group">
                                                <label class="control-label" for="username">Username</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="username" type="text" value="" name="username">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="senha">Senha</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="senha" type="password" value="" name="senha">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="email">E-mail</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="email" type="text" value="" name="email">
                                                </div>
                                            </div>

                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-primary">Salvar</button>
                                                <button type="reset" class="btn">Cancel</button>
                                            </div>
                                        </fieldset>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- /block -->
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