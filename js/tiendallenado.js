let productosBD = [
    {foto: `img/core3.png`, nombre: "Intel i3", precio: 45000, descripcion:"Camisetas personalisadas"},
    {foto: `img/inteli5.png`, nombre: "Intel i5", precio: 120000, descripcion:"Busos Personalisados"},
    {foto: `img/Procesadores-Intel-i7.png`, nombre: "Intel i7", precio: 74000, descripcion:"Camisetas de los clubes de futbol"},
    {foto: `img/core99.png`, nombre: "Intel i9", precio: 45000, descripcion:"Balones de la competicion"},
    {foto: `img/rysen3.png`, nombre: "Rysen i3", precio: 58000, descripcion:"Termos, Vasos, ETC"},
    {foto: `img/rysen5.png`, nombre: "Rysen i5", precio: 30000, descripcion:"Llaveros, Juguetes"},
    {foto: `img/rysen7.png`, nombre: "Rysen i7", precio: 135000, descripcion:"procesador"},
    {foto: `img/rysen9jpg.png`, nombre: "Rysen i9", precio: 8000, descripcion:"Poster de jugadores"},
    {foto: `img/petium.png`, nombre: "Pentium Gold", precio: 15000, descripcion:"Album de la competicion"},
    {foto: `img/core9.png`, nombre: "Core i9 Extreme", precio: 10000, descripcion:"Cartas de los jugadores"},
]

//Necesito recorrer un arreglar en JS

//1. Creo una variable para almacenar la base sobre la cual voy a pintar
let fila= document.getElementById("fila")
productosBD.forEach(function(producto){
console.log(producto.nombre)
    

    //pintando etiquetas

    //div con la clase col
    let columna=document.createElement("div")
    columna.classList.add("col")

    //div con las clases card h-100
    let tarjeta=document.createElement("div")
   
    tarjeta.classList.add("h-100")

    //img con la clase card-img-top
    let foto=document.createElement("img")
    foto.classList.add("img-cards")
    foto.src=producto.foto

    //h4 con la clase text center
    let titulo=document.createElement("h6")
    titulo.classList.add("text-center")
    titulo.textContent=producto.nombre

    let precio=document.createElement("h5")
    precio.classList.add("text-center")
    precio.textContent=producto.precio

    let descripcion=document.createElement("p")
    descripcion.classList.add("text")
    descripcion.classList.add("fs-6")
    descripcion.textContent=producto.descripcion

    let boton=document.createElement("button")
    boton.classList.add("botonsitoo")
    boton.textContent="comprar"

    //3. Padres e hijos
    
    tarjeta.appendChild(titulo)
    tarjeta.appendChild(foto)
    tarjeta.appendChild(descripcion)
    tarjeta.appendChild(precio)
    tarjeta.appendChild(boton)
    columna.appendChild(tarjeta)
    fila.appendChild(columna)
    


    
})