











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloMain.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
    <title>Login</title>
</head> 
<body>

    <h1>∇ Login ∇</h1>


    <div class="cuadro">
    <?php
    echo"Login";
    ?>
    <br>
    <br>
    <form action = "control.php" method="post">User: <input type="text" name="user"><br><br>    
    Pass: <input type="password" name="clave"><br><br>
<input type="submit" value="➤"></form>
    </div>








</body>
<footer>
    Guillermo Mateos De Los Santos Aguilera
</footer>
</html>