$(document).ready(function() {
    var idCliente, opcion;
    opcion = 4;
        
    tablaAcademico = $('#tablaUsuarios').DataTable({  
        "ajax":{            
            "url": "bd/crud.php", 
            "method": 'POST', //usamos el metodo POST
            "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
            "dataSrc":""
        },
        "columns":[
            {"data": "idCliente"},
            {"data": "codigoCliente"},
            {"data": "nombre"},
            {"data": "apellidoPaterno"},
            {"data": "apellidoMaterno"},
            {"data": "estado"},
            {"data": "municipio"},
            {"data": "calle"},
            {"data": "colonia"},
            {"data": "codigoPostal"},
            {"data": "sexo"},
            {"data": "curp"},
            {"data": "fechaNacimiento"},
            {"data": "saldo"},
            {"data": "ocupacion"},
            {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}
        ]
    });     
    
    var fila; //captura la fila, para editar o eliminar
    //submit para el cliente y Actualización
    $('#formUsuarios').submit(function(e){                         
        e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
        codigoCliente = $.trim($('#codigoCliente').val());  
        nombre = $.trim($('#nombre').val());    
        apellidoPaterno = $.trim($('#apellidoPaterno').val());    
        apellidoMaterno = $.trim($('#apellidoMaterno').val());    
        estado = $.trim($('#estado').val());
        municipio = $.trim($('#municipio').val());
        calle = $.trim($('#calle').val());
        colonia = $.trim($('#colonia').val());
        codigoPostal = $.trim($('#codigoPostal').val());
        sexo = $.trim($('#sexo').val());
        curp = $.trim($('#curp').val());
        fechaNacimiento = $.trim($('#fechaNacimiento').val());
        saldo = $.trim($('#saldo').val());  
        ocupacion = $.trim($('#ocupacion').val());                        
            $.ajax({
              url: "bd/crud.php",
              type: "POST",
              datatype:"json",    
              data:  {idCliente:idCliente, codigoCliente:codigoCliente, nombre:nombre, apellidoPaterno:apellidoPaterno, apellidoMaterno:apellidoMaterno, estado:estado, municipio:municipio, calle:calle, colonia:colonia, codigoPostal:codigoPostal, sexo:sexo, curp:curp, fechaNacimiento:fechaNacimiento, saldo:saldo, ocupacion:ocupacion, opcion:opcion},    
              success: function(data) {
                tablaAcademico.ajax.reload(null, false);
               }
            });			        
        $('#modalCRUD').modal('hide');											     			
    });
            
     
    
    //para limpiar los campos antes de dar de cliente una Persona
    $("#btnNuevo").click(function(){
        opcion = 1; //cliente           
        idCliente=null;
        $("#formAcademico").trigger("reset");
        $(".modal-header").css( "background-color", "#2e7d32");
        $(".modal-header").css( "color", "white" );
        $(".modal-title").text("Alta de Cliente");
        $('#modalCRUD').modal('show');	    
    });
    
    //Editar        
    $(document).on("click", ".btnEditar", function(){		        
        opcion = 2;//editar
        fila = $(this).closest("tr");	        		            
        idCliente = parseInt(fila.find('td:eq(0)').text());
        codigoCliente = fila.find('td:eq(1)').text();
        nombre = fila.find('td:eq(2)').text();
        apellidoPaterno = fila.find('td:eq(3)').text();
        apellidoMaterno = fila.find('td:eq(4)').text();
        estado = fila.find('td:eq(5)').text();
        municipio = fila.find('td:eq(6)').text();
        calle = fila.find('td:eq(7)').text();
        colonia = fila.find('td:eq(8)').text();
        codigoPostal = fila.find('td:eq(9)').text();
        sexo = fila.find('td:eq(10)').text();
        curp = fila.find('td:eq(11)').text();
        fechaNacimiento = fila.find('td:eq(12)').text();
        saldo = fila.find('td:eq(13)').text();
        ocupacion = fila.find('td:eq(14)').text();
        $("#codigoCliente").val(codigoCliente);
        $("#nombre").val(nombre);
        $("#apellidoPaterno").val(apellidoPaterno);
        $("#apellidoMaterno").val(apellidoMaterno);
        $("#estado").val(estado);
        $("#municipio").val(municipio);
        $("#calle").val(calle);
        $("#colonia").val(colonia);
        $("#codigoPostal").val(codigoPostal);
        $("#sexo").val(sexo);
        $("#curp").val(curp);
        $("#fechaNacimiento").val(fechaNacimiento);
        $("#saldo").val(saldo);
        $("#ocupacion").val(ocupacion);
        $(".modal-header").css("background-color", "#2e7d32");
        $(".modal-header").css("color", "white" );
        $(".modal-title").text("Editar Usuario");		
        $('#modalCRUD').modal('show');		   
    });
    
    //Borrar
    $(document).on("click", ".btnBorrar", function(){
        fila = $(this);           
        idCliente = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;		
        opcion = 3; //eliminar        
        var respuesta = confirm("¿Está seguro de borrar el registro " + idCliente + "?");                
        if (respuesta) {            
            $.ajax({
              url: "bd/crud.php",
              type: "POST",
              datatype:"json",    
              data:  {opcion:opcion, idCliente:idCliente},    
              success: function() {
                  tablaAcademico.row(fila.parents('tr')).remove().draw();                  
               }
            });	
        }
     });
         
    });    
