<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movimientos</title>
</head>
<body>
<form action="save2.php" METHOD="POST">
 
    <script type="text/javascript">
        function showContent() {
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
        element.style.display='block';
        }
        else {
        element.style.display='none';
        }   
    } 
    </script>

<b>Depósito</b> <input type="checkbox" name="check" id="check" value="1" onchange="javascript:showContent()" />
    
    <div id="content" style="display: none;">
        Ingresa el Depósito a Realizar<input type="text" name="valor1">
    <br>
    <input type="submit"  name="cmdgrabar"  src="save2.php" value=  "Enviar">
    <br>
    </div>
    <br>
    <br>

    <script type="text/javascript">
        function showConten() {
        element = document.getElementById("conten");
        check2 = document.getElementById("check2");
        if (check2.checked) {
        element.style.display='block';
        }
        else {
        element.style.display='none';
        }
    } 
    </script>  


    <b>Retiro</b>
    <input type="checkbox" name="check2" id="check2" value="1" onchange="javascript:showConten()" />
    
    <div id="conten" style="display: none;">
        Ingresa el retiro a Realizar<input type="text" name="valor2"><!--valor1 a modificar--> 
    <br>
    <input type="submit"  name="cmdgabar2"  src="save2.php" value=  "Enviar2">
    <br>
    </div>
</form>

</body>
//
<?php
$saldo = 0;
$tt = 9;
$valor = 0;
 
 
$num1 = $_POST['valor1'];
$num2 = $_POST['valor2'];
 
 
if(isset($_POST['check2'])){
if($num2 > $saldo){
 
    echo"Transacción inválida. Fondos insuficientes $saldo";
 
}
else
     $saldo++;
$saldo=$saldo-$num2;
echo"$saldo";
 
}
else
 
 
    if(isset($_POST['check'])) {
    if ($num1<>$saldo){
 
  $saldo=$saldo+$num1;
echo"la suma agregada es= $saldo";
 $saldo++;
}
   }
 
?>
</html>
