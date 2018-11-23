<?php
// Silence is golden.

?><!DOCTYPE html>
<html>
<head>

<title> HappyClient </title>


<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script-->

<!--https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js-->

<link rel="stylesheet" type="text/css" href="wp-content\themes\plugwelcometheme/style.css"/>
<script src="wp-content\themes\plugwelcometheme/script.js"></script>
<div class="name">HappyClient</div>
</head>

<body>

<div class="layout">
		
	<div class="item" id="idVotoAmei" onclick="votoAmei()"><img src="		http://localhost/HAPPYCLIENT/wp-content/uploads/2018/11/amei.svg"/>
		<br><br><br><br>
			<tr><u>AMEI</u></tr>
	</div>
				
	<div class="item" id="idVotoBom" onclick="votoBom()" ><img src="http://localhost/HAPPYCLIENT/wp-content/uploads/2018/11/bom.svg"/>
		<br><br><br><br>
			<tr><u>BOM</u></tr>
	</div>
		
	<div class="item" id="idVotoRegular" onclick="votoRegular()"><img src="http://localhost/HAPPYCLIENT/wp-content/uploads/2018/11/regular.svg"/>
		<br><br><br><br>
			<tr><u>REGULAR</u></tr>
	</div>

	<div class="item" id="idVotoRuim" onclick="votoRuim()"><img src="http://localhost/HAPPYCLIENT/wp-content/uploads/2018/11/ruim.svg"/>
		<br><br><br><br>
			<tr><u>RUIM</u></tr>
	</div>
		
	<div class="item" id="idVotoPessimo" onclick="votoPessimo()"><img src="http://localhost/HAPPYCLIENT/wp-content/uploads/2018/11/pessimo.svg"/> 
		<br><br><br><br>
			<tr><u>PESSIMO</u></tr>
	</div>
				
</div>


	<div class="botao"><center>
		<div id="contador1">0</div><br>  
		<input type="button" id="nuevo1"  value="Limpar" onClick="nuevo1();"/>
	</div>
		
	<div class="botao"><center>
		<div id="contador2">0</div><br>  
		<input type="button" id="nuevo2"  value="Limpar" onClick="nuevo2();"/>
	</div>
		
	<div class="botao"><center>
		<div id="contador3">0</div><br>  
		<input type="button" id="nuevo3"  value="Limpar" onClick="nuevo3();"/>	
	</div>
					
	<div class="botao"><center>
		<div id="contador4">0</div><br>  
		<input type="button" id="nuevo4"  value="Limpar" onClick="nuevo4();"/>
	</div>

	<div class="botao"><center>
		<div id="contador5">0</div><br>  
		<input type="button" id="nuevo5"  value="Limpar" onClick="nuevo5();"/>
	</div>
	
</body>
	
	
	<footer>
	
	
	</footer>
	
	
</html>
