<?php
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $nombre = $_REQUEST['nombre'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Exercie_8</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
     <?php
      if(!empty($nombre)){?>
        <ul class="list">
          <?php
            afficher_nombre($nombre);
          ?>
        </ul>
    <?php    }
    }
     ?>
    </div>

	<form action="index.php" method="GET">
            <div>
                <span>Nombre</span>
                <input type="number" name="nombre" required="required" min="1" >
                <input type="submit" name="valider">
            </div>
    </form>
</body>
</html>
