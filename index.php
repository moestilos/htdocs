<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Menu</title>
    <style>
        body {
            font-family: "Sofadi One", system-ui;
    font-weight: 400;
    font-style: normal;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        .directory-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            list-style: none;
            padding: 0;
        }
        .directory-list li {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .directory-list a {
            display: block; /* Makes the link fill the entire list item */
            padding: 15px;
            text-decoration: none;
            color: #333;
            height: 100%;
            width: 100%;
        }

        body {
    background-image: url('codigoi.png');
    font-family: "Sofadi One", system-ui;
    font-weight: 400;
    font-style: normal;
    
}
        .directory-list li:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 5px rgba(0,0,0,0.2);
        }
        .phpmyadmin-link {
            display: block;
            background-color: #C6FBE9; /* light pastel color */
            border-radius: 10px;
            text-align: center;
            padding: 15px;
            margin-top: 30px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            border: 1px solid #ddd;
            text-decoration: none;
            color: #333;
            transition: background-color 0.2s;
        }
        .phpmyadmin-link:hover {
            background-color: #e9d8c3; /* slightly darker pastel on hover */
            box-shadow: 0 4px 5px rgba(0,0,0,0.2);
        }
        
        img{
        	border-radius: 6px;
        }
        
        a.normal{
        	padding: 5px !important;
        }

        h1 {
            color: black;
            text-align: center;
            background-color: white;
            border-radius: 3rem;
            margin-left: 35rem;
            margin-right: 35rem;
            padding: 1rem;
            margin-bottom: 5rem;
        }

        footer {
    position: fixed;
    width: 100%;
    bottom: 0;
    text-align: center;
    background-color: #f0f0f0;
    padding: 10px;
    text-align: center;
    
    
  }
  








    </style>
</head>
<body>
    <h1>Proyectos:</h1>
    <ul class="directory-list">
        <?php
        $directorio = __DIR__; // Sustituye esto por la ruta de tu directorio
        if (is_dir($directorio)) {
            $gestor = opendir($directorio);
            while (false !== ($nombre_archivo = readdir($gestor))) {
                $ruta_completa = $directorio . "/" . $nombre_archivo;
                if ($nombre_archivo != "." && $nombre_archivo != ".." && is_dir($ruta_completa)) {
                    echo "<li><a href='{$nombre_archivo}/'>".$nombre_archivo."</a></li>\n";
                }
            }
            closedir($gestor);
        } else {
            echo "<li>El directorio no existe o no se puede acceder a �l.</li>";
        }
        ?>
    </ul>
    <footer>
    Hecho por Willy
</footer>
</html>
