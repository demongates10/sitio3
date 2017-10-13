<?php
session_start();
$error=0;
if($_POST){
    
    $user = $_POST['user'];
     $pass = $_POST['pass'];
     include './class/Database.php';
     include './class/Usuarios.php';
    $user = new Usuarios($user,$pass);
    $row = $user->buscarUsuario();
    if($row){
    $user->registrarSesion($row);
    header("location: index.php");
    }else{
        $error=0;
    }
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
            .form-signin{
                max-width: 300px;
                margin: 0 auto;
                margin-top: 100px;
            }
            body{
                background-color: #cccccc;
            }
            .checkbox{
                margin: 5px;
                padding-left: 20px;
              
            
            }
        </style>
    </head>
    <body>
     <!--   <script>
            $(document).ready(function(){
                alert('Jquery Cargado exitosamente');
            });
        </script>-->
        <div class="container">
            <?php  if ($error==1){?>
            <div class="alert alert-danger">Error en los datos</div>
            <?php }?>
            <form class="form-signin" method="post">
                <h2>Inicio de Sessión </h2>
                <label for='inputUser' class='sr-only' >Usuario</label>
                <input type="text"name="user" id="inputUser" class="form-control" placeholder="Introdusca el usuario"/>
                 <label for='inputPassword' class='sr-only' >Contraseña</label>
                 <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Introdusca la Password"/>
                <div class="checkbox">
                <input type="checkbox"  name="recordar"  />Recordar Password
                </div>
                <button type="submit" class="btn-lg btn-primary btn-block">Iniciar</button>
            </form>
        </div>
    </body>
</html>
