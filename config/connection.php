<?php
  include("showErrors.php");

  $server = "localhost";
  $username = "root";
  $password = "toor";
  $db_name = "carpinteria";

  $conn = @mysqli_connect($server, $username, $password, $db_name);
  if (!$conn) {
      echo "Error: " . mysqli_connect_error();
      exit();
  }
?>
