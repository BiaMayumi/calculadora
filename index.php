<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Calculadora Simples</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

    <h1> Calculadora Simples </h1>
    <form action='<?php echo $_SERVER["PHP_SELF"] ?>' method="post">
        <label for="num1">Número 1: </label>
        <input type="text" name="num1">
        <label for="num2">Número 2: </label>
        <input type="text" name="num2">
        <br><br>
        <h2>Operação:</h2>
        <input type="radio" name="operacao" value="soma"> Soma
        <input type="radio" name="operacao" value="subtracao"> Subtração
        <input type="radio" name="operacao" value="multiplicacao"> Multiplicação
        <input type="radio" name="operacao" value="divisao"> Divisão
        <input type="radio" name="operacao" value="resto"> Resto da Divisão
        <br> <br>
        <input type="submit"> <input type="reset" value="Reset"> 
    </form>

    <?php

    //Variáveis
    $num1 = 0;
    $num2 = 0;
    $total = 0;

    if(isset($_POST["num1"]) && $_POST["num1"]){
        //Entradas
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        //Processamento
        $total = $num1 + $num2;

    }

    ?>

    <?php

    if(isset($_POST['num1'], $_POST['num2'], $_POST['operacao'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
    
        if(is_numeric($num1) && is_numeric($num2)){
            switch($operacao){
                case 'soma':
                    $resultado = $num1 + $num2;
                    echo "<h2>Resultado:</h2>";
                    echo "<p>{$num1} + {$num2} = {$resultado}</p>";
                    break;

                case 'subtracao':
                    $resultado = $num1 - $num2;
                    echo "<h2>Resultado:</h2>";
                    echo "<p>{$num1} - {$num2} = {$resultado}</p>";
                    break;

                case 'multiplicacao':
                    $resultado = $num1 * $num2;
                    echo "<h2>Resultado:</h2>";
                    echo "<p>{$num1} * {$num2} = {$resultado}</p>";
                    break;

                case 'divisao':
                    if($num2 != 0){
                        $resultado = $num1 / $num2;
                        echo "<h2>Resultado:</h2>";
                        echo "<p>{$num1} / {$num2} = {$resultado}</p>";
                    }
                    break;
                case 'resto':
                    $resultado = $num1 % $num2;
                    echo "<h2>Resultado:</h2>";
                    echo "<p>{$num1} % {$num2} = {$resultado}</p>";
                    break;

                default:
                    echo "<p>Inválido!</p>";
                    break;
            }
        } else {
            echo "<p>Preencha os campos com valores numéricos</p>";
        }
    }
    ?>
</body>
</html>
