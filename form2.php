<?php
  
    session_start();
    echo $_SESSION['username'];

  if ((isset($_POST['dateselected']) && !empty($_POST['dateselected'])) && (isset($_POST['age']) && !empty($_POST['age']))){

      $edad = filter_input($_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);
      $dateselected = filter_input($_POST,'dateselected', FILTER_SANITIZE_SPECIAL_CHARS);

      echo $edad ;
  }
      

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario2 php</title>
</head>
<body>
    <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
    
        <input type="date" name="dateselected">
        <input type="number" name = "age">
        <input type="submit" value="Envia">
        <a href="logout.php">Finalizar Sessión</a>
    </form>
</body>
</html>