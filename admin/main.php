<!DOCTYPE html>
<html>
	<head>
    <?php
      if(!$_POST){
        echo "<script>window.location.replace('http://localhost/carpinteria/admin/index.php');</script>";
      }
      include("../config/connection.php");
      $sql 	= 'SELECT * FROM admin where name="'.$_POST["Euser"].'" and password="'.$_POST["Epassw"].'"';
      $query 	= mysqli_query($conn, $sql);
      if(mysqli_num_rows($query) == 0){
        echo "<script>window.location.replace('http://localhost/carpinteria/admin/index.php?nolog=true');</script>";
      }

      // while ($row = mysqli_fetch_array($query))
      // {
      //   echo $row['name'] . " - " . $row['password'] . "<br>";
      // }
    ?>
		<title>Carpinteria</title>
		<meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/main.js"></script>
	</head>
	<body style="padding-top: 0px;">
		<header>
      <?php
        echo "<h3>Hola ".$_POST["Euser"] ."</h3>";
      ?>
		</header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary rounded">
      <a class="navbar-brand" href="#">Navbar</a>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link">Agrega Trabajador</a>
        </li>
        <li class="nav-item">
          <a class="nav-link">Presupuesto</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link">Peticion de Cotizaciones</a>
        </li>
        <li class="navbar-item">
          <a class="nav-link">Sesión</a>
        </li>
      </ul>
    </nav>
	</body>
</html>
