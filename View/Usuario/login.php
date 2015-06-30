<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="www/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="www/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="www/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="www/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">
        
        <?php if (isset($msg)) : ?>
            <div class="alert alert-danger">
                <button class="close" data-dismiss="alert">x</button>
                <strong>Info!</strong> <?php echo $msg ?>
            </div>
        <?php endif; ?>

        <form class="form-signin" method="POST" action="">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" class="input-block-level" placeholder="Username" name="username">
        <input type="password" class="input-block-level" placeholder="Password" name="senha">
        
        <button class="btn btn-large btn-primary" type="submit">Login</button>
      </form>

    </div> <!-- /container -->
    <script src="www/vendors/jquery-1.9.1.min.js"></script>
    <script src="www/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>