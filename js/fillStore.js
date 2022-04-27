export function llenarTienda() {
  let BDproductos = [
    {
      foto: "img/atx-aerocool-si.png",
      nombre: "CAJA ATX AEROCOOL SI-5200 VIDRIO TEMPLADO +3 FAN RGB",
      descripcion: "caja de torre media",
      precio: 344000,
    },
    {
      foto: "img/atx-aerocool.png",
      nombre: "CAJA ATX AEROCOOL BOLT RGB VIDRIO TEMPLADO",
      descripcion: "Caja de torre media",
      precio: 308000,
    },
    {
      foto: "img/atx-corsair-220t.png",
      nombre: "CAJA ATX CORSAIR ICUE 220T BLANCO RGB 3FAN RGB",
      descripcion: "chasis ATX inteligente torre con dos paneles",
      precio: 530000,
    },
    {
      foto: "img/caja-atx-Gamemax.png",
      nombre: "CAJA ATX GAMEMAX ASGARD ACRILICO 4 FAN RGB",
      descripcion: "GameMax Asgard Incluye ventilador RGB de 4×12",
      precio: 404000,
    },
    {
      foto: "img/caja-atx-gamer-cougar.png",
      nombre: "CAJA ATX GAMER COUGAR CONQUER VIDRIO TEMPLADO",
      descripcion: "el diseño único de COUGAR,",
      precio: 999000,
    },
    {
      foto: "img/caja-atx-iceberg-turboz8.png",
      nombre: "CAJA ATX ICEBERG TURBO Z8 LITE VIDRIO TEMPLADO + 3 FAN LED ROJO",
      descripcion: "La nueva caja Turbo Z8 ATX ",
      precio: 312000,
    },
    {
      foto: "img/caja-atx-iceberg.png",
      nombre: "CAJA ATX ICEBERG SPIDER VIDRIO TEMPLADO NEGRA 4 FAN ARGB",
      descripcion: "con un diseño enfocado en el vidrio",
      precio: 430000,
    },
    {
      foto: "img/caja-atx-mx660.png",
      nombre: "CAJA ATX COUGAR MX660 MESH RGB-L VIDRIO TEMPLADO 3 FAN ARGB",
      descripcion: "es una carcasa semitorre",
      precio: 462000,
    },
    {
      foto: "img/corsai-500d.png",
      nombre: "CAJA ATX COUGAR MX660 MESH RGB-L VIDRIO TEMPLADO 3 FAN ARGB",
      descripcion: "es un chasis semitorre ATX",
      precio: 852000,
    },
    {
      foto: "img/caja-micro-atx-v150.png",
      nombre: "CAJA MICRO ATX THERMALTAKE V150 VIDRIO TEMPLADO TG",
      descripcion: "The V150 TG is a micro chassis",
      precio: 323000,
    },
  ];

  let fila = document.getElementById("fila");
  BDproductos.forEach(function (producto) {
    let columna = document.createElement("div");
    columna.classList.add("col");

    let card = document.createElement("div");
    card.classList.add("h-100");
    card.classList.add("card-chasis");

    let image = document.createElement("img");
    image.classList.add("card-img");
    image.src = producto.foto;

    let title = document.createElement("h6");
    title.classList.add("card-title");
    title.textContent = producto.nombre;

    let price = document.createElement("h5");
    price.classList.add("card-price");
    price.textContent = producto.precio;

    let description = document.createElement("p");
    description.classList.add("card-description");
    description.textContent = producto.descripcion;

    let button = document.createElement("button");
    button.classList.add("card-btn");
    button.textContent = "Ver info";

    /* agregar hijo al elemento padre que contiene todo las card*/
    card.appendChild(image);
    card.appendChild(title);
    card.appendChild(description);
    card.appendChild(price);
    card.appendChild(button);
    fila.appendChild(columna);
    columna.appendChild(card);
  });
}
