<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>formulario</title>
        <style>
        body {
            background-image: url('fondo.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
            margin-right: 60%;
            margin-left: 7%;
        }  
    </style>
</head>
<?php
if (empty($_GET["nombre"])) {
    header("Location:index.php");
}
if(isset($_GET["nombre"])){
    $nombre=$_GET["nombre"];
}
$estadoArray = array ("","","","","","");
$sexoArray = array ("","","");
if(isset($_GET["editar"])){
    $apellidos=$_GET["apellidos"];
    $nif=$_GET["nif"];
    $poblacion=$_GET["poblacion"];
    $postal=$_GET["postal"];
    $fecha=$_GET["fecha"];
    $email=$_GET["email"];
    $email=$_GET["email"];
    $telefono=$_GET["telefono"];
    $sexo=$_GET["sexo"];
    $estado=$_GET["estado"];
    
for ($i = 0; $i < 6; $i++) {
    if($_GET["estado"]==$i){
        $estadoArray[$i]="selected";
    }
  }
for ($i = 0; $i < 3; $i++) {
    if($_GET["sexo"]==$i){
        $sexoArray[$i]="selected";
    }
  }
}
else{
    $apellidos=null;
    $nif=null;
    $poblacion=null;
    $postal=null;
    $fecha=null;
    $email=null;
    $email=null;
    $telefono=null;
    $sexo=null;
    $estado=null;
}

if($apellidos=="<a style='color: red' > Campo requerido</a>"){
    $apellidos=null;
}
if($nif=="<a style='color: red' > Campo requerido</a>"){
    $nif=null;
}
if($email=="<a style='color: red' > Campo requerido</a>"){
    $email=null;
}
if($telefono=="<a style='color: red' > Campo requerido</a>"){
    $telefono=null;
}

?>

<body>
        <div class="container">
            <h1>Registro</h1>
        </div>

        <div class="container">
            <form action="resumen.php" method="GET">
  
            <p>Nombre: <input type="text" name="nombre" class="form-control" id="nombre" value="<?php echo (isset($nombre)? $nombre :'')?>" readonly ></p>
            <p>Apellidos: <input type="textbox" name="apellidos" class="form-control" id="apellidos" value="<?php echo $apellidos?>" ></p>
            <p>NIF: <input type="textbox" name="nif" class="form-control" id="nif" value="<?php echo $nif?>" ></p>
            <p>Población: <input type="textbox" name="poblacion" class="form-control" id="poblacion" value="<?php echo $poblacion?>" ></p>
            <p>Codigo Postal: <input type="textbox" name="postal" class="form-control" id="postal"value="<?php echo $postal?>"></p>
            <p>Fecha nacimiento: <input type="date" name="fecha" class="form-control" id="fecha" value="<?php echo $fecha?>"></p>
            <p>Email: <input type="textbox" name="email" class="form-control" id="email" value="<?php echo $email?>" ></p>
            <p>Teléfono: <input type="textbox" name="telefono" class="form-control" id="telefono" value="<?php echo $telefono?>" ></p>
            
            <p>Sexo: <select  name="sexo" class="form-select" id="sexo" >
            <option hidden value="0"> Sexo </option>
                <option  <?php echo  $sexoArray[1];?> value="1">Mujer</option>
                <option  <?php echo  $sexoArray[2];?> value="2">Hombre</option>
            </select></p>

            <p>Estado civil: <select name="estado" class="form-select" id="estado"  >
                <option hidden value="0"> Estado</option>
                <option <?php echo  $estadoArray[1];?> value="1">Casado</option>
                <option  <?php echo  $estadoArray[2];?> value="2">Soltero</option>
                <option <?php echo  $estadoArray[3];?> value="3">Viudo</option>
                <option <?php echo  $estadoArray[4];?>value="4">Separado</option>
                <option <?php echo  $estadoArray[5];?>value="5">Otros</option>
            </select></p>
            
            <input type="submit"  class="btn btn-primary" value="Siguiente">
        </form>
        </div>
    <p>
    <div class="container">
        <form action="index.php">
            <input type="submit" class="btn btn-primary" value="Cancelar">
        </form>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</body>
</html>