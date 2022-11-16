<?php session_start();

include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$codigoCliente = $_SESSION['codigoCliente'];
$nombre = $_SESSION['nombre'];
$saldo =  $_SESSION['saldo'];

//consulta chingona
$consulta = "SELECT * FROM cliente";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$usuarios=$resultado->fetchAll(PDO::FETCH_ASSOC);


//consutla para las tarjetas de debito
$consulta = "SELECT * FROM debito";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datos as $dato){
    $dato['saldoDeb'];
}
//comprobamos que los datos esten correctos


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $concepto = filter_var($_POST['concepto'], FILTER_SANITIZE_STRING);
    $monto = filter_var($_POST['monto'], FILTER_SANITIZE_NUMBER_FLOAT,);
    $ctaOrigen = $_POST['ctaOrigen'];
    $ctaDestino = $_POST['ctaDestino'];
    $banco = $_POST['banco'];
    
    $errores = '';
    if (empty($concepto) or empty($monto)) {

        echo 'Por favor llene todos los campos correctamente';

		//$errores .= '<li>Por favor rellena todos los datos correctamente</li>'; //el punto agregado al =
        //$concepto .= 'No se ha escrito ningun concepto';
	}elseif($monto > $dato['saldoDeb']){
        $errores.= '<li>El monto supera el limite disponible</li>';
        
        
        //aqui comence a hacer el proceso de la transaccion bancaria pero no me salio xd, ignorenlo
    } else {
        $statement = $conexion->prepare('SELECT saldoDeb FROM debito'); //preparamos la consulta
        $statement->execute(array('monto' => $monto));//asignamos a la variable $monto el monto

    //equivale a resultado
        $deposito = $statement->fetch();

        if($deposito != true){
            $errores.= '<li>No se pueden ahcer transferencias en este momento</li>';
        }

        if($errores == ''){
            $statement = $conexion->prepare('INSERT INTO debito (saldoDeb) VALUES (:saldoDeb)');
            $statement->execute(array(
                ':monto' => $monto
            ));

            header('Location: comprobante.php');

        }

    }
    
} 

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
		
        var saldo = <?php echo $_SESSION['saldoDeb']; ?>;
        console.log(saldo);
     
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