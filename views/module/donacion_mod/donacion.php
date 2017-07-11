
<!DOCTYPE html>
<html>
<head>
<title>Donación</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="views/assets/css/donacion.css" rel="stylesheet" type="text/css" media="all" />
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
</head>
<body>
	<div class="main">
		<h1>Donación</h1>
		<form action="#" method="post">
		<div class="agile_main_grids">

			<div class="agileits_main_grid">
				<div class="agile_main_grid_left">

						<h3>Danos algunos detalles :</h3>
						<input type="text" name="Primer Nombre" placeholder="Primer Nombre" required="">
						<input type="text" name="Segundo Nombre" placeholder="Segundo Nombre" required="">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="text" name="Número de teléfono" placeholder="Número de Teléfono" required="">
						<!--Estos campos pueden aparecen autocompletados para que no se tengan que volver a ingresar-->


						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Padece o ha padecido de de alguna enfermdad física?</h4>
							</div>
							<div class="agileits_main_grid_left_r">
								<form>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio"><i></i>No</label>
									</div>
								</form>
							</div>
						</div>
						<!--Si se elige que si se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select1" class="select" onchange="change_country(this.value)" required="">
							<option value="">Seleeccione una opción</option>
							<option value="">Algún tipo de Hepatitis</option>
							<option value="">Anemia</option>
							<option value="">Sufro de alguna Alergia</option>
							<option value="">Enfermedades o alteraciones cardiacas</option>
							<option value="">Parálisis temporal o permanente de alguna parte del cuerpo</option>
							<option value="">Alguna otra que implica los organos a donar</option>
						</select>

						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Padece o ha padecido de de alguna enfermdad mental?</h4>
							</div>
							<div class="agileits_main_grid_left_r">
								<form>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio"><i></i>No</label>
									</div>
								</form>
							</div>
						</div>
						<!--Si se elige que si se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select1" class="select" onchange="change_country(this.value)" required="">
							<option value="">Seleccione una opción</option>
							<option value="">Depresión</option>
							<option value="">Bipolaridad</option>
							<option value="">Fobias extremas (que afecten el proceso de donación)</option>
							<option value="">Esquizofrenia</option>
							<option value="">Otras que afecten el proceso de donación</option>
						</select>


					</div>
					<div class="agile_main_grid_left">
						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Se ha realizado algún tatuaje en los últimos cuatro meses?</h4>
							</div>
							<div class="agileits_main_grid_left_r">
								<form>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio"><i></i>No</label>
									</div>
								</form>
							</div>
						</div>
						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Ha realizado alguna donación durante el último año?</h4>
							</div>
							<div class="agileits_main_grid_left_r">
								<form>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio" checked=""><i></i>Si</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio"><i></i>No</label>
									</div>
								</form>
							</div>
						</div>
						<!--Si se elige que si se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select1" class="select" onchange="change_country(this.value)" required="">
							<option value="">¿Qué tipo de donación?</option>
							<option value="">Sangre</option>
							<option value="">Organos o tejidos</option>
						</select>
						<div class="agileits_main_grid_left_grid">
							<h3>Tu Donación :</h3>
						<div class="agileits_main_grid_left_l_grids">
							<div class="agileits_main_grid_left_l">
								<h4>¿Qué tipo de donación desea hacer?</h4>
							</div>
							<div class="agileits_main_grid_left_r">
								<form>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio" checked=""><i></i>Donación de Sangre</label>
									</div>
									<div class="agileinfo_radio_button">
										<label class="radio"><input type="radio" name="radio"><i></i>Donación de organos o tejidos</label>
									</div>
								</form>
							</div>
						</div>
						<!--Si se elige que "organos" se activa el siguiente dropdown sino queda desactivado-->
						<select id="agileits_select1" class="select" onchange="change_country(this.value)" required="">
							<option value="">Seleccione un organo o tejido</option>
							<option value="">Riñón</option>
							<option value="">Hígado</option>
							<option value="">Corazón</option>
							<option value="">Páncreas</option>
							<option value="">Pulmón</option>
							<option value="">Intestino</option>
							<option value="">Médula ósea</option>
							<option value="">Hueso</option>
							<option value="">Tejido ocular</option>
							<option value="">Valvulas cardiacas</option>
							<option value="">Segentos vasculares</option>
							<option value="">Ligamentos</option>
						</select>
						<input type="submit" name="" value="Enviar">
						</div>
					</div>

					<div class="clear"> </div>

			</div>
		</div>
		</form>
	</div>