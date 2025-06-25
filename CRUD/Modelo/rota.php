<?php
    if(isset($_GET["rota"])){
        $rota = $_GET["rota"];
    }else{
        $rota = "login";
    }

    switch ($rota){
        case 'login':
            //header("Location: login.php");
            require "login.php";
        break;

        case 'autenticacao':
            $auth = new AuthController();
            $auth -> login();
        break;

        case 'home':
            require "home.php";            
        break;

    default:
            echo "Rota não encontrada!";
    }
?>