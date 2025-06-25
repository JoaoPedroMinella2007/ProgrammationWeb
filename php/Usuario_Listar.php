<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>
    <h2>Lista de Usuários</h2>

    <?php
        include_once "Usuario.php";
        session_start();

            if(isset($_GET['nome']) && isset($_GET['email']) && isset($_GET['senha'])){
                $usr = new Usuario($_GET['nome'],$_GET['email'],$_GET['senha']);
            }else{
                $usr = null;
            }

            if(!isset($arrayUSR)){
            }

            if(isset($_SESSION['ursList'])){
                $arrayUSR = array();
                $arrayUSR = $_SESSION['ursList'];
            }

            if(isset($usr)){
                $_SESSION['ursList'] = $arrayUSR;
                array_push($arrayUSR, $usr);
            }
            
        echo "<table>";
        echo "<th> <td> id </td>";
        echo "<td> nome </td>"; 
        echo "<td> email </td>";
        echo "<td> senha </td>";
        echo "</th>";

            foreach($arrayUSR as $u){

        echo "<th> <td>".$u->id."</td>";
        echo "<td>".$u->nome."</td>";
        echo "<td>".$u->email."</td>";
        echo "<td>".$u->senha."</td>";
        echo "</th>";

            }
    ?>

</body>
</html>