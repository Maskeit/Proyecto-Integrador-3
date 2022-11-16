


var formulario = document.getElementById('formulario');
var respuesta = document.getElementById('respuesta');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('me diste un click')

    var datos = new FormData(formulario);

    //console.log(datos);
    console.log(datos.get('ctaOrigen'));
    console.log(datos.get('ctaDestino'));
    console.log(datos.get('concepto'));
    console.log(datos.get('monto'));
    console.log(datos.get('banco'));

    fetch('transferencia.php',{
        method: 'POST',
        body: datos
    })
        .then( res =>res.json())
        .then( data => {
            console.log(data)
            if(data === 'error'){
                respuesta.innerHTML = `<div class="alert alert-danger" role="alert">llena todos los campos</div>`
            } else {
                respuesta.innerHTML = `<div class="alert alert-primary" role="alert">${data}</div>`
    
            }
        })
});