<?php
  include("../../config/connection.php");
  if( isset($_POST["name"],$_POST["email"],$_POST["content"]) ){
    $sql = "insert into cotizacion (name,email,content)
    values ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["content"]."');";

    if (mysqli_query($conn, $sql)) {
        echo "¡Tu cotizacion ha sido enviada!";
    } else {
      echo "Error en Base de Datos: " . mysqli_error($conn);
    }
  }else{
    echo "Error:\nFalta información";
  }
?>
