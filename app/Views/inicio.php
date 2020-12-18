<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Inicio</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="color:purple; font-size=10em;"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        
            <a class="nav-link" href="<?php echo base_url('/categoria') ?>" style="color:purple;">Categorias</a>
          </li>
        </li>
         
            <a class="nav-link" href="<?php echo base_url('/contactos') ?>" style="color:purple;">Contactos</a>
          </li>
        </li>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/salir') ?>" style="color:purple;">Salir <span class="sr-only">(current)</span></a>
        </li>
       
       
          </div>
        </li>
      </ul>

    </div>
  </nav>
  <div class="jumbotron">
<div class="container">
        <div class="row">
        <div class="col-sm-12">
          <center>
          <img src="<?php echo base_url('cris.jpg') ?>" alt="" width="350" height="350">
        </center>
        <form method="POST" action="<?php echo base_url().'/crear' ?>">
           <center>
          <h1>Datos del Admin</h1>
        </center>
        <label for="nom">Nombre</label>
        <label for="concepto" class="form-control">Cristel Alonso Morales</label>
        <label for="edad">Edad</label>
        <label for="concepto" class="form-control">25 Años</label>
        <label for="carr">Carrera</label>
        <label for="concepto" class="form-control">Ing. en Sistemas Computacionales</label>
        <label for="espe">Especialidad</label>
        <label for="concepto" class="form-control">Administración de Servicios Web</label>
        </form>

        </div>
        </div>
        <hr>
    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>