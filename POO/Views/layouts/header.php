<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="assets/icono.png" type="image/x-icon">
    <title>Document</title>
    <!-- styles -->
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<nav id="menu" class="navbar navbar-expand-md bg-light navbar-light kj mb-5 fixed-top shadow-lg p-3 mb-5 bg-white rounded">
<a class="navbar-brand" href="#">
    <img src="assets/icono.png" width="45" height="45" alt="">
  </a>
<a class="navbar-brand display-3" href="Index.php" style="font-family: 'Lexend Deca', sans-serif;">Document</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
              <!--
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <a href="#" class="nav-item nav-link">Messages</a>
                <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
              -->
            </div>
            <div class="navbar-nav ml-auto " style="font-family: 'Lexend Deca', sans-serif;"><br>
<?php if(! isset($_SESSION['user'])): ?>
<button type="button" class="btn btn-success ml-2 my-2 my-sm-0 mt-3" data-toggle="modal" data-target="#exampleModalRegistro">
  Registro
</button>
<button type="button" class="btn btn-primary my-2 ml-2 my-sm-0" data-toggle="modal" data-target="#exampleModalCenter">
  Iniciar sesion
</button>
<?php endif; ?>
<?php if(isset($_SESSION['user'])): ?>
<?php if($_SESSION['user']->id_rol == 1){ ?>
            <a class="btn btn-success mr-1 ml-1" href="?controller=user" role="button">Users</a><br>
<?php } ?>
            <a class="btn btn-success mr-1 ml-1" href="?controller=publi" role="button">Publicaciones</a>
                <a class="btn btn-danger mr-1 ml-1" href="?controller=security&method=logout" role="button">Cerrar sesion</a></li>
        <?php endif; ?>
</div>
</div>

    </nav><br><br>
 
