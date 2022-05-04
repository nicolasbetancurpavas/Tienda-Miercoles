<body>
    <header><?php
            include("header.php")
            ?>
    </header>
    <div class="container-registro-parent">
        <div class="flex-box item-registro">
            <div>
                <form id="formulario" class="formulario-registro" action="">
                    <div>
                        <div class="title-form">
                            <h3 class="title-registro-form">Registrate en Betasof</h3>
                        </div>
                        <div class="inpust">
                            <label class="input-item" for="resgistro-email">
                                <p class="registro-p">Correo eletronico</p>
                                <input class="input" id="email" type="email" name="" id="" placeholder="nicolas@gmail.com" required>
                            </label>
                            <label class="input-item" for="resgistro-nombre">
                                <p class="registro-p">Contraseña</p>
                                <input class="input" id="contraseña" type="password" name="" id="" placeholder="04563juancasta" required>
                            </label>
                        </div>
                    </div>
                    <div class="container-btn">
                        <input id="btn-registrar" class="boton-registro" type="submit" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </main>
    <section>
<!-- Modal -->
<div class="modal-header-validacion modal fade" id="modal-validacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-header-validacion modal-dialog modal-dialog-centered" role="document">
    <div id="modal-header-validacion" class=" modal-content">
      <div  class="modal-header-validacion">
        <h5 id="modal-title-title" class="modal-title" id="exampleModalLongTitle">Validacion</h5>
      </div>
      <div class="modal-body">
    <h4 id="validacion"></h4>
    <img id="img-validacion" src="img/pngtree-green-correct-icon-png-image_2912233.jpg" alt="">
      </div>
    </div>
  </div>
</div>
    </section>
    <section>
    <?php
    include("footer.php")
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/firebase.js" type="module"></script>
    <script src="js/registro.js" type="module"></script>
</body>

</html>