<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div  class="container-fluid ttv">

        <div class="spinner-border text-info" role="status">
        </div>

        <div class="spinner-grow text-secondary" role="status">
        <span class="visually-hidden">Loading...</span>
        </div>

        <img class="img" src="img/icono.png" alt="">
        
        <br>
          <a id ="titulo" class="titulo- navbar-brand  navv" href="index.php"> TecnoBeta</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            
          <span class="navbar-toggler-icon"></span>

          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">

                <a id="adm" class="nav-link adm" href="sesion.php">Administrador</a>
                
              </li>

              <li class="nav-item">
                <a id="titulo"class="nav-link navv" href="#">chasisTecbeta</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle navv" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Arma tu pc 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item pc" href="procesadores.php">Cpu</a></li>
                  <li><a class="dropdown-item pc" href="#">Motherboar</a></li>
                  <li><a class="dropdown-item pc" href="#">Gpu</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle navv" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Almacenamiento
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item navv" href="#">Disco HDD</a></li>
                  <li><a class="dropdown-item navv" href="#">Discos SSD</a></li>
                  <li><a class="dropdown-item navv" href="#">Ram</a></li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link disabled navv">Pronto servicio(Pc personalizados)</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>