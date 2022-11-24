
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

      var validarBeneficiario = function(e){
        if(formulario.beneficiario.value == ''){
            alert('No se especifico a quien se envia');
            e.preventDefault(e);
        }
      };

      var validarMonto = function(e){
        if(formulario.monto.value == ''){
          alert("No ingresaste monto");
          e.preventDefault(e);
        } else if(formulario.monto.value > 8000){
          alert("El monto sugerido excede los $8000 permitidos");
          e.preventDefault(e);
        }
      };

      var validar = function(e){
        validarDestino(e);
        validarConcepto(e);
        validarBeneficiario(e);
        validarMonto(e);
      };

      formulario.addEventListener("submit", validar);

}())
