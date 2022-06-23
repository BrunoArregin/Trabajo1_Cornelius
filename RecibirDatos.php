<?php
    $nombre1=$_POST["nombre"];
    $edad1=$_POST["edad"];
    $celular=$_POST["cel"];
    echo "Hola $nombre1, tienes $edad1 años de edad.\n";
    if($edad1>=18){
        echo " Tu numero de celular es $celular";
    }else{
        echo " No puedo mostrarte el celular.";
    }
?>