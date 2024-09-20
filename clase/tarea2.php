<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloMain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Tarea 2</title>
</head>
<body>


    <div>
        <script>
            var array = [
                "Guille",
                "Ismael",
                "Gabriel",
                "Hugo",
                "Sara",
                "Estrella",
                "Pepe",
                "Enrique",
                "Samuel",
                "Zamudio"
            ];
            
            var nombre = prompt("¿Cómo te llamas?");
            var encontrado = false;

            for(var i = 0; i < array.length; i++){
                if(nombre === array[i]){
                    alert("Estás en la lista, " + nombre);
                    encontrado = true;
                    break; // Detenemos el ciclo si encontramos el nombre
                }
            }

            if(!encontrado) {
                alert(nombre + " no está en la lista");
            }
        </script>
    </div>
</body>
</html>
