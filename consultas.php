<?php session_start();

require 'bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();
$saldo = 0;
?> 
<head>
	<style>
	.hide {display: none;}
	form>div {margin-top:20px;}
	input[type=text] {text-align:right;}
	#error {display: none;color:Red;}
	</style>
 
	<script>
		
	var saldo = <?php echo $saldo?>;
 
	function showContent(id,e) {
		document.getElementById("error").style.display='none';
 
		if (e.checked) {
			document.getElementById(id).style.display='block';
		}else{
			document.getElementById(id).style.display='none';
		}
	}
//funcion para hacer el deposito
	function deposito() {
		document.getElementById("error").style.display='none';
 
		var valor=parseInt(document.getElementsByName("valor1")[0].value);
		if(!isNaN(valor))
		{
			saldo=saldo+valor;
			document.getElementById("saldo").innerHTML=saldo;
		}
	}
//funcion para hacer el retiro
	function retiro() {
		document.getElementById("error").style.display='none';
 
		var valor=parseInt(document.getElementsByName("valor2")[0].value);
		if(!isNaN(valor))
		{
			if(valor<=saldo)
			{
				saldo=saldo-valor;
				document.getElementById("saldo").innerHTML=saldo;
			}else{
				document.getElementById("error").innerHTML="La cantidad no puede superar el saldo";
				document.getElementById("error").style.display='block';
			}
		}
	}
 
	</script>
 
<?php
require 'vistas/consultas.view.php';
?>