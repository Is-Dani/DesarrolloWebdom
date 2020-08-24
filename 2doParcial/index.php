<!DOCTYPE html>
<html>
<head>
	<title>Segundo Parcial Sistemas, Ciencias de la computación  </title>
	<link rel="stylesheet" href="estilos.css">
	<link rel="stylesheet" href="style.css">
</head>
<?php
	session_start();
?>
<body>
	<div id="contenedor">
		<div id="cabeza"> 
			<div id="cabeza-izq"><img src="images/usfx.png" alt=""></div>
			<div id="cabeza-cnt">
				<span class="rojo">UNIVERSIDAD DE SAN FRANCISCO XAVIER	</span><br>
				<span class ="celeste">Facultad de Tecnología</span>
				<span class ="rojo">Sucre</span> 
				<span class ="amarillo">e-Bol</span>
				<span class ="verde">ivia</span>	
				<br> Carreras: Ing de Sistemas,Ing en Ciencias de la Computación <br>
				Semestre 1-2020 <br>	
				Alumno: <span class="celeste-bg">Ortiz Morales Danitza</span> CU:  <span class="celeste-bg">111-92</span>Numero Lista:<span class="celeste-bg">22</span><br>
				Usuario:<span class="celeste-bg"> <?php echo isset($_SESSION['usuario'])?$_SESSION['usuario']:'';?> </span> Nivel: <span class="celeste-bg"> <?php echo isset($_SESSION['nivel'])?$_SESSION['nivel']:''; ?> </span>
			</div>
			<div id="cabeza-der">
				<img src="images/tecnologia.png" alt="">
			</div>

		</div>
		<div id="contenido">
		<br><br><br><br><br>
			
		</div>	
		<div id="derecha">
		<ul class="menu">
			<li><a href ="#"onclick="cargar('tresenraya.html')" >Pregunta 1</a></li>
			<li><a href ="#"onclick="cargar('tabla.html')" >Pregunta 2</a></li>
			<li><a href ="#" onclick="cargar('login.html')" >Pregunta 3</a></li>
			<li><a href ="#" >Pregunta 4</a></li>
			<li><a href ="#" <?php   
			if(isset($_SESSION['usuario'])){
        		if($_SESSION['nivel'] == 1){
					?> onclick="cargar('registrar.php')" <?php
				}else{
					?> onclick="cargar('listarnoticias.php')" <?php
				}
			}else{
				?> onclick="cargar('login.html')" <?php
			}
            ?> >Pregunta 5</a></li>
		</ul>
		</div>
		<div id="resultado"> resultado </div>

		<div id="pie"> Todos los Derechos Reservados </div>
		
	</div>
</body>
</html>
<script src="script.js"></script>
