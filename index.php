<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/cd03ee7cfb.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
</head>

<body id="body">
    <?php
    include("header.php");
    ?>
    <main>
        <section>
            <div class="container-main-grid ">
                <div class="box main-grid-armatupc animate__animated animate__zoomInDown">
                    <div class="main-grid-letter">
                        <h5 class="title-small-grid">el pc que quieres</h5>
                        <h2 class="title-larger-grid">Arma tu pc</h2>
                        <p class="description-grid">cpu,gpu,almacenamiento,refrigeracion</p>
                    </div>
                    <figure class="container-main-img">
                        <img id="img-armatupc" class="img-grid" src="img/arma-tupc.png" alt="">
                    </figure>
                    <figure class="container-main-btn-armatupc">
                        <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" class="btn-grid-main-armtupc" type="submit">Armar</button>
                        <figure>
                </div>
                <div class="box main-grid-accesorios animate__animated animate__zoomInDown">
                    <div class="main-grid-letter">
                        <h5 class="title-small-grid">los accesorios que necesitas</h5>
                        <h2 class="title-larger-grid">Accesorios</h2>
                        <p class="description-grid">todo tipo de accesorios de lujo y clasicos que se ajustan a tus necesidades</p>
                    </div>
                    <figure class="container-main-img-accesorios">
                        <img id="img-accesorios" class="img-grid" src="img/accesorios-gridpng.png" alt="">
                    </figure>
                    <figure class="container-main-btn-accesorios">
                        <button class="btn-grid-main-accesorios" type="submit">comprar</button>
                        <figure>
                </div>
                <div class="box main-grid-silla animate__animated animate__zoomInDown">
                    <div id="main-grid-letter" class="main-grid-letter">
                        <h5 id="font-size" class="title-small-grid">lo mejor para tu comodidad</h5>
                        <h2 id="font-size" class="title-larger-grid">Las mejores sillas a nivel mundial</h2>
                        <p id="font-size" class="description-grid">te brindamos la mejor comodidad para tu postura y flexibilidad</p>
                    </div>
                    <figure class="container-main-img-silla">
                        <img id="img-silla" class="img-grid" src="img/silla.png" alt="">
                    </figure>
                    <figure id="container-main-btn-silla" class="container-main-btn-silla">
                        <button class="btn-grid-main-silla" type="submit">ver sillas</button>
                        <figure>
                </div>
                <div class="box main-grid-monitores animate__animated animate__zoomInDown">
                    <div class="main-grid-letter">
                        <h5 class="title-small-drid">juega a la mejor ghz</h5>
                        <h2 class="title-larger-grid">Montitores</h2>
                        <p class="description-grid">aqui encontraras los mejores monitores, que brindan la mejor fluidez y tasa de refresco</p>
                    </div>
                    <figure class="container-main-img-monitores">
                        <img id="img-monitores" class="img-grid" src="img/Monitores1.png" alt="">
                    </figure>
                    <figure class="container-main-btn-monitores">
                        <button class="btn-grid-main-monitores" type="submit"> comprar</button>
                        <figure>
                </div>
                <div class="box main-grid-kits animate__animated animate__zoomInDown">
                    <div class="main-grid-letter">
                        <h5 class="title-small-drid">combos</h5>
                        <h2 class="title-larger-grid">Kits</h2>
                        <p class="description-grid">Tenemos combos para ti en precios oferta 20 % de descuento</p>
                    </div>
                    <figure class="container-main-img-kits">
                        <img id="img-kits" class="img-kits" src="img/kit.png" alt="">
                    </figure>
                    <figure class="container-main-btn-kits">
                        <button class="btn-grid-main-kits" type="submit">comprar</button>
                        <figure>
                </div>
            </div>
        </section>

        <section class="divisores-perisfericos">
            <h2 class="tituloperisfericos">Escoje tus aliados</h2>
            <div class="divisores-menu ">
                <a class="enlace-perisfericos" href="">
                    <img class="img-main-divisores" src="img/mando.png" alt="">
                    <h3>Mandos</h3>
                </a>
            </div>
            <div class="divisores-menu ">
                <a class="enlace-perisfericos" href="">
                    <img class="img-main-divisores" src="img/COMBOS.png" alt="">
                    <h3>Combos</h3>
                </a>
            </div>
            <div class="divisores-menu ">
                <a class="enlace-perisfericos" href="">
                    <img class="img-main-divisores" src="img/mouse.png" alt="">
                    <h3>Ratones</h3>
                </a>
            </div>
            <div class="divisores-menu ">
                <a class="enlace-perisfericos" href="">
                    <img class="img-main-divisores" src="img/keyboard.png" alt="">
                    <h3>Teclados</h3>
                </a>
            </div>
            <div class="divisores-menu ">
                <a class="enlace-perisfericos" href=""> <img class="img-main-divisores" src="img/audifonos.png" alt="">
                    <h3>auriculares</h3>
                </a>
            </div>
        </section>
        <section>
            <div class="container-quienes-somos">
                <div class="container-title">
                    <h2 class="title-title">Betasof</h2>
                </div>
                <div class="Informacion">
                    <p class="informacion">
                        Betasof creada por el desarrollador web Nicolas Betancur es una empresa que se dedica a la venta de computadores, partes y accesorios de última
                        tecnología, brindándole la posibilidad a las personas de actualizar equipos o armar su computador
                        con las especificaciones que desee.
                        En Compuclon Betasof, además de encontrar toda la tecnología relacionada con el área de los
                        computadores, se encontrará con un equipo humano de gran calidad, que está capacitado para brindarle
                        la mejor asesoría y solucionar sus inquietudes, por que más que comprar un pc, o una parte de éste,
                        usted se lleve una herramienta tecnológica eficiente, que cumpla con sus expectativas
                    </p>
                </div>
                <hr>
                <div class="desarrollador">
                    <div class="title-so">
                        <h5 class="title-so">¿quieres saber mas?</h5>
                        <a class="link-desarrollador" href="">
                            <li>ver perfil del desarrollador Nicolas Betacur</li>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php
    /*incluyo el offcavas*/
    include("canvas-armatupc.php");
    include("canvas-registrarse.php");
    ?>
    <section>
        <!-- Modal -->
        <div class="modal fade" id="modalcompra">
            <div class="modal-dialog modal-xl ">
                <div id="container-modal-resumen" class="modal-content">
                    <div class="modal-body">
                        <h2 class="modal-title" id="modaltitle">Tus compras <i class="bi bi-cart4"></i></h2>
                        <div class="modal-container-boby" id="base-carrito">

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btn-limpiar" type="button" class="btn-limpiar-carrito" data-bs-dismiss="modal">Limpiar carrito</button>
                        <button type="button" class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.php");
    ?>
    <script src="js/fillStore.js"></script>
    <script src="js/controller.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>