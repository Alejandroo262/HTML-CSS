const datos=[
    {
        Nombre:"Alejandro", Apellido:"Baeza", Telefono:654654654, Email:"alejandrobaeza@gmail.com", Sexo:"hombre"
    },
    {
        Nombre:"Pepe", Apellido:"Suarez", Telefono:634634634, Email:"pepsuarez@gmail.com", Sexo:"hombre"
    }
]

function crearTabla(array){
    let tabla = "<tr><th>Accion</th></th><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Email</th><th>Sexo</th></tr>";

    for (let tarea of array){
        let fila = "<tr id='"+tabla.id+"'> <td>"
        fila += "<button onclick='borrarFila("+tarea.id+")'>X</button></td>";

        fila += "<td>"
        fila += tarea.Nombre;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.Apellido;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.Telefono;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.Email;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.Sexo;
        fila += "</td>"


        fila += "</tr>"
        tabla += fila;

    }

    return tabla;
}

let tabla=document.querySelector("#tabla");
tabla.innerHTML=crearTabla(datos);

