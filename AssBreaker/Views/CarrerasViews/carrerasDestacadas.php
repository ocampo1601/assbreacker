<center>
		
	<h1 class="titulo">Carreras destacadas</h1><br>

	<img src="Assets/Images/carreras.png" alt="Carreras" class="img-titulo">

	<hr><br>

	<div id="carreras">

		<?php while($carrera = $carreras->fetch_object()): ?>

		<div class="carrera">
			
			<a href="#" title="Ver más">
				
				<img src="Assets/Images/carreras.jpg" alt="carrera">

				<br><br>

				<h2 class="titulo"> <?php echo $carrera->nombre; ?> </h2>

				<br>

				<p> <?php echo  substr($carrera->descripcion, 0, 200); ?> ... </p>

				<br>

				<span>

					<b>Certificación:</b> 
					<i> <?php echo $carrera->certificacion; ?> </i>

				</span>

				<br><br>

				<span>

					<b>Codigo SNIES:</b> 
					<i> <?php echo $carrera->codigo_snies; ?> </i>

				</span>

				<br><br>

			</a>

		</div>

		<?php endwhile; ?>

	</div>

</center>