<?php
    session_start();
    if(!isset($_SESSION['user'])){
        header("Location:../index.php");
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font/font-awesome/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>

<style type="text/css">
    .btn{
        width:220px;
        height:200px;
    }
</style>

<body>
    <?php include("pMenu.php"); ?>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <a class="btn btn-lg btn-default" href="#">
                                            <i class="fa fa-tags fa-5x pull-bot"></i><br><br><br>Categorias
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <a class="btn btn-lg btn-default" href="#">
                                            <i class="fa fa-trophy fa-5x pull-bot"></i><br><br><br>Liga 1 Movistar
                                        </a>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4">
                                        <a class="btn btn-lg btn-default" href="#">
                                            <i class="fa fa-building fa-5x pull-bot"></i><br><br><br>Reporte, Resultados
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>