<?php
declare(strict_types=1);
// ini_set('display_errors', 'On') SIRVE PARA QUE EL NAVEGADOR MUESTRE LOS FALLOS EXISTENTES EN EL CÓDIGO
ini_set('display_errors', 'On');

$nombre = $_GET['nombre'];
if(isset($_GET['nombre'])){ 
    var_dump($nombre);
    die;
    echo "Tu nombre es: ".$nombre."<br>";
} else {echo  "Introduce un nombre porfavor.";}
echo '<pre>';
print_r($_SERVER);
echo '</pre>';





?>