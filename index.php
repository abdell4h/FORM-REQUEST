<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="./css/style.css" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>index</title>
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



?>

<body>
    <div class="container">
        <label for="" class="form-label">
            <h1>Inicio</h1>
        </label>

        <form action="formulario.php" method="GET">
            <p>
                <label for="" class="form-label">Introduce tu nombre: </label>
                 
                <input type="textbox"  class="form-control" name="nombre">
                <br>
                <input type="submit" class="btn btn-primary" value="ENTRAR">
            </p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>