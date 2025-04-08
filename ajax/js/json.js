// let nombre = "Carlos";
// let edad = 23;
// let pais = "México";

// let nombre2 = "Alejandro";
// let edad2 = 30;
// let pais2 = "España"
// console.log(nombre);

// Ejemplo de un objeto
let carlos = {
  nombre: "Carlos Arturo",
  edad: 23,
  pais: "México",
};

let alejandro = {
  nombre: "Alejandro",
  edad: 25,
  pais: "España",
};
// Acceder al valor de un objeto
console.log(carlos.nombre);

// Ejemplo de un arreglo
let nombreAmigos = ["Alejandro", "Carlos"];
// Acceder a un valor dentro de un arreglo
console.log(nombreAmigos[0]);

// Un archivo JSON es un arreglo, que dentro tiene objetos
// Ejemplo JSON
let amigos = [
  {
    nombre: "Alejandro",
    edad: 24,
    pais: "México",
  },
  {
    nombre: "Manuel",
    edad: 43,
    pais: "Colombia",
  },
];
// Acceder a un valor dentro del arreglo de objetos
console.log(amigos[0].pais);
