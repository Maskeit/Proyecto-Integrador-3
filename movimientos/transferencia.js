/*const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formualario input');


const validarFormulario = (e) => {
    console.log(e.target.name);
}

inputs.forEach((input)=>{
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});
formulario.addEventListener('submit', (e) =>{
    e.preventDefault(e);  
});
*/

(function(){

    var formulario = document.getElementsByName('formulario')[0],
      elementos = formulario.elements,
      boton = document.getElementById('btn');

      var validarDestino = function(e){
        if(formulario.ctaDestino.value == ''){
            alert("Completa el campo cuenta destino");
            e.preventDefault(e);
        }
      };

      var validarConcepto = function(e){
        if(formulario.concepto.value == ''){
            alert('No se describió un concepto');
            e.preventDefault(e);
        }
      };

      var validarMonto = function(e){
        if(formulario.monto.value = ''){
        } else{
          alert("No ingresaste monto");
          e.preventDefault(e);
        }
      };

      var validar = function(e){
        validarDestino(e);
        validarConcepto(e);
        validarMonto(e);
      };

      formulario.addEventListener("submit", validar);

}())
