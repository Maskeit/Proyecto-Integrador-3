$(document).ready(function() {
    var idComprobante, opcion;
    opcion = 4;
        
    tablaAcademico = $('#tablaUsuarios').DataTable({  
        "ajax":{            
            "url": "bd/estado.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            //PERO SI AGREGAMOS LA COLUMNA DE BANCO SE NOS DESAPARECE EL ERROR PERO AUN SI NO NOS LLAMA LOS DATOS
            {"data": "idComprobante"},
            {"data": "origenDeb"},
            {"data": "destinoDeb"},
            {"data": "beneficiario"},
            {"data": "concepto"},
            {"data": "monto"},
            {"data": "fecha"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });     
    
    var fila; //captura la fila, para editar o eliminar
    //submit para el cliente y Actualización
    $('#formUsuarios').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        origenDeb = $.trim($('#origenDeb').val());    
        destinoDeb = $.trim($('#destinoDeb').val());    
        beneficiario = $.trim($('#beneficiario').val());    
        concepto = $.trim($('#concepto').val());
        monto = $.trim($('#monto').val());
        inputGroupSelect02 = $.trim($('#inputGroupSelect02').val());
        fecha = $.trim($('#fecha').val());                    
            $.ajax({
              url: "bd/estado.php",
              type: "POST",
              datatype:"json",    
              data:  {idComprobante:idComprobante, origenDeb:origenDeb, destinoDeb:destinoDeb, beneficiario:beneficiario, concepto:concepto, monto:monto, inputGroupSelect02:inputGroupSelect02, fecha:fecha},    
              success: function(data) {
                tablaAcademico.ajax.reload(null, false);
               }
            });			        
        $('#modalCRUD').modal('hide');											     			
    });

            
});    
