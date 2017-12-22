<!DOCTYPE html>
<html>
	<head>
		<title>Log In</title>
		<meta charset="UTF-8"/>

		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="js/login.js"></script>
	</head>
	<body>
		<div>
			<form action="main.php" method="post" id="form-log" >
					<div class="form-group">
						<label for="Euser">Usuario:</label>
						<input type="text" id="Euser" name="Euser"class="form-control"/>
					</div>
					<div class="form-group">
						<label for="Epassw">Password:</label>
						<input type="password" id="Epassw" name="Epassw" class="form-control"/>
					</div>
					<input type="submit" value="iniciar sesión" id="sub" class="btn btn-primary btn-md btn-block" style="margin-top: 25px"/>
          <?php
            if($_GET){
          ?>
            <div class="invalid-feedback" id="no-login">
              <h4>Usuario o Contraseña invalidos</h4>
            </div>
            <script>
              $("#no-login").fadeIn();
              setTimeout(function(){
                $("#no-login").fadeOut()
              }, 3000);
            </script>
          <?php
            }
          ?>
			</form>
		</div>
	</body>
</html>
