<html>
  <head>
    <title>Trabajo 1</title>
  </head>
  <body>
    <form action="" method="get">
      <input type="text" name="nombre"> <br>
      <input type="number" name="edad"><br>
      <input type="submit" value="Enviar"> <br>

        <?php
          $nombre1 = ($_GET["nombre"]);
          $edad1 = ($_GET["edad"]);
          echo "Hola $nombre1, tienes $edad1 años de edad.\n";
          if($edad1>=18){
            echo "$nombre1 eres mayor de edad. \n";
          }else{
            echo"$nombre1 eres menor de edad.\n";
          }
        ?>
    </form>
  </body>
</html>