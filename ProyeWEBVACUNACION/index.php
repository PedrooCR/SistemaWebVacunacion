<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Validación de Formulario con Javascript</title>
	<link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="CSS/estilosformulario.css">
</head>
<body>
	<main>
		<center><h3>FORMULARIO PARA REGISTRAR PACIENTES VACUNADOS</h3></center>
		<form action="" class="formulario" id="formulario">
			<!-- Grupo: NOMBRES-->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nombres</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="nombres" id="nombres" placeholder="John Doe">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: APELLIDOS -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Apellidos</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellidos" id="apellidos" placeholder="John Doe">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: NACIONALIDAD-->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Nacionalidad</label>
				<div class="formulario__grupo-input">
					<select name="nacionalidad" class="formulario__input">
						<option>Peruano</option>
						<option>Extranjero</option>
					</select>
				</div>
			</div>

			<!-- Grupo: TIPO DE DOCUMENTO-->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombre" class="formulario__label">Tipo de documento</label>
				<div class="formulario__grupo-input">
					<select name="tipodocumento" class="formulario__input">
						<option>DNI</option>
						<option>Carnet de extranjeria</option>
						<option>Pasaporte</option>
					</select>
				</div>
			</div>
            
			<!-- Grupo: NUMERO DE DOCUMENTO -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="numerodocumento" class="formulario__label">Numero de documento</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="numerodocumento" id="numerodocumento" placeholder="70102030">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>

			<!-- Grupo: EDAD -->
			<div class="formulario__grupo" id="grupo__telefono">
				<label for="edad" class="formulario__label">Edad</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="edad" id="edad" placeholder="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			</div>
            
			<!-- Grupo: Correo Electronico -->
			<div class="formulario__grupo" id="grupo__correo">
				<label for="correo" class="formulario__label">Correo Electrónico</label>
				<div class="formulario__grupo-input">
					<input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
			</div>

            <!-- Grupo: SEXO -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="sexo" class="formulario__label">Sexo</label>
				<div class="formulario__grupo-input">
					<select name="sexo" class="formulario__input">
						<option>Masculino</option>
						<option>Femenino</option>
					</select>
				</div>
			</div>

            <!-- Grupo: DIRECCION -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="direccion" class="formulario__label">Dirección</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="direccion" id="direccion" placeholder="Av. La republica 444">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

			<!-- Grupo: PROVINCIA -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="provincia" class="formulario__label">Provincia</label>
				<div class="formulario__grupo-input">
					<select name="provincia" class="formulario__input">
						<option>Lima</option>
						<option>Barranca</option>
						<option>Cajatambo</option>
						<option>Canta</option>
						<option>Cañete</option>
						<option>Huaral</option>
						<option>Huarochirí</option>
						<option>Huaura</option>
						<option>Oyón</option>
						<option>Yauyos</option>

					</select>
				</div>
			</div>
            <!-- Grupo: DEPARTAMENTO -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="departamento" class="formulario__label">Departamento</label>
				<div class="formulario__grupo-input">
					<select name="departamento" class="formulario__input">
						<option>Amazonas</option>
						<option>Áncash</option>
						<option>Apurímac</option>
						<option>Arequipa</option>
						<option>Ayacucho</option>
						<option>Cajamarca</option>
						<option>Callao</option>
						<option>Cusco</option>
						<option>Huancavelica</option>
						<option>Huanuco</option>
						<option>Lima</option>

					</select>
				</div>
			</div>
			<!-- Grupo: DISTRITO -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="distrito" class="formulario__label">Distrito</label>
				<div class="formulario__grupo-input">
					<select name="distrito" class="formulario__input">
						<option>Chachapoyas</option>
						<option>Asunción</option>
						<option>Huaraz</option>
						<option>Cochabamba</option>
						<option>El Porvenir</option>
						<option>Camaná</option>
						<option>San juan de Miraflores</option>
						<option>San juan de Lurigancho</option>
						<option>La victoria</option>
						<option>Chorrillos</option>

					</select>
				</div>
			</div>
			<!-- Grupo: NOMBRE DE LA VACUNA-->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="nombrevacuna" class="formulario__label">Nombre de la vacuna</label>
				<div class="formulario__grupo-input">
					<select name="nombrevacuna" class="formulario__input">
						<option>Pfizer</option>
						<option>Sinopharm</option>
					</select>
				</div>
			</div>
			<!-- Grupo: DOSIS 1° FECHA-->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="dosisprimerafecha" class="formulario__label">Fecha de la 1° Dosis</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="dosisprimerafecha" id="dosisprimerafecha" placeholder="Av. La republica 444">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>
		    <!-- Grupo: DOSIS 2° FECHA-->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="dosissegundafecha" class="formulario__label">Fecha de la 2° Dosis</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="dosissegundafecha" id="dosissegundafecha" placeholder="Av. La republica 444">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>
            <!-- Grupo: CENTROS DE VACUNACION -->
			<div class="formulario__grupo" id="grupo__nombre">
				<label for="Centrovacunacion" class="formulario__label">Centro de Vacunación</label>
				<div class="formulario__grupo-input">
					<select name="Centrovacunacion" class="formulario__input">
						<option>Polideportivo VES</option>
						<option>Parque de la Exposición</option>
						<option>Parque Zonal Huaricocha</option>
						<option>Videna San Luis</option>
						<option>Campo de Marte</option>
						<option>Jockey Plaza</option>
						<option>Real Felipe</option>
						<option>Estadio Pachacútec</option>
						<option>Estadio Monumental</option>
						<option>Plaza Norte</option>
						<option>Parque Sinchi Roca</option>

					</select>
				</div>
			</div>

			<!-- -->
			<div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			</div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<button type="submit" class="formulario__btn">Enviar</button>
				<p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
		</form>
	</main>

	<script src="js/formulario.js"></script>
	<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
</body>
</html>