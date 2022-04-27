
<body>
    <header><?php
            include("header.php")
            ?>
    </header>
    <div class="container-registro-parent">
        <div class="flex-box item-registro">
            <div>
                <form class="formulario-registro" action="">
                    <div class="title-form">
                        <h3 class="title-registro-form">Registrate en Betasof</h3>
                    </div>
                    <div class="inpust">
                        <label class="input-item" for="resgistro-nombre">
                            <input type="text" name="" id="" placeholder="Nombre" required>
                        </label>
                        <label class="input-item" for="resgistro-apellido">
                            <input type="text" name="" id="" placeholder="Apellido" required>
                        </label>
                        <label class="input-item" for="resgistro-email">
                            <input id="email" type="email" name="" id="" placeholder="Correo eletronico" required>
                        </label>
                        <label class="input-item" for="resgistro-nombre">
                            <input id="contraseña" type="password" name="" id="" placeholder="pass" required>
                        </label>
                    </div>
                    <div class="container-btn">
                        <input id="btn-registrar" class="boton-registro" type="submit" value="Registrar">
                        <h4 id="verificacion"></h4>
                    </div>
                </form>
            </div>
        </div>
        <div class="flex-box item-right">
            <div class="img-registro">
                <img class="img-registro-item" src="img/logo.png" alt="">
            </div>
        </div>
    </div>
    </main>
    <script src="js/firebase.js" type="module"></script>
    <script src="js/registro.js" type="module"></script>
    <?php
    include("footer.php")
    ?>
</body>

</html>