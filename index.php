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

        <section class="divisores-perisfericos">
            <div>
                <h2 class="tituloperisfericos">Escoje tus aliados</h2>
            </div>
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
            <div class="container-parent">
                <div class="container-mainflex">
                    <div class="box-mainflex-armarpc box-mainflex">
                        <div class="box-description">
                            <h5 class="item-description-h5">el pc que quieres</h5>
                            <h3 class="item-description-h2">Arma tu pc</h3>
                            <p class="item-description-h5">cpu,gpu,almacenamiento,refrigeracion</p>
                        </div>
                        <div class="container-img-flexbox box-armatupc">
                            <img class="img-flexbox" id="img-flexbox-armatupc" src="img/arma-tupc.png" alt="">
                        </div>
                        <div class="container-btn-flexbox">
                            <button class="btn-flexbox" id="btn-armatupc" type="submit">arma tu pc</button>
                        </div>
                    </div>
                    <div class="box-mainflex-accesorios box-mainflex">
                        <div class="box-description">
                            <h5 class="item-description-h5">los accesorios que necesitas</h5>
                            <h3 class="item-description-h2">Accesorios</h3>
                            <p class="item-description-h5">todo tipo de accesorios de lujo y clasicos que se ajustan a tus necesidades</p>
                        </div>
                        <div class="container-img-flexbox box-accesorios">
                            <img class="img-flexbox" id="img-flexbox-accesorios" src="img/accesorios-gridpng.png" alt="">
                        </div>
                        <div class="container-btn-flexbox">
                            <button class="btn-flexbox" id="btn-accesorios" type="submit">comprar</button>
                        </div>
                    </div>
                    <div id="box-mainflex-silla" class="box-mainflex-silla box-mainflex">
                        <div class="box-description">
                            <h5 class="item-description-h5">lo mejor para tu comodidad</h5>
                            <h3 class="item-description-h2">Las mejores sillas a nivel mundial</h3>
                            <p class="item-description-h5">te brindamos la mejor comodidad para tu postura y flexibilidad</p>
                        </div>
                        <div class="container-img-flexbox box-silla">
                            <img class="img-flexbox" id="img-flexbox-silla" src="img/silla.png" alt="">
                        </div>
                        <div class="container-btn-flexbox">
                            <button class="btn-flexbox" id="btn-silla" type="submit" value=>comprar</button>
                        </div>
                    </div>
                    <div class="box-mainflex-monitor box-mainflex">
                        <div class="box-description">
                            <h5 class="item-description-h5">juega a la mejor ghz</h5>
                            <h3 class="item-description-h2">Montitores</h3>
                            <p class="item-description-h5">aqui encontraras los mejores monitores, que brindan la mejor fluidez y tasa de refresco</p>
                        </div>
                        <div class="container-img-flexbox box-monitores">
                            <img class="img-flexbox" id="img-flexbox-monitores" src="img/Monitores1.png" alt="">
                        </div>
                        <div class="container-btn-flexbox">
                            <button class="btn-flexbox" id="btn-monitores" type="submit">comprar</button>
                        </div>
                    </div>
                    <div class="box-mainflex-kits box-mainflex">
                        <div class="box-description">
                            <h5 class="item-description-h5">combos</h5>
                            <h3 class="item-description-h2">Kits</h3>
                            <p class="item-description-h5">Tenemos combos para ti en precios oferta 20 % de descuento</p>
                        </div>
                        <div class="container-img-flexbox box-kits">
                            <img class="img-flexbox " id="img-flexbox-kit" src="img/kit.png" alt="">
                        </div>
                        <div class="container-btn-flexbox">
                            <button class="btn-flexbox" id="btn-kits" type="submit">comprar</button>
                        </div>
                    </div>
                </div>
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
    include("canvas-login.php");
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
    <script src="js/firebase.js" type="module"></script>
    <script src="js/registro.js" type="module"></script>
    <script src="js/fillStore.js" type="module"></script>
    <script src="js/controller.js" type="module"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>