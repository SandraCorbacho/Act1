<?php
session_start();
    if (isset($_POST['username']) && !empty($_POST['username'])){
        //filtramos los caracteres especiales que podrian inyectar codigo
        $username = filter_input($_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
        $_SESSION['username'] = $_POST['username'];

        header('location:form2.php');
        //echo $username;
        
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario php</title>
</head>
<body>
<!--  Esto nos asegura que lo que nos pasa por nombre no puede meternos js, 
que no puedan inyectar codigo en nuestro sistema-->
    <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <label for="username">USERNAME</label>
        <input type="text" name="username">
        <input type="submit" value="Envia">
    </form>
</body>
</html>