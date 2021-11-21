function borrarFila(idFila){
    let fila = document.getElementById(idFila);
    fila.remove();
}

function verFormulario(idFila){ //Muestra el formulario
    document.getElementById("formulario").style.display="block";
    let nombre= document.getElementById(idFila).childNodes[2].innerHTML;
    let apellido= document.getElementById(idFila).childNodes[3].innerHTML;
    let telefono= document.getElementById(idFila).childNodes[4].innerHTML;
    let email= document.getElementById(idFila).childNodes[5].innerHTML;
    let sexo= document.getElementById(idFila).childNodes[6].innerHTML;

    /**console.log(nombre);
    console.log(apellido);
    console.log(telefono);
    console.log(email);
    console.log(sexo);**/
}
    
    

function guardarFormulario(idFila){ //Guarda los datos
    document.getElementById("formulario").style.display="none";
    guardarDatos();   
}

function guardarDatos(){
    let nombre= document.getElementById("nombreformulario").value;
    let apellido= document.getElementById("apellidoformulario").value;
    let telefono= document.getElementById("telefonoformulario").value;
    let email= document.getElementById("emailformulario").value;
    let sexo= document.getElementById("sexoformulario").value;

    /**console.log(nombre);
    console.log(apellido);
    console.log(telefono);
    console.log(email);
    console.log(sexo);
    **/
}
