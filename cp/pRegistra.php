<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>

<body>
	<div class="container">
    	<div class="row">
        	<!-- SETEA JUSTO AL MEDIO EL DIV-->
        	<div class="col-md-4 col-md-offset-4">
            	<div class="login-panel panel panel-default">
                	<!-- CABECERA DEL PANEL-->
                	<div class="panel-heading">
                    	<h3 class="panel-title">Ingrese sus Datos</h3>
                    </div>
                    <!-- CUERPO DEL PANEL-->
                    <div class="panel-body">
                    	<form action="../cn/nRegistrar.php" method="post" role="form">
                            <center>
                            	<fieldset>
                                    <i class="form-group fa fa-user fa-5x" aria-hidden="true"></i>
                                	<div class="form-group">
                                        Nombre de Usuario
                                    	<input class="form-control" placeholder="User" name="name_user" type="user" autofocus>
                                    </div>
                                    <div class="form-group">
                                        Correo electrónico
                                    	<input class="form-control" placeholder="Correo" name="correo" type="correo">
                                    </div>
                                    <div class="form-group">
                                        Contraseña
                                        <input class="form-control" placeholder="Password" name="password" type="password">
                                    </div>
                                    <input class="btn btn-lg btn-success" name="registrar" id="btn_registrar" type="submit" value="Regístrese">
                                </fieldset>
                                <a href="../index.php">Iniciar Sesión</a>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>