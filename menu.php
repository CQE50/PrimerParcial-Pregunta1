<div id="anuncioscuadro">
	<div id="titulo">
		Menu principal
	</div>
    <div id="anuncios_contenido1">
		<?php
		    //session_start();
			$rol=0;			
			switch($_SESSION['idrol'])
			{
				case 0:{}break;
				case 1:{
		?>
						<ul class="estilomenu">
							
							<li><a href="estudiante_listado_vista.php" title="Enlace a la pagina principal"  onmouseout="fuera(this);" onmouseover="encima(this);">Gestion Estudiante</a></li>
							<li><a href="materia_listado_vista.php" title="Enlace a la listado de materia"   onmouseout="fuera(this);" onmouseover="encima(this);">Gestion Docente</a></li>    
							<li><a href="materiaestudiante_listado_vista.php" title="Vea los principios que seguimos"   onmouseout="fuera(this);" onmouseover="encima(this);">Gestion Materia</a></li>		  	      		  	                   
							<li><a href="materiaestudiante_listado_vista.php" title="Vea los principios que seguimos"   onmouseout="fuera(this);" onmouseover="encima(this);">Asignacion Docente</a></li>		  	      		  	                   
							<li><a href="materiaestudiante_listado_vista.php" title="Vea los principios que seguimos"   onmouseout="fuera(this);" onmouseover="encima(this);">Inscripcion Materia</a></li>		  	      		                     							
							<li><a href="index.php" title="Salir de aplicacion"   onmouseout="fuera(this);" onmouseover="encima(this);">Salir</a></li>		  	      		  	    
						</ul>
		<?php
				}break;
				case 2:{
		?>
						<ul class="estilomenu">
							
							<li><a href="index.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Editar Datos</a></li>  	
							<li><a href="index.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Editar Notas</a></li>  	
							<li><a href="index.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Ver Notas</a></li> 
							<li><a href="index.php" title="Salir de aplicacion"   onmouseout="fuera(this);" onmouseover="encima(this);">Salir</a></li>		  	      		  	     							
						</ul>		
		<?php	
				}break;
				case 3:{
		?>
						<ul class="estilomenu">
							
							<li><a href="index.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Editar Datos</a></li>  								
							<li><a href="index.php" title="Visualice las investigaciones"   onmouseout="fuera(this);" onmouseover="encima(this);">Ver Notas</a></li> 
							<li><a href="index.php" title="Salir de aplicacion"   onmouseout="fuera(this);" onmouseover="encima(this);">Salir</a></li>		  	      		  	     							
						</ul>	
		<?php	
				}break;
			}
		?>

	</div>      
</div>

<div id="anuncioscuadro">
	<div id="titulo">
		Visitenos:
	</div>
	<div id="anuncios_contenido">
		<ul class="estilomenu">
			<li><a href="http://www.fcpn.edu.bo" title="Facultad de ciencias puras y naturales"   onmouseout="fuera(this);" onmouseover="encima(this);">Nuestra Facultad</a></li>  
			<li><a href="http://cmat.umsa.bo" title="Carrera de matematica"   onmouseout="fuera(this);" onmouseover="encima(this);">Carrera de Matematica</a></li>    
			<li><a href="http://www.fiumsa.edu.bo" title="Carrra de fisica"  onmouseout="fuera(this);" onmouseover="encima(this);">Carrera de Fisica</a></li>				  	
		  	<li><a href="http://www.informatica.edu.bo" title="Carrera de Informatica"   onmouseout="fuera(this);" onmouseover="encima(this);">Carrera de Informatica</a></li>		  	      		  	                   
		</ul>
	</div>
</div>


