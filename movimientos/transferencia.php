<?php session_start();

include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];
$saldo =  $_SESSION['saldo'];

//comprobamos que los datos esten correctos



if($_SERVER['REQUEST_METHOD']== 'POST'){
    $concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
    $monto = filter_var($_POST['monto'], FILTER_SANITIZE_NUMBER_FLOAT,);
    $ctaOrigen = $_POST['ctaOrigen'];
    $ctaDestino = $_POST['ctaDestino'];
    $banco = $_POST['banco'];
    
    $errores = '';
    if (empty($concepto) or empty($monto)) {
		$errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
        $concepto .= 'No se ha escrito ningun concepto';
	} else {
        '<script> alert("Datos enviado"); </script>';
    }

    if($monto > $saldo){
        $errores.= '<li>El monto supera el limite disponible</li>';
    }

}

$lista = $conexion->prepare("SELECT * FROM cliente");
$lista->setFetchMode(PDO::FETCH_ASSOC);
$lista->execute();

//

require 'transferencia.view.php';
?>

<!--comienza logica de js para el  movimiento-->
<style>
	.hide {display: none;}
	form>div {margin-top:20px;}
	input[type=text] {text-align:right;}
	#error {display: none;color:Red;}
</style>

<script>
		
        var saldo = <?php echo $_SESSION['saldo']; ?>;
     
        function showContent(id,e) {
            document.getElementById("error").style.display='none';
     
            if (e.checked) {
                document.getElementById(id).style.display='block';
            }else{
                document.getElementById(id).style.display='none';
            }
        }
    //funcion para hacer la transferencia
        function transferencia() {
            document.getElementById("error").style.display='none';
     
            var valor=parseInt(document.getElementsByName("monto")[0].value);
            if(!isNaN(valor))
            {
                saldo=saldo+valor;
                document.getElementById("saldo").innerHTML=saldo;
            }
        }
     
        </script>