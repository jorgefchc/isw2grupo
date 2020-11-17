<!doctype html>
<html>
<head>
	
</head>

<body>
	<div class="container">
    	<div class="row">
        	<!-- SETEA JUSTO AL MEDIO EL DIV-->
        	<div class="col-md-4 col-md-offset-4">
            	<div class="login-panel panel panel-default">
                	<!-- CABECERA DEL PANEL-->
                	<div class="panel-heading">
                    	<h3 class="panel-title">Acceso a la Administracion</h3>
                    </div>
                    <!-- CUERPO DEL PANEL-->
                    <div class="panel-body">
                    	<form action="cn/nLogin.php" method="post" role="form">
                            <center>
                            	<fieldset>
                                    <i class="form-group fa fa-user fa-5x" aria-hidden="true"></i>
                                	<div class="form-group">
                                    	<input class="form-control" placeholder="User" name="user" type="user" autofocus>
                                    </div>
                                    <div class="form-group">
                                    	<input class="form-control" placeholder="Password" name="password" type="password">
                                    </div>
                                    <input class="btn btn-lg btn-success" name="acceder" id="btn_acceder" type="submit" value="Acceder">
                                </fieldset>
                            </center>
                        </form>
                        <br>
                        <form action="cp/pRegistra.php" method="post" role="form">
                            <center>
                                <fieldset>

                                    <input class="btn btn-lg btn-default" name="registrar" id="btn_registrar" type="submit" value="Regístrate">
                                </fieldset>
                            </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>