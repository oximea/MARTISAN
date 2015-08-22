<?php
require_once ("../SYSTEM/DATABASE.php");
include ("../../res/php_functions/PHPFunctions.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $userName=  mysqli_real_escape_string($CON,$_POST['user_name']);
    $password=  mysqli_real_escape_string($CON,$_POST['user_password']);
    
    $response=PHPFunctions::login($userName, $password);
    
    if($response==true){
        $_SESSION['user_name']=$userName;
        header("location: index.php");
    }else{
        $error="Usuario y/o contraseña incorrecta";
    }
}
?>
<html>
<head>    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <title>Martisan</title>
    <link href="../../res/css/Metro/metro.css" rel="stylesheet" />
    <link href="../../res/css/Metro/metro-icons.css" rel="stylesheet" />
    <link href="../../res/css/Metro/metro-responsive.css" rel="stylesheet" />
    <link href="../../res/css/main.css" rel="stylesheet" />    
</head>
<body class="bg-darkTeal">
    <div style="opacity: 1; transform: scale(1); transition: all 0.5s ease 0s;" class="login-form padding20 block-shadow">
        <form id="formlogin" action="" method="POST">
            <h1 class="text-light">Iniciar Sesión</h1>
            <hr class="thin" />
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="user_login">Usuario</label>
                <input style="padding-right: 42px;" name="user_name" id="user_name" type="text" />
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="user_password">Contraseña</label>
                <input style="padding-right: 42px;" name="user_password" id="user_password" type="password" />
                <button type="button" tabindex="-1" class="button helper-button reveal"><span class="mif-eye"></span></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" class="button primary">OK</button>
                <button type="button" class="button link">CANCELAR</button>
            </div>
        </form>
    </div>
</body>
<script src="../../res/js/jQuery/jquery-1.11.3.min.js"></script>
<script src="../../res/js/Metro/metro.js"></script>
<script>
    $(function () {
        var form = $(".login-form");

        form.css({
            opacity: 1,
            "-webkit-transform": "scale(1)",
            "transform": "scale(1)",
            "-webkit-transition": ".5s",
            "transition": ".5s"
        });
    });
</script>
</html>
