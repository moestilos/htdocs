<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" type="text/css" href="estiloMain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
</head>
<body>
<h1>⥼ Calculadora ⥽</h1>


<form class="cala" method="POST" action="">
<input class="calc" type="text" name="num1" placeholder="..." required>
<input class="calc" type="text" name="num2" placeholder="..." required>

<select class="elg" name="operacion" action="">
    <option value="">Elige</option>
    <option value="sumar">Sumar</option>
    <option value="restar">Restar</option>
    <option value="multiplicar">Multiplicar</option>
    <option value="dividir">Dividir</option>
</select>
<br>
<input class="play" type="submit" name="calcular" value="▶">

</form>

<div class="resultado">
    <?php
    if($_SERVER ["REQUEST_METHOD"] =="POST"){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operacion = $_POST["operacion"];

        if($operacion == "sumar"){
            $resultado = $num1 + $num2;
            echo "Resultado ---> $num1 + $num2 = $resultado";
        }
        else if($operacion == "restar"){
            $resultado = $num1 - $num2;
            echo "Resultado ---> $num1 - $num2 = $resultado";
        }
        else if($operacion == "multiplicar"){
            $resultado = $num1 * $num2;
            echo "Resultado ---> $num1 * $num2 = $resultado";
        }
        else if($operacion == "dividir"){
            $resultado = $num1 / $num2;
            echo "Resultado ---> $num1 / $num2 = $resultado";
        }
        else {
            echo "Elige";
        }
    }
    
    
    
    
    
    
    
    
    
    
    
    
    ?>
































</body>
</html>