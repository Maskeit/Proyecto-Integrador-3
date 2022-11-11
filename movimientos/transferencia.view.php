<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/movimientos.css">
    <title>Movimientos</title>
</head>
<body>
<form action="comprobante.php" method="post">
      <h1>Realizar un Movimiento</h1>
      <label for="">CUENTA ORIGEN (mis cuentas): </label>
      <select name="ctaOrigen" id="">
        <option value="debito">cuenta debito</option>
        <option value="ahorros">cuenta ahorros</option>
      </select>
      <!--destino--> 
      <label for="">CUENTAS DESTINO: </label>
      <select name="ctaDestino" id="">
        <option value="adolfo">cuenta Adolfo</option>
        <option value="daniel">cuenta Daniel</option>
        <option value="miguel">cuenta Miguel</option>
        <option value="yolanda">cuenta Yolanda</option>
      </select>
      <label for="">Concepto </label>
      <input type="text" name="concepto">
      <label for="">Monto: </label>
      <input type="text" name="monto">
      <label for="">Seleccione banco: </label>
      <select name="banco" id="">
        <option value="unibank">UNIBANK</option>
        <option value="bbva">BBVA</option>
        <option value="santander">SANTANDER</option>
      </select>
      <input type="submit" value="Depositar">
</form>
</body>
</html>