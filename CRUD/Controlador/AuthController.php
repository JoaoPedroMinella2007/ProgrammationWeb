<?php
    include_once __DIR__.'./../Modelo/Conexao.php';
    include_once __DIR__.'./Usuario.php';
    include_once __DIR__.'./UsuarioDAO.php';

    class AuthController{

        public function login($login, $email){
            $dao = new UsuarioDAO();

            if(isset($_GET['login']) && isset($_POST['senha'])){
                $login = $_POST['login'];
                $senha = $_POST['senha'];
                $usr = $dao -> autenticar($email, $senha);

                if(!isset($usr)){
                    header("Location:rota.php?rota=home");
                }else{
                    header("Location:rota.php")
                }
            }else{
                header("Location:rota.php");
            }
        }

    }

?>
