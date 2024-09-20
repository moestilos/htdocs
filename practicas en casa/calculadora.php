<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <style>
        /* Estilos básicos de la calculadora */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .calculadora {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"], select {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .resultado {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }
    </style>
</head>
<body>

<div class="calculadora">
    <h2>Calculadora Básica</h2>
    <form method="POST" action="">
        <input type="text" name="numero1" placeholder="Número 1" required>
        <input type="text" name="numero2" placeholder="Número 2" required>

        <select name="operacion" required>
            <option value="">Selecciona una operación</option>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select>

        <input type="submit" value="Calcular">
    </form>

    <div class="resultado">
        <?php
        // Verificar si el formulario ha sido enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Obtener los valores del formulario
            $numero1 = $_POST['numero1'];
            $numero2 = $_POST['numero2'];
            $operacion = $_POST['operacion'];

            // Validar que los valores sean numéricos
            if (is_numeric($numero1) && is_numeric($numero2)) {
                // Realizar la operación según lo seleccionado
                switch ($operacion) {
                    case 'suma':
                        $resultado = $numero1 + $numero2;
                        echo "Resultado: $numero1 + $numero2 = $resultado";
                        break;
                    case 'resta':
                        $resultado = $numero1 - $numero2;
                        echo "Resultado: $numero1 - $numero2 = $resultado";
                        break;
                    case 'multiplicacion':
                        $resultado = $numero1 * $numero2;
                        echo "Resultado: $numero1 * $numero2 = $resultado";
                        break;
                    case 'division':
                        if ($numero2 != 0) {
                            $resultado = $numero1 / $numero2;
                            echo "Resultado: $numero1 / $numero2 = $resultado";
                        } else {
                            echo "Error: No se puede dividir por cero.";
                        }
                        break;
                    default:
                        echo "Por favor, selecciona una operación válida.";
                        break;
                }
            } else {
                echo "Por favor, ingresa valores numéricos válidos.";
            }
        }
        ?>
    </div>
</div>

</body>
</html>
