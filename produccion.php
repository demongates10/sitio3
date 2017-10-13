<?php
session_start();
if (!$_SESSION['permitido']){
    header("location: loggin.php");
}
    ?>
<html>
    <head>
        <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="bower_components/bootstrap/dist/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <script src="bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <meta charset="utf-8"/>
        <style>
            html{
                position: relative;
                    min-height: 100%;
            }
            body{
                margin-bottom: 60px;
            }
            .footer{
                position: absolute;
                bottom: 0;
                width: 100%;
                height: 60px;
                background-color: #f5f5f5;
            }
            .footer div{
                margin: 0 auto;
                text-align: center;
                line-height: 60px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#barra">
                        <span class="sr-only">Menu para Moviles</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Logo de la APP</a>
                </div>
                <div class="navbar-collapse collapse" id="barra">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="proveedores.php">Proveedores</a></li>
                        <li><a href="reportes.php">Reportes</a></li>
                        <li class="active"><a href="produccion.php">Produccion</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right ">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                Perfil <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <?php if($_SESSION['tipo']==1){?>
                                <li><a href="#">Config</a></li>
                                <li><a href="#">Acessos</a></li>
                                <li><a href="#">Alertas</a></li>
                                <?php } ?>
                                <li><a href="cerrar-session.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="footer">
            <div class="f-content">
                 &copy; Todos los derechos Reservados <a href="#">Students UGB</a>
            </div>
        </div>
    </body>
</html>
