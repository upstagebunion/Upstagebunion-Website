<nav class="menu-lateral">
			<?php if(isset($_GET["cont"])): ?>
				<?php if($_GET["cont"] == "presentacion" || $_GET["cont"] == "ilustracion" || $_GET["cont"] == "videos" || $_GET["cont"] == "fotos" || $_GET["cont"] == "web" || $_GET["cont"] == "contacto" || $_GET["cont"] == "costos"): ?>
					<a href="index.php?cont=presentacion" <?php $controlador = new UBcontroller(); $controlador -> verifActive("presentacion"); ?>><i class="far fa-hand-pointer"></i>Inicio</a>
					<a href="index.php?cont=ilustracion" <?php $controlador = new UBcontroller(); $controlador -> verifActive("ilustracion"); ?>><i class="far fa-hand-pointer"></i>Illustraci&oacuten</a>
					<a href="#" <?php $controlador = new UBcontroller(); $controlador -> verifActive("videos"); ?>><i class="far fa-hand-pointer"></i>Videos</a>
					<a href="#" <?php $controlador = new UBcontroller(); $controlador -> verifActive("fotos"); ?>><i class="far fa-hand-pointer"></i>Foto-Edit</a>
					<a href="#" <?php $controlador = new UBcontroller(); $controlador -> verifActive("web"); ?>><i class="far fa-hand-pointer"></i>Diseño Web</a>
					<hr />
					<a href="#" <?php $controlador = new UBcontroller(); $controlador -> verifActive("contacto"); ?>><i class="far fa-hand-pointer"></i>Contacto</a>
					<a href="#" <?php $controlador = new UBcontroller(); $controlador -> verifActive("costos"); ?>><i class="far fa-hand-pointer"></i>Costos</a>
				<?php else: ?>
					<a href="index.php?cont=presentacion"><i class="far fa-hand-pointer"></i>Inicio</a>
					<a href="index.php?cont=ilustracion"><i class="far fa-hand-pointer"></i>Illustraci&oacuten</a>
					<a href="#"><i class="far fa-hand-pointer"></i>Videos</a>
					<a href="#"><i class="far fa-hand-pointer"></i>Foto-Edit</a>
					<a href="#"><i class="far fa-hand-pointer"></i>Diseño Web</a>
					<hr />
					<a href="#"><i class="far fa-hand-pointer"></i>Contacto</a>
					<a href="#"><i class="far fa-hand-pointer"></i>Costos</a>
				<?php endif ?>
			<?php else: ?>
				<a href="index.php?cont=presentacion" class="active"><i class="far fa-hand-pointer"></i>Inicio</a>
				<a href="index.php?cont=ilustracion" ><i class="far fa-hand-pointer"></i>Illustraci&oacuten</a>
				<a href="#"><i class="far fa-hand-pointer"></i>Videos</a>
				<a href="#"><i class="far fa-hand-pointer"></i>Foto-Edit</a>
				<a href="#"><i class="far fa-hand-pointer"></i>Diseño Web</a>
				<hr />
				<a href="#"><i class="far fa-hand-pointer"></i>Contacto</a>
				<a href="#"><i class="far fa-hand-pointer"></i>Costos</a>
			<?php endif ?>
		</nav>