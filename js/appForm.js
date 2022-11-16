var formulario = document.getElementById('formulario');

formulario.addEventListener('submit', function(e){
    e.preventDefault();
    console.log('me diste un click')

    var datos = new FormData(formulario);

    console.log(datos);
    console.log(datos.get('ctaOrigen'));
    console.log(datos.get('ctaDestino'));
    console.log(datos.get('concepto'));
    console.log(datos.get('monto'));
    console.log(datos.get('banco'));

    let url = 'http://localhost:80:Proyecto-integrador/movimientos/transferencia.php' //cambiar url
    fetch('url',{
        method: 'POST',
        body: datos
    })
        .then( res =>res.json())
        .then( data => {
            console.log(data)
        })
});