<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Tipos de Variables</title>
</head>
<body>
    <h1>Tipos de Variables</h1>

  <div><?php 
  $int = 10;                                                //esto es un int
  $String = "Willy";                                        //esto un String
  $Boolean = $int > 9;                                      //esto un booleano
  $StringInt = '5';                                         //esto es un string pero se puede convertir en int
 $resultado = $int + $StringInt;                    //Puedes combinar un INT con un STRING
 $resultado2 = $int . $StringInt;
 $resultado3 = $int . $String;

  echo "$int <br> ";                                        //Esto imprime
  echo "$String<br>";                                       //Esto imprime
  echo $Boolean;                                            //Esto imprime
  echo $StringInt;                                          //Esto imprime


echo "<br>La suma de $int + $StringInt es : ---->  $resultado ";        //EL RESULTADO ES 15 POR USAR +
//PERO SI USAMOS . SE PONE UNO DELANTE DE OTRO
echo "<br>La suma de $int + $StringInt es : ---->  $resultado2 ";       //EL RESULTADO ES 105 POR USAR .

echo "<br>La suma de $int + $StringInt es : ---->  $resultado3 ";       //EL RESULTADO ES 10WILLY




  
  
  ?></div>


    
</body>
</html>