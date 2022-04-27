export function ampliarInformacionProducto(evento) {

    let productos = {}

    //llenar informacion del producto
    productos.foto=evento.target.parentElement.querySelector("img").src
    productos.nombre=evento.target.parentElement.querySelector("h6").textContent
    productos.descripcion=evento.target.parentElement.querySelector("p").textContent
    productos.precio = evento.target.parentElement.querySelector("h5").textContent

    let fotoModal = document.getElementById("img-modal-chasis")
    fotoModal.src = evento.target.parentElement.querySelector("img").src
    let nombreModal = document.getElementById("nombre-chasis")
    nombreModal.textContent = evento.target.parentElement.querySelector("h6").textContent
    let descripcionModal = document.getElementById("descripcion-chasis")
    descripcionModal.textContent = evento.target.parentElement.querySelector("p").textContent
    let precioModal = document.getElementById("precioInfo")
    precioModal.textContent = evento.target.parentElement.querySelector("h5").textContent

    return productos

}

