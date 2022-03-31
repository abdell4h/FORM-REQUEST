<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="./css/style.css" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Resumen</title>
  <style>
        body {
            background-image: url('fondo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }  
    </style>

</head>
<body >
    
<?php

  if (isset($_GET["nombre"])) {
    $nombre =$_GET["nombre"];
  }
  if (isset($_GET["apellidos"])) {
    $apellidos=$_GET["apellidos"];
    if (empty($apellidos)) {
      $apellidos = "<a style='color: red' > Campo requerido</a>";
      }
  }
  if (isset($_GET["nif"])) {
    $nif=$_GET["nif"];
    if (empty($nif)) {
      $nif = "<a style='color: red' > Campo requerido</a>";
      }
  }
  if (isset($_GET["poblacion"])) {
    $poblacion=$_GET["poblacion"];
    if (empty($poblacion)) {
      $poblacion = null;
    }
  }
  if (isset($_GET["postal"])) {
    $postal=$_GET["postal"];
    if (empty($postal)) {
      $postal = null;
    }
  }
  if (isset($_GET["fecha"])) {
    $fecha=$_GET["fecha"];
    if (empty($fecha)) {
      $fecha = null;
    }
  }
  if (isset($_GET["email"])) {
    $email=$_GET["email"];
    if (empty($email)) {
      $email = "<a style='color: red' > Campo requerido</a>";
      }
  }
  if (isset($_GET["telefono"])) {
    $telefono=$_GET["telefono"];
    if (empty($telefono)) {
      $telefono = "<a style='color: red' > Campo requerido</a>";
      }
  }
  if (isset($_GET["sexo"])) {
    $sexo=$_GET["sexo"];
    $sexoArray = array("","Mujer","Hombre");
    $numSexo;
  for ($i = 0; $i < 3; $i++) {
    if($sexo==$i ){
      $sexo=$sexoArray[$i];
      $numSexo=$i;
    }
  }
  }
  if (isset($_GET["estado"])) {
    $estado=$_GET["estado"];
    $estadoArray = array("","Casado", "Soltero", "Viudo","Separado","Otros");
    $numEstado;
    for ($i = 0; $i < 6; $i++) {
      if($estado==$i ){
        $estado=$estadoArray[$i];
        $numEstado=$i;
      }
    }
  }

  
?>
<div class="container">
  <h1>Resumen</h1>
  <label for="nombre" class="form-label"> Nombre :<?php  echo (isset($nombre)? $nombre :'') ?></label><br>
  <label for="apellidos" class="form-label"> Apellidos :<?php echo (isset($apellidos)? $apellidos :'') ?></label><br>
  <label for="nombre" class="form-label"> NIF :<?php echo (isset($nif)? $nif :'')?></label><br>
  <label for="nombre" class="form-label"> Población :<?php echo (isset($poblacion)? $poblacion :'') ?></label><br>
  <label for="nombre" class="form-label"> Codigo Postal :<?php echo (isset($postal)? $postal :'') ?></label><br>
  <label for="nombre" class="form-label"> Fecha nacimiento :<?php echo (isset($fecha)? $fecha :'') ?></label><br>
  <label for="nombre" class="form-label"> Email :<?php echo (isset($email)? $email :'') ?></label><br>
  <label for="nombre" class="form-label"> Teléfono :<?php echo (isset($telefono)? $telefono :'') ?></label><br>
  <label for="nombre" class="form-label"> Sexo :<?php  echo (isset($sexo)? $sexo :'')?></label><br>
  <label for="nombre" class="form-label"> Estado Civil :<?php echo (isset($estado)? $estado :'') ?></label><br>
  



        <form action="formulario.php" method="GET">
            <input type="hidden" name="nombre" id="nombre" value="<?php echo $nombre?>" >
            <input type="hidden" name="apellidos" id="apellidos" value="<?php echo $apellidos?>" >
            <input type="hidden" name="nif" id="nif" value="<?php echo $nif?>"></p>
            <input type="hidden" name="poblacion" id="poblacion" value="<?php echo $poblacion?>" ></p>
            <input type="hidden" name="postal" id="postal"value="<?php echo $postal?>"></p>
            <input type="hidden" name="fecha" id="fecha" value="<?php echo $fecha?>"></p>
            <input type="hidden" name="email" id="email" value="<?php echo $email?>"></p>
            <input type="hidden" name="telefono" id="telefono" value="<?php echo $telefono?>" ></p>
            <input type="hidden" name="sexo" id="sexo" value="<?php  $sexo=$numSexo;echo $sexo;?>"></p>
            <input type="hidden" name="estado" id="estado" value="<?php  $estado=$numEstado; echo $estado;?>"> </p>
            
            <input name="editar" type="submit" class="btn btn-primary"value="EDITAR">
            </form>
            <p></p>
            <form action="index.php">
            <input type="submit" class="btn btn-primary" value="OK">
        </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  
</body>
</html>

