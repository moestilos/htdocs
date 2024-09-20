<?php





    $name = "Willy";

    $num = 5;

    $num2 = "10";

    echo $num . $num2;


?>
<br>

<br>
<br>


<?php



 $listado = ["Guille", "Ismael"];
 foreach ($listado as $key => $value) {
     echo "
     Este nombre es ----> $value" . " <br>" ;
 }

?>






<br>

<br>
<br>
<?php 

    $edad = 20;
    $mayor = $edad > 18; 
    $boolean = $mayor
    ? "Eres mayor de edad"
    : "Eres menor de edad";

    echo $boolean;


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tema 1</title>
</head>

<style>
    body {
        background-color: black;
        font-family: monospace;
        color: white;
        font-size: 1rem;
    }


</style>



<body>
    
</body>
</html>
