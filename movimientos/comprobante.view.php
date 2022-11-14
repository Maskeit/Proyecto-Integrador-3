<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="../css/movimientos.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   


    <title>Comprobante</title>
</head>
<body>

<div class="container">
    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Well done!</h4>
    <div class="container">
                <?php 
                echo "Desde cuenta No: <p> $ctaOrigen</p>"; 
                echo "A la cuenta No: <p> $ctaDestino </p>"; 
                echo "Concepto: <p> $concepto </p>" ;
                echo "Por la cantidad de: <p> $monto </p>" ;
                ?>
            </div>
    <hr>
    <p class="mb-0">Descarga el comprobante de tu transferencia.</p>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
</body>
</html>