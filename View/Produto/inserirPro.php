<!DOCTYPE html>
<html>
    <head>
        <title>Cadastrar</title>
        <meta charset="UTF-8">
        <!-- Bootstrap -->
        <link href="www/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="www/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="www/assets/styles.css" rel="stylesheet" media="screen">
        <link href="www/assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="www/vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="www/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">E-COMMERCE</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> Usuario Logado <i class="caret"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="login.html">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li>
                            <a href="index.php?controller=UsuarioController&action=inserir"></i> Cadastrar Usuario</a>
                        </li>
                        <li>
                            <a href="index.php?controller=UsuarioController&action=listar"></i> Listar Usuario</a>
                        </li>
                        <li>
                            <a href="index.php?controller=CategoriaController&action=inserir"></i> Cadastrar Categoria</a>
                        </li>
                        <li>
                            <a href="index.php?controller=CategoriaController&action=listar"></i> Listar Categoria</a>
                        </li>
                        <li class="active">
                            <a href="index.php?controller=ProdutoController&action=inserir"></i> Cadastrar Produto</a>
                        </li>
                        <li>
                            <a href="index.php?controller=ProdutoController&action=listar"></i> Listar Produto</a>
                        </li>
                    </ul>
                </div>
                <!--/span-->
                <div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Cadastro de Produto</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    <form action="index.php?Controller=ProdutoController&action=inserir" method="POST" class="form-horizontal">
                                        <fieldset>

                                            <?php if ($msg) : ?>
                                                <div class="alert alert-info">
                                                    <button class="close" data-dismiss="alert">x</button>
                                                    <strong>Info!</strong> <?php echo $msg ?>
                                                </div>
                                            <?php endif; ?>

                                            <div class="control-group">
                                                <label class="control-label" for="username">Nome</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="username" type="text" value="" name="nome">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="senha">Descrição</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="senha" type="text" value="" name="descricao">
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <label class="control-label" for="email">Preço</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="email" type="text" value="" name="preco">
                                                </div>
                                            </div>
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="email">Custo</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="email" type="text" value="" name="custo">
                                                </div>
                                            </div>
                                            
                                            <div class="control-group">
                                                <label class="control-label" for="email">Quantidade</label>
                                                <div class="controls">
                                                    <input class="input-xlarge focused" id="email" type="text" value="" name="quantidade">
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
            <hr>
            <footer>

            </footer>
        </div>
        <!--/.fluid-container-->

        <script src="www/vendors/jquery-1.9.1.js"></script>
        <script src="www/bootstrap/js/bootstrap.min.js"></script>
        <script src="www/vendors/datatables/js/jquery.dataTables.min.js"></script>

        <script src="www/assets/scripts.js"></script>
        <script src="www/assets/DT_bootstrap.js"></script>
        <script>
            $(function () {

            });
        </script>
    </body>
</html>