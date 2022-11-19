<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>
    <link rel="stylesheet" href=".../assets/bootstrap/Btrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css" />
    <link rel="stylesheet" href="../mobile-style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    

    <style>
      .row > div{
        background:#f2f2f2;
        margin: 10px 0;
        padding:40px;
      }
    </style>
</head>
<body>
<!--INICIO HEADER -->
<header>
    <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="../index.php">
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
              <a class="nav-link" href="../index.php">HOME
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
<!-- FIN HEADER -->


<br><br>
<!--carousel-->
<div class="formMovimiento">
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
        <h5>Saldo actual: </h5>
        <h5 id="saldo" class="container"><span id="saldo">0</span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
        </div>
</div>
<!-- Seccion Deposito -->

<div class="container">
=======
<body>
<!--label--> 
<!--carousel-->
<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body">
          <h1 class="container">Saldo actual: <span id="saldo">0</span></h1> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
          </div>
        </div>

>>>>>>> miguel
   <b>Deposito</b>
   <input type="checkbox" value="1" onchange="javascript:showContent('deposito',this)" />
   <div id="deposito" class="hide">
<<<<<<< HEAD
     Ingresa el Deposito a Realizar <input type="text" id="inputSaldo" name="valor1"><br>
     <input id="botonSaldo" type="button" value="Enviar" onclick="deposito()">
=======
     <label for="">Ingrese la cuenta a la que quiere depositar</label>
     <select name="" id="">
      <option value="">cuenta propia</option>
      <input type="text" name ="noCta" placeholder="noCta">
     </select>
     <label for="">Ingrese la cantidad a depositar</label>
     <input type="text" name="valor1" placeholder="cantidad" required>

     <input type="button" value="Enviar" onclick="deposito()">
>>>>>>> miguel
   </div>
   </form>
   

<<<<<<< HEAD
<!-- Seccion Retiro -->
 <div class="container">
=======
>>>>>>> miguel
   <b>Retiro</b>
   <input type="checkbox" id="checkboxSaldo" value="1" onchange="javascript:showContent('retiro',this)" />
   <div id="error"></div>
   <div id="retiro" class="hide">
     Ingresa el retiro a Realizar <input type="text" id="inputSaldo" name="valor2"><br>
     <input id="botonSaldo" type="button" value="Enviar" onclick="retiro()">
   </div>
<<<<<<< HEAD
 </div>
</div>
<br><br><br><br>

=======
>>>>>>> miguel

<!--Comportamiento de JavaScript-->


<script src="../assets/bootstrap/Btrap5/jss/bootstrap.bundle.min.js"></script>
<?php
require '../vistas/footer.php';
?>
</body>

</html>