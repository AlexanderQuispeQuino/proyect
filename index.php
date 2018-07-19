
<?php

include_once 'config.php';


$result = false;
if (!empty($_POST)) {
    $sql    = 'INSERT INTO aliado (nombre,apellidos,password,email,celular,fec_nacimiento) VALUES(:nombre,:apellidos,:password,:email,:celular,:fec_nacimiento)';
    $query  = $pdo->prepare($sql);
    $result = $query->execute([
        'nombre'   => $_POST['nombre'],
        'apellidos' => $_POST['apellidos'],
        'password'   => $_POST['password'],
        'email' => $_POST['email'],
        'celular'   => $_POST['celular'],
        'fec_nacimiento'   => $_POST['fec_nacimiento']

    ]);

}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	

	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="text/css" href="images/ubicacion.png">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/registrar.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">

    <!-- burger -->

	<link rel="stylesheet" type="text/css" href="css/burger.css">
	

	<script async="" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<title>Proyectos</title>

</head>
<body>
	<div class="body">
		<header>
		    <div class="barra-header">
		    	<div class="burguer-button">
		    		<div id="nav-icon1" class="nav-icon1">
		    		
  						<span class="span-burguer-button"></span>
  						<span class="span-burguer-button"></span>
  						<span class="span-burguer-button"></span>
		    			
		    		</div>
				</div>
			    <div class="escribir">
			      <img src="images/ubicacionImagotipo.png" class="logo">
			      
			    </div>
			    <!-- <div class="nombrelogo">
			            <span style="color: white;">arquea</span>
			      	
			      </div> -->
			    <div class="barra-items" id="barra-items">
			    	<div class="menu-items">
			        	<ul>
			            	<li><a class="a-menu" href="index.php">Inicio</a></li>
			            	<li><a class="a-menu" href="">Ingresar</a></li>
			            	<li><a class="a-menu" id="abrir" onclick="document.getElementById('id01').style.display='block'" >Registrate</a></li>
			            	<li><a class="a-menu" href="">Contacto</a></li>
			           
			        	</ul>
			    		
			    	</div>
			    </div>

			</div>
	  </header>


	    <div class="contenedor-centro">
		    <div class="container" >
		    	<p class="p">
		    		Deja tu auto seguro como<br> si estuviera en tu casa

		    		
		    	</p>

		    	<p  class="p">
		    		Gana dinero alquilando<br> tu espacio
		    		
		    	</p>
		    </div>
		    
		    <div class="botones" style="display: flex; justify-content: space-around;">
		          <button class="button-conoce">
		             <a href="tengoparkeadero.html">
		             	Tengo parqueadero
		             </a>
		          </button>

		          <button class="button-conoce" style="background: linear-gradient(to left, #05453f, #12bfde);">
		             <a href="./parkeo.php">
		             	Quiero parquear
		             </a>
		          </button>
		    </div>
	    </div>
	</div>


	<div class="items">
		<div class=" itemscentro">
			<div class="tiempo level-1" >
				<figure class="figuraitems">
					<img class="imgitems" src="images/tiempo.jpg">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">
						No pierda mas el tiempo dando vueltas buscando donde aparcar.
						
					</p>
				</div>
				
				
			</div>
			<div class="tiempo level-2" >
				<figure class="figuraitems">
					<img class="imgitems" src="images/co2.jpg">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">
						Contribuyamos con la reducción del CO2 al encontrar estacionamiento de manera mas facil.
						
					</p>
				</div>
				
			</div>
			<div class="tiempo level-3" >
				<figure class="figuraitems">
					<img class="imgitems" src="images/seguridad.png">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">
						Encuentre el lugar perfecto para guardar su vehiculo.
						
					</p>
				</div>
			</div>
			<div class="tiempo level-4" >
				<figure class="figuraitems">
					<img class="imgitems" src="images/ingresos.jpg">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">
						Gane dinero tranquilamente haciendo buen uso de su espacio.
						
					</p>
				</div>
				
			</div>
		</div>
		
	</div>



	<footer style="background:black; color :white; display: flex; justify-content: center">
		<div class="derechos">
			Parkear © 2018
		</div>
		
	</footer>

<!-- modal registro -->



<div id="id01" class="modal">

	<div class="modalcentro"">
		
  <form class="modal-content" method="post"">
    <div class="container-registro">
    	 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Cerrar">&times;</span>
      <div class="contenedorlogo">
			      <img src="images/ubicacionImagotipoRegistrar.png" class="logoRegistro">
			    </div>
      <input type="email" placeholder="Correo Electronico" name="email" required>

       <input type="text" placeholder="Nombre(s)" name="nombre" required>

	   <input type="text" placeholder="Apellidos" name="apellidos" required>


      <input type="text" placeholder="Nro celular" name="celular" required>


      <!-- <label for="psw"><b>Password</b></label> -->
      <input type="password" placeholder="Cree una contraseña" name="password" required>

      <input type="date" placeholder="Fecha nacimiento" name="fec_nacimiento" required="">

      <!-- <label for="psw-repeat"><b>Repeat Password</b></label> -->
      <!-- <input type="password" placeholder="Repeat Password" name="psw-repeat" required> -->
      
     <!--  <label style="color: #5b5555;">
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Recuerdeme
      </label> -->

      <p style="margin: 14px 0 0; text-align: center;color: #5b5555; font-size: 15px;">Al crear una cuenta, usted acepta nuestros <a href="#" style="color:#12bfde">Terminos y privacidad</a>.</p>

      <div class="clearfix">
        <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
        <button type="submit" class="button-registrar"  value="save">Registrarse</button>
         <p style="margin: 14px 0 0; text-align: center;color: #5b5555;font-size: 15px;">¿Ya tienes una cuenta? &nbsp <a href="#" style="color:#12bfde"> Ingresa</a>.</p>
      </div>
    </div>
  </form>
	</div>
 
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>


<script>

	$(document).ready(
		function(){
			$('nav-icon1').click(function(){
		$(this).toggleClass('active');
	});
});
</script>

 <script>
      var $burguerButton = document.getElementById('nav-icon1');
      var $menu = document.getElementById('barra-items');

      $burguerButton.addEventListener('touchstart', toggleMenu);

      function toggleMenu(){
        $menu.classList.toggle('active')
      };
    </script>






    <!-- <link href="https://fonts.googleapis.com/css?family=Lato|Rajdhani:300,400,500,600,700" rel="stylesheet"> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"></script>
<script>
  WebFont.load({
    google: {
      families: [ 'Rajdhani:300,400,500,600,700', 'Droid Sans']
    }
  });
</script>

</body>
</html>

