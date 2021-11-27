let datos;

window.onload=function(){
    fetch('ws/getUsuario.php').then((response)=>response.json()).then((json)=>{
        datos=json.data;
        console.log(datos);

        let tabla=document.querySelector("#tabla");
        tabla.innerHTML=crearTabla(datos);
    });
   

function crearTabla(array){
    let tabla = "<tr><th>Accion</th></th><th>Nombre</th><th>Apellido</th><th>Telefono</th><th>Email</th><th>Sexo</th></tr>";

    for (let tarea of array){
        let fila = "<tr id='"+tarea.id+"'> <td>"
        fila += "<i class='fas fa-trash-alt' onclick='borrarFila("+tarea.id+", "+datos+")'></i>"+" "+
        "<i class='fas fa-user-edit' onclick='verFormulario("+tarea.id+")'></i></td>";

        fila += "<td>"
        fila += tarea.nombre;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.apellido;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.telefono;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.email;
        fila += "</td>"

        fila += "<td>"
        fila += tarea.sexo;
        fila += "</td>"


        fila += "</tr>"
        tabla += fila;

    }

    return tabla;
}
    }