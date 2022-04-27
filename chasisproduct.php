<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body id="body-chasis">
    <?php
    include("header.php");
    ?>
    <div class="container-chasis animate__animated animate__backInDown row row-cols-1 row-cols-md-5 g-4" id="fila">
    </div>
    </main>
    <section>
        <!-- Modal -->
        <div class="modal fade " id="modalinformacion">
            <div id="modal-l" class="modal-dialog modal-fullscreen">
            </div>
            <div id="content-modal" class="modal-content">
                <div id="modal-body" class="modal-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="container-modal-chasis">
                                <!-- navegacionb 
                                <div class="header-information">
                                    <nav class="nav-modal">
                                        <ul class="nav-modal-items">
                                            <li class="item"><a class="enlace-nav-modal" href="index.php"><i class="bi bi-house"></i>Inicio</a></li>
                                            <li class="item"><a class="enlace-nav-modal" href="chasisproduct.php"><i class="bi bi-pc"></i>ver chasis</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                -->
                                <img src="" alt="" id="img-modal-chasis">
                            </div>
                            <h3 id="nombre-chasis"></h3>
                            <p id="descripcion-chasis"></p>
                            <div class="container-calificacion">
                                <p>Calificacion</p>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                            <h5 id="precioInfo"></h5>
                        </div>
                        <div class="botones-carrito">
                            <label class="form-label">Cantidad</label>
                            <input type="number" value="1" min="1" max="200" class="form-control" id="cantidadProducto">
                            <button id="btn-addcar" type="button" class="btn-agregar-carrito">Agregar al carrito</button>
                            <button type="button" id="cerrarbtnn" class="btn btn-success">Comprar</button>
                        </div>
                    </div>
                    <div id="modal-footer">
                        <button type="button" class="btn-cerrar-info" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section>
        <!-- Modal -->
        <div class="modal fade " id="modalcompra">
            <div class="modal-dialog modal-xl">
                <div id="container-modal-resumen" class="modal-content">
                    <div class="modal-body">
                        <h2 class="modal-title" id="modaltitle">Tus compras <i class="bi bi-cart4"></i></h2>
                        <div class="modal-container-boby" id="base-carrito">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btn-limpiar" type="button" class="btn-limpiar-carrito" data-bs-dismiss="modal">Limpiar carrito</button>
                        <button type="button" id="cerrarbtn" class="btn btn-success">Comprar</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    /*incluyo off cavas*/
    include("canvas-armatupc.php");
    include("canvas-registrarse.php");
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/controller.js" type="module"></script>
<script src="js/fillStore.js"></script>
</html>