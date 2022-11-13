<?php
require 'headerEspecifico.php';
?>

<div class="containter">
    <div class="row">
        <div class="col">
            <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                MOVIMIENTOS RECIENTES DE LA CUENTA <!--Cuenta con ?php ?--> 
                </button>
            </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <h5 class="container">Saldo actual: <span id="saldo"><?php echo '$' . $debito  ?></span></h5> <!--Aqui va codigo php para traer el saldo dependiendo el cliente-->
                </div>
            </div>
        </div>
    </div>
</div>
