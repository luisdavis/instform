
<div class="col-sm-7">
	<div class="row">
		<form action="" id="formQuery" class="form-horizontal" role="form" method="POST">
				<!-- form data -->
				<fieldset>
						<legend>Buscar Por:</legend>
						<div class="radio-inline">
							<label>
							    <input type="radio" name="optionsRadios" id="radioActivo" value="Activo" checked>
							    	Activo
							</label>
						</div>

						<div class="radio-inline">
							<label>
							   	<input type="radio" name="optionsRadios" id="radioEspera" value="En Espera" >
							    	En Espera
							</label>
						</div>

						<div class="radio-inline">
							<label>
								<input type="radio" name="optionsRadios" id="radioPromovido" value="Promovido A Intellisys" >
									Promovido A Intellisys
							</label>
						</div>

						<div class="radio-inline">
							<label>
								<input type="radio" name="optionsRadios" id="radioReprobado" value="Reprobado" >
									Reprobado
							</label>
						</div>

						<div class="radio-inline">
							<label>
								<input type="radio" name="optionsRadios" id="radioDisponible" value="Disponible para intellisys">
									Disponible para intellisys
							 </label>
						</div>	

						<br>

						<div class="">
							<label>
								<input type="radio" name="optionsRadios" id="radioUni" value="filtUni">
									Universidad
							</label>
							<div class="col-sm-6">
								<select name="selUniversidad" id="selUniversidad" class="form-control">
									<option>PUCCM</option>
									<option>Utesa</option>
									<option>O&amp;M</option>
									<option>UASD</option>
								</select>
							</div>
							<input type="submit" value="Buscar">
						</div>
						<input type="hidden" name="query">
							
					</fieldset>
		
		</form>
	</div>


<!-- filtrado-->
	<div class="row" id="divFilter">
		<form action="">
			<div class="form-group">
				<label for="txtFiltrar" class="col-sm-2 control-label">Nombre:</label>
				<div class="col-sm-5">
					<input type="text" id="txtFiltrar" name="txtFiltrar" class="form-control">	
				</div>
					<input type="submit" value="Filtrar">
			</div>	
			<input type="hidden" name="queryFilter">
		</form>
	</div>

	<div class="row">
		<table class="table table-striped" id="grid">
			<tr>
				<th>Nombre</th>
				<th>Universidad</th>
				<th>Status</th>
				<th colspan="2">Accion</th>
			</tr>	
			<?php 
				//busqueda
				if(isset($_POST["query"])){

					echo $students; // table data
				}
			 ?>
		</table>
	</div>

</div>