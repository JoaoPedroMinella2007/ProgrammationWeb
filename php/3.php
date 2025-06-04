<h1>Calculadora de IMC</h1>

<form action="3.php">
    <label for="peso">Peso</label>
    <input type="number" name="peso" placeholder="kg">
    <br><br>
    <label for="altura">Altura</label>
    <input type="" name="altura" placeholder="cm">
    <input type="submit">
</form>

    <?php
        if(isset($_GET["peso"])){
            $peso = $_GET["peso"];
        }

        if(isset($_GET["altura"])){
            $altura = $_GET["altura"];
        }

        if($altura > 0){
            echo "IMC: ".$peso/($altura*$altura);
        }else{
            echo "Valor de altura inválido!";
        }      

        
    ?>
