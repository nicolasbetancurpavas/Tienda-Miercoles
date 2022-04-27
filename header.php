<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/cd03ee7cfb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body id="body">
    <header>
        <nav class="navagation">
            <div class="container-header">
                <div class="header">
                    <img class="item-img" src="img/logo.png" alt="">
                    <h2 class="tituloEmpresa ">Betasof</h2>
                </div>
                <div class="container-nav">
                    <ul class="nav">
                        <li class="item-nav"><a class="link-item-nav" href="index.php"><i class="bi bi-house"></i>Home</a></li>
                        <li class="item-nav"><a class="link-item-nav" href=""><i class="bi bi-telephone-outbound"></i>Conctacto</a></li>
                        <li class="item-nav"><a class="link-item-nav" href="chasisproduct.php"><i class="bi bi-pc"></i></i>Chasis pc</a>
                        </li>
                        <li class="armar-pc"> <button id="boton-hardware" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Arma tu Pc</li>
                        <li class="armar-pc">
                </div>
                <div class="login-car">
                    <ul class="container-login-car">
                        <li class="item-login-car"><a id="resumencompras" class="link-login-car"  href="">
                                <i class="bi bi-cart4"></i>
                                <span id="capsula" class="position-absolute top-5 start-5 translate-middle badge rounded-pill bg-danger invisible">
                                    .
                                </span></a>
                        </li>
                        <li class="item-login-car"><a  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" id="Login" class="link-login-car" href=""><i class="bi bi-person-fill"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</body>

</html>