<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Unibank</title>
    <!--Agregue prueba cards
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    fin-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
      <div class="icon__menu">
        <i class="fas fa-bars" id="btn_open"></i>
      </div>
      <!--<div class="welcome">
        <h1>¡Bienvenido <?php echo strtoupper("$_SESSION[nombre]") ?> !</h1>
      </div>-->
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fas fa-university"></i>
            <h4>Unibank</h4>
        </div>

        <div class="options__menu">	

            <a href="./cliente.php">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Inicio</h4>
                </div>
            </a>
            <a href="./movimientos/transferencia.php">
                <div class="option">
                    <i class="fas fa-exchange"></i>
                    <h4>Transferencias rapidas</h4>
                </div>
            </a>
            
            <a href="./consultas.php" class="selected">
                <div class="option">
                    <i class="fas fa-piggy-bank"></i>
                    <h4>Consulta</h4>
                </div>
            </a>

            <a href="./funciones/cerrarSesion.php">
                <div class="option">
                    <i class="fas fa-sign-out"></i>
                    <h4>Cerrar sesion</h4>
                </div>
            </a>
        </div>
    </div>

    <main>
    <h2 class="saldo">Cuenta en pesos:  <?php echo '$' . number_format($saldoSuma, 2 , '.' , ',' ); ?> MXN  <i class="bi bi-cash-stack"></i></h2>
    <div class="wrapper">
    <!-- Acordeon Uno -->
    <div class="parent-tab">
      <input type="radio" name="tab" id="tab-1" checked>
      <label for="tab-1">
        <span>CUENTAS UNIVERSITARIAS DE DÉBITO.</span>
        <div class="icon"><i class="fas fa-plus"></i></div>
      </label>
      <div class="content">
      <div class="card-body" name="debito">
          <p><h5 class="display-7">Saldos actuales:  <i class="bi bi-wallet"></i> <?php echo '<br>'; ?>  <span id="saldo">
            <?php if(empty($debito)){
              echo 'No se ha solicitado una tarjeta de debito';
            }else{
            foreach($datosDeb as $debito):  
            echo '$' . number_format($debito['saldoDeb'], 2 , '.' , ',' ) .' <--------------------------------------> **** ' . substr($debito['BIN'], 12) . '</br>';
            endforeach;
            }
            ?>
            <div class="col"><a href="debito.php"><?php if(empty($debito)){}else{echo 'Ver movimientos';}?></a></div></span></h5></div></p>
      </div>
    </div>
    <!-- Acordeon Dos -->
    <div class="parent-tab">
      <input type="radio" name="tab" id="tab-2">
      <label for="tab-2">
        <span>CUENTA UNIVERSITARIA DE CRÉDITO.</span>
        <div class="icon"><i class="fas fa-plus"></i></div>
      </label>
      <div class="content">
        <div class="card-body">
          <p><h5 class="container">Saldo actual: <i class="bi bi-credit-card"></i> <?php echo '<br>'; ?><span id="saldo">
          <?php if(empty($credito)){
              echo 'No se ha solicitado una tarjeta de debito';
            }else{
            foreach($datosCred as $credito):  
            echo '$' . number_format($credito['saldoCred'], 2 , '.' , ',' ) .' <--------------------------------------> **** ' . substr($credito['BIN'], 12) . '</br>';
            endforeach;
            }
            ?>
        <div class="col"><a href="debito.php"><?php if(empty($credito)){}else{echo 'Ver movimientos';}?></a></div></span></h5></div></p>
      </div>
    </div>
    </div>
    <div class="article-contener">
        <ul class="groups">
            <li>
                <div class="card">
                    <div class="image-session">
                        <span class="image" style="background-image: url('assets/img/car2.jpg');"></span>
                    </div>
                    <div class="meta-sission">
                        <div class="head">
                        </div>
                        <div class="body">
                            <h2 class="title">Solicita tu Crédito Unibank</h2>
                            <p class="desc">Que esperas para solicitar tu credito Unibank, una oportunidad que no puedes dejar escapar.</p>
                        </div>
                        <div class="footer">
                            <div class="views">
                                <span></span>
                            </div>
                            <a href="#" class="button">Conocer más</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!--div class="container_img">
        <div class="card mb-3">
          <img src="assets/img/car2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Pide tu credito unibank</h5>
            <p class="card-text">Que esperas para solicitar tu credito Unibank..</p>
            <p class="card-text">Last updated 3 mins ago</p>
          </div>
        </div>
    </div-->
    <!--div class="d-grid gap-2">
      <button type="button" class="btn btn-warning">Hacer un momiento</button>
      
      <button type="button" class="btn btn-light"><a href="cliente.php">volver</a></button>
    </div-->
    <div class="container-btn">
        <button type="button" class="btn btn-success">Realizar un movimiento</button>
        <button type="button" class="btn btn-link">Volver</button>
    </div>
    </main>
    
    <footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="assets/unibank.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Somos un equipo de desarrolladores de la carreara de ingenieria de software de la Facultad de ingenieria electromecanica de la UdeC</p>
                <p>Equipo 2 Ing de software 3-D</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2022 <b>Ing de Software</b> - Todos los Derechos Reservados.</small>
        </div>
    </footer>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
    <script src="script.js"></script>
</body>
</html>