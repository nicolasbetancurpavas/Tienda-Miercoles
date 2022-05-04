import { llenarTienda } from "./fillStore.js";
import { ampliarInformacionProducto } from "./amplyfiInformation.js";

//creo un producto vacio
let productos = {};

//llamando al modulo de fillstore
llenarTienda();

//referencia modal
let modalinfo = new bootstrap.Modal(document.getElementById("modalinformacion"));
let modalComprar = new bootstrap.Modal(document.getElementById("modalcompra"));

//lanzando el modal
let contenedorTienda = document.getElementById("fila");
contenedorTienda.addEventListener("click", function (evento) {
  if (evento.target.classList.contains("card-btn")) {
    productos = ampliarInformacionProducto(evento);
    modalinfo.show();
  }
});

//rutina para añadir un producto al carrito de compras
let carrito = [];
let botonAddCard = document.getElementById("btn-addcar");

botonAddCard.addEventListener("click", function () {
  // capturar cantidad y agregarla al producto
  let cantidadProducto = document.getElementById("cantidadProducto").value;

  productos.cantidad = cantidadProducto;

  //agrego los productos al carrito
  carrito.push(productos);

  let suma = 0;

  carrito.forEach(function (producto) {
    suma = suma + Number(producto.cantidad);
  });

  console.log(productos)

  //pintar capsula de addcar
  let capsula = document.getElementById("capsula");
  capsula.textContent = suma;
  capsula.classList.remove("invisible");

  modalinfo.hide(); // cerrar nodal
});

// rutina para limpiar el carrito

let botonLimpiar = document.getElementById("btn-limpiar");

botonLimpiar.addEventListener("click", function () {
  carrito = [];
  let capsula = document.getElementById("capsula");
  capsula.classList.add("invisible");

});

//modal lanzar resumen carrito
let btnCompras = document.getElementById("resumencompras");

btnCompras.addEventListener("click", function (e) {
  let baseCarrito = document.getElementById("base-carrito");
  let totalPesos = document.getElementById("totalpesos")

  baseCarrito.innerHTML=""

  carrito.forEach(function (productocarrito) {
    let contenedorProducto = document.createElement("div");
    contenedorProducto.classList.add("container-producto");

    let divimagen = document.createElement("div");
    divimagen.classList.add("carrito-div-img");

    let imgCarrito = document.createElement("img");
    imgCarrito.classList.add("carrito-img");
    imgCarrito.src = productocarrito.foto;

    let divInfo = document.createElement("div");
    divInfo.classList.add("carrito-div-info");

    let nombre = document.createElement("h2");
    nombre.classList.add("carrito-titulo");
    nombre.textContent = productocarrito.nombre;

    let descripcion = document.createElement("p");
    descripcion.classList.add("carrito-descripcion");
    descripcion.textContent = productocarrito.descripcion;

    let cantidad = document.createElement("p");
    cantidad.classList.add("carrito-cantidad");
    cantidad.textContent = productocarrito.cantidad;

    let precio = document.createElement("h6");
    precio.classList.add("carrito-precio");
    precio.textContent = productocarrito.precio;

    let total = document.createElement("h6");
    total.classList.add("carrito-total");
    let resultado = Number(productocarrito.cantidad) * Number(productocarrito.precio);
    total.textContent =resultado; 


    //creo un atributo al objecto producto
     productocarrito.subtotal= resultado 

     //recorro el subtotal de los productos para poder dar resultado total

    let TotalnetoPesos = 0;
    carrito.forEach(function (producto) {
      TotalnetoPesos = TotalnetoPesos + Number(producto.subtotal);
    });
  
    totalPesos.textContent= "Total de tus compras: "+ TotalnetoPesos + " Cop"

    // cambio de pesos colombianos a dolares

    let btnusd = document.getElementById("btn-usd")

    btnusd.addEventListener ("click", function (){
      let usd = 1 * TotalnetoPesos / 4000 
      totalPesos.textContent= "Total de tus compras: "+ usd + "usd"
    })

    divInfo.appendChild(nombre);
    divInfo.appendChild(descripcion);
    divInfo.appendChild(cantidad);
    divInfo.appendChild(precio);
    divInfo.appendChild(total);
    divimagen.appendChild(imgCarrito);
    contenedorProducto.appendChild(divimagen);
    contenedorProducto.appendChild(divInfo);
    baseCarrito.appendChild(contenedorProducto);
  });

  e.preventDefault();
  modalComprar.show();
});


