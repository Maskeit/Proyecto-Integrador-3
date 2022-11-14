<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />  
    <title>Tabla de Clientes</title>
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="css/mainCrud.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">    
    
    <!--css de la tabla-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./Style.css" />
    <link rel="stylesheet" href="./mobile-style.css">
  
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  


    
</head>
<body> 
    <header>
     
    <!--comienza header-->
    <header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="index.php">
          <i class="bi bi-cash-coin fa-2x mx-3"></i>Unibank
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="./index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item" >
             <a class="nav-link" href="./funciones/cerrarSesion.php">
                <?php if(isset($_SESSION['adminUser'])){
                    echo "CERRAR SESION"; //se va mostrar cerrar sesion si es que el ejecutivo tiene una sesion iniciada
                    } elseif (isset($_SESSION['usuarioEjecutivo'])) {
                    echo "CERRAR SESION";
                    } elseif (isset($_SESSION['codigoCliente'])) {
                    echo "CERRAR SESION";
                    }
                    else {
                         echo ""; //sino no muestra nada  
                    }
                  ?>
              </a>
              </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
    </header>    
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">            
            <button id="btnNuevo" type="button" class="btn btn-success" data-toggle="modal"><i class="material-icons">library_add</i></button>    
            </div>    
        </div>    
    </div>    
    <br>  

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">        
                    <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                        <thead class="text-center">
                            <tr>
                                <th>ID</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>                                
                                <th>Estado</th>  
                                <th>Municipio</th>
                                <th>Calle</th>
                                <th>Colonia</th>
                                <th>Codigo Postal</th>
                                <th>Sexo</th>
                                <th>Curp</th>
                                <th>Fecha de Nacimiento</th>
                                <th>Saldo</th>
                                <th>Ocupacion</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>                           
                        </tbody>        
                    </table>               
                </div>
            </div>
        </div>  
    </div>   

    <!--Modal para CRUD-->
    <div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <form id="formUsuarios">    
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="" class="col-form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre">
                            </div>
                        </div> 
                    </div>
                    <div class="row"> 
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apellidoPaterno">
                            </div>               
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Apellido Materno</label>
                                <input type="text" class="form-control" id="apellidoMaterno">
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-form-label">Estado</label>
                                <select class="form-control" id="estado">
                                    <option></option>
                                    <option>AGUASCALIENTES</option>
                                    <option>BAJA CALIFORNIA</option>
                                    <option>BAJA CALIFORNIA SUR</option>
                                    <option>CAMPECHE</option>
                                    <option>COAHUILA</option>
                                    <option>COLIMA</option>
                                    <option>CHIAPAS</option>
                                    <option>CHIHUAHUA</option>
                                    <option>DURANGO</option>
                                    <option>ESTADO DE MÉXICO</option>
                                    <option>GUANAJUATO</option>
                                    <option>GUERRERO</option>
                                    <option>HIDALGO</option>
                                    <option>JALISCO</option>
                                    <option>CIUDAD DE MÉXICO</option>
                                    <option>MICHOACÁN</option>
                                    <option>MORELOS</option>
                                    <option>NAYARIT</option>
                                    <option>NUEVO LEÓN</option>
                                    <option>OAXACA</option>
                                    <option>PUEBLA</option>
                                    <option>QUERÉTARO</option>
                                    <option>QUINTANA ROO</option>
                                    <option>SAN LUIS POTOSÍ</option>
                                    <option>SINALOA</option>
                                    <option>SONORA</option>
                                    <option>TABASCO</option>
                                    <option>TAMAULIPAS</option>
                                    <option>TLAXCALA</option>
                                    <option>VERACRUZ</option>
                                    <option>YUCATÁN</option>
                                    <option>ZACATECAS</option>
                                </select>
                            </div>
                        </div>    
                        <div class="col-lg-6">    
                            <div class="form-group">
                                <label for="" class="col-form-label">Municipio</label>
                                <input type="text" class="form-control" id="municipio">
                            </div>            
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Calle</label>
                                <input type="text" class="form-control" id="calle">
                            </div>
                        </div>    
                        <div class="col-lg-6">    
                            <div class="form-group">
                                <label for="" class="col-form-label">Colonia</label>
                                <input type="text" class="form-control" id="colonia">
                            </div>            
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Codigo Postal</label>
                                <input type="text" class="form-control" id="codigoPostal" minlength="5" maxlength = "5">
                            </div>
                        </div>    
                        <div class="col-lg-6">    
                            <div class="form-group">
                                <label for="exampleFormControlSelect1" class="col-form-label">Sexo</label>
                                <select class="form-control" id="sexo">
                                    <option></option>
                                    <option>MASCULINO</option>
                                    <option>FEMENINO</option>
                                </select>
                            </div>            
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="" class="col-form-label">Curp</label>
                                <input type="text" class="form-control" id="curp" minlength="18" maxlength = "18">
                            </div>
                        </div>    
                        <div class="col-lg-6">    
                            <div class="form-group">
                                <label for="" class="col-form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="fechaNacimiento">
                            </div>            
                        </div>    
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="" class="col-form-label">Ocupacion</label>
                                <input type="text" class="form-control" id="ocupacion">
                            </div>
                        </div>       
                    </div>                
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                    <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
                </div>
            </form>    
            </div>
        </div>
    </div>  
      
    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>  
    
    
</body>
</html>
</html>
