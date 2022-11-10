var btn = document.getElementById('btn_cargar_usuarios');
var loader =document.getElementById('loader');

btn.addEventListener('click', function(){
    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'php/leer-datos.php');
    //peticion.open('GET', 'https://api.npoint.io/1cd57828553774bc1eda'); direccion para recibir datos desde la pagina de json

    loader.classList.add('active');

    peticion.onload = function(){
        //console.log(JSON.parse(peticion.responseText));
        var datos =JSON.parse(peticion.responseText);

        for(var i = 0; i<5; i++){ // o datos.length para mostrar todos
            var elemento = document.createElement('tr');
            elemento.innerHTML +=("<td>" + datos[i].idEjecutivo +"</td>");
            elemento.innerHTML +=("<td>" + datos[i].usuarioEjecutivo +"</td>");
            elemento.innerHTML +=("<td>" + datos[i].sucursal +"</td>");

            document.getElementById('tabla').appendChild(elemento);
        }
    }
        


    peticion.onreadystatechange = function(){
        //console.log(peticion.status); con esto vemos el estado de la peticion, si es 200 entonces todo va correcto, si es 404 entonces no encontro nada
        if(peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }
    }

    peticion.send();
});