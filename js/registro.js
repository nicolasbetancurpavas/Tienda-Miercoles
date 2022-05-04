import {getAuth,createUserWithEmailAndPassword,} from "https://www.gstatic.com/firebasejs/9.6.10/firebase-auth.js";

let botonregistro = document.getElementById("btn-registrar");
let modalregistro = new bootstrap.Modal(document.getElementById("modal-validacion"));
let txtvalidacion = document.getElementById("validacion")
let form = document.getElementById("formulario")
let imgValidar = document.getElementById("img-validacion")

botonregistro.addEventListener("click", function (evento) {
  evento.preventDefault();

  let email = document.getElementById("email").value;
  let password = document.getElementById("contraseña").value;
 
  const auth = getAuth();
  createUserWithEmailAndPassword(auth, email, password) 
    .then((userCredential) => {
      // Signed in
      const user = userCredential.user;
      console.log("exito de registro")
      txtvalidacion.textContent="Exito en el registro"
      modalregistro.show()
      form.reset()
      setTimeout(function(){
        modalregistro.hide()
      },1500)
      // ...
    })
    .catch((error) => {
      const errorCode = error.code;
      const errorMessage = error.message;
      // ..
      console.log("fallo" +errorMessage)
      modalregistro.show()
      imgValidar.src="img/120-1203855_error-handling-in-swift-error-logo-png.png"
      setTimeout(function(){
        modalregistro.hide()
      },1500)
      txtvalidacion.textContent="fallaste"+errorMessage
    });

});

