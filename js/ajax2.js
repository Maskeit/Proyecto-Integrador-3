var btn_cargar = document.getElementById('btn_cargar_usuarios'),
    error_box = document.getElementById('error_box'),
    tabla = document.getElementById('tabla'),
    loader = document.getElementById('loader');

var usuario_ejecutivo,
    usuario_sucursal;

function cargarUsuarios(){
    tabla.innerHTML= '<tr><th>ID</th><th>Ejecutivo</th><th>Sucursal</th></tr>';

    var peticion = new XMLHttpRequest();
    peticion.open('GET', 'js/leer-datos.php');

    loader.classList.add('active');

    peticion.onload = function(){
        var datos = JSON.parse(peticion.responseText);
        console.log(datos); //si quieres ver los datos traidos en la consola
        
        if(datos.error){
            error_box.classList.add('active');
        } else{
            for(var i = 0; i < datos.length; i++){//tener cuidado con la ortografia
                var elemento = document.createElement('tr');
                elemento.innerHTML +=("<td>" + datos[i].idEjecutivo +"</td>");
                elemento.innerHTML +=("<td>" + datos[i].usuarioEjecutivo +"</td>");
                elemento.innerHTML +=("<td>" + datos[i].sucursal +"</td>");
            tabla.appendChild(elemento);
            }
        }
    }
    
    peticion.onreadystatechange = function(){
        if(peticion.readyState == 4 && peticion.status == 200){
            loader.classList.remove('active');
        }
    }
    peticion.send();
}

function agregarUsuarios(e){
    e.preventDefault();

    var  peticion = new XMLHttpRequest();
    peticion.open('POST');
}

btn_cargar.addEventListener('click', function(){
    cargarUsuarios();
});
