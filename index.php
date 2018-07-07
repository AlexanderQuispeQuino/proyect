
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
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">

	<link rel="icon" type="text/css" href="images/ubicacion.png">
	<link rel="stylesheet" type="text/css" href="css/fontello.css">
	
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" type="text/css" href="css/registrar.css">

    <!-- burger -->

	<link rel="stylesheet" type="text/css" href="css/burger.css">
	<script src="http://code.jquery.com/jquery-3.3.1.js"></script>
	<title>Proyectos</title>

</head>
<body>
	<div class="body">
		<header>
		    <div class="barra-header">
		    	<div class="burger">
		    		<div id="nav-icon1" class="nav-icon1">
		    		
  						<span class="span-burger"></span>
  						<span class="span-burger"></span>
  						<span class="span-burger"></span>
		    			
		    		</div>
				</div>
			    <div class="escribir">
			      <!-- <p><span class="nombre">Alexander Quispe Quino</span><span class="span">&#160;</span> <span class="desarrollador"> Desarrollador FrontEnd</span> </p>-->
			      <img src="images/ubicacion.png" class="logo">
			    </div>
			    <div class="barra-items" id="barra-items">
			        <ul>
			            <li><a class="a-menu" href="google.com">Inicio</a></li>
			            <li><a class="a-menu" href="">Ingresar</a></li>
			            <li><a class="a-menu"  onclick="document.getElementById('id01').style.display='block'" >Registrate</a></li>
			            <li><a class="a-menu" href="">Contacto</a></li>
			           
			        </ul>
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

		          <button class="button-conoce">
		             <a href="quieroParkear.html">
		             	Quiero parquear
		             </a>
		          </button>
		    </div>
	    </div>
	</div>


	<div class="items" style="background:green; height: 50vh">
		<div class=" itemscentro">
			<div class="tiempo">
				<figure class="figuraitems">
					<img class="imgitems" src="images/tiempo.jpg">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">
						
						
					</p>
				</div>
				
			</div>
			<div class="tiempo">
				<figure class="figuraitems">
					<img class="imgitems" src="images/co2.jpg">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">

						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						
					</p>
				</div>
				
			</div>
			<div class="tiempo">
				<figure class="figuraitems">
					<img class="imgitems" src="images/seguridad.png">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">

						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						
					</p>
				</div>
			</div>
			<div class="tiempo">
				<figure class="figuraitems">
					<img class="imgitems" src="images/ingresos.jpg">
				</figure>
				<div class="descripcion">
					<p class="descripcionparrafo">

						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						
					</p>
				</div>
				
			</div>
		</div>
		
	</div>



	<footer style="background:black; color :white; display: flex; justify-content: center">
		<div class="derechos">
			Derecho Reservados
		</div>
		
	</footer>

<!-- modal registro -->



<div id="id01" class="modal">

	<div class="modalcentro" style="display: flex; justify-content:center;padding-top: 70px;">
		
  <form class="modal-content" method="post"">
    <div class="container-registro">
    	 <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <p style="justify-content: center;display: flex;margin: 5px;color: #5b5555;font-size: large;">Regístrate</p>
     <!--  <p >Por favor rellene este formulario para crear una cuenta.</p> -->
      <!-- <hr> -->
      <!-- <label for="email"><b>Email</b></label> -->
      <input type="email" placeholder="Correo Electronico" name="email" required>

       <input type="text" placeholder="Nombre(s)" name="nombre" required>

	   <input type="text" placeholder="Apellidos" name="apellidos" required>


      <input type="text" placeholder="Nro celular" name="celular" required>


      <!-- <label for="psw"><b>Password</b></label> -->
      <input type="password" placeholder="Cree una contraseña" name="password" required>

      <input type="date" placeholder="Fecha nacimiento" name="fec_nacimiento" required="">

      <!-- <label for="psw-repeat"><b>Repeat Password</b></label> -->
      <!-- <input type="password" placeholder="Repeat Password" name="psw-repeat" required> -->
      
      <label style="color: #5b5555;">
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Recuerdeme
      </label>

      <p style="margin: 1px;color: #5b5555; font-size: 15px;">Al crear una cuenta, usted acepta nuestros <a href="#" style="color:dodgerblue">Terminos y privacidad</a>.</p>

      <div class="clearfix">
        <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
        <button type="submit" class="button-registrar"  value="save">Registrarse</button>
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
			$('#nav-icon1').click(function(){
		$(this).toggleClass('open');
	});
});
</script>

<script>
      var $burguerButton = document.getElementById('nav-icon1');
      var $menu = document.getElementById('barra-items');

      $burguerButton.addEventListener('touchstart', toggleMenu);

      function toggleMenu(){
        $menu.classList.toggle('open')
      };
    </script>
    

</body>
</html>

