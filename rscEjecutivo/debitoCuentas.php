<?php session_start();
require '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

require '../vistas/headerEspecifico.php';
//ESTA ES LA VISTA DE LA PESTAÑA DE ESTATUS DE PEDIDOS DE PRESTAMOS, AQUI SE PIENSA MOSTRAR SI UN PRESTAMO HA SIDO APROVADO O RECHAZADO
$consulta = "SELECT * FROM debito";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos=$resultado->fetchAll(PDO::FETCH_ASSOC);

foreach($datos as $dato){
    $dato['idTarjeta'];
    $dato['codigoCliente'];
    $dato['BIN'];
    $dato['saldoDeb'];
}
?>


<div class="container">
<td>IdTarjeta--</td>
            <td>Codigo Cliente---------</td>
            <td>BIN-----------------------</td>
            <td> Saldo</td>
    <table class="default">
        <tr>
            <?php foreach ($datos as $dato):?>
            <ul class="list-group">
                    <li class="list-group-item"><?php echo $dato['idTarjeta'] .'-------------'. $dato['codigoCliente'] .'------'. $dato['BIN'] .'---------'. $dato['saldoDeb'];?></li>
            </ul>
            <?php endforeach ?> 
        </tr>
    </table>

</div>

