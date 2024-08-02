<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 
?>

<link rel="stylesheet" href="tab.css">

<script>
	function openList(evt, cityName) {
		// Declare all variables
		var i, tabcontent, tablinks;

		// Get all elements with class="tabcontent" and hide them
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}

		// Get all elements with class="tablinks" and remove the class "active"
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}

		// Show the current tab, and add an "active" class to the link that opened the tab
		document.getElementById(cityName).style.display = "block";
		evt.currentTarget.className += " active";
	}
	</script>
	
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>	
	
    <script> $(document).ready( function () {
        $('#autosearch').DataTable();
       } );</script>  <!-- to apply the external file style to the tables-->

	   <?php

		   echo "<div align=\"center\"><font size=120% color=black>Welcome! Your Profile is: User </div></font>";

		?>
	   
<div class="container p-4">

	<div class="row">
		<div class="col-md-4">
		     <?php  if(isset($_SESSION['message'])) {?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>				
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
			 <?php  session_unset();}?>
		  
			<div class="card card-body">
					
					<form action="savetask.php" method="POST">
						<div class="form-group">
							<label id="username1" name="vehicle" style="color:black;"><strong>Selecciona el vehículo</strong></label>
							<select name="vehicle" id="vehicleSelect" required>
							  <?php 
								$SQLSELECT = "SELECT * FROM drivers_vehicle ORDER BY id ASC"; 
								$result_set = mysqli_query($conn, $SQLSELECT); 
								while ($rows = $result_set->fetch_assoc()) { 
								  $vehicle = $rows['vehicle']; 
								  echo "<option value='$vehicle'>$vehicle</option>"; 
								  print $_POST['vehicle'];
								}							
							  ?>
							</select>
							<!--<?php 
						    //echo "<option value='$SalaryMonthly'>$SalaryMonthly</option>";       								  
							//print $vehicle;
							//$selectedVehicle = $_POST['vehicle'];
							//$SQLSELECT1 = "SELECT SalaryMonthly FROM valuesbenelli where vehicle='$selectedVehicle'"; 
							//$result_set1 = mysqli_query($conn, $SQLSELECT1);
							 // IF ($row = mysqli_fetch_assoc($result_set1)) { 
							//	  $SalaryMonthly = $row['SalaryMonthly']; 
							//	} else {
							//	   $SalaryMonthly = "No se encontró información del salario mensual";
							//	}
							//?>	
							<label id="username1" name="vehicle" style="color:black;"><strong>Vehículo Seleccionado</strong></label>
							<input type="text" id="SalaryMonthly"  name="SalaryMonthly" class="form-control" value="<?php echo $SalaryMonthly; ?>" placeholder="Salario Mensual" autofocus readonly><br>
							<!--<input type="text" name="vehicle_list" id="vehicleList" class="form-control" value="<?php //echo $selectedVehicle; ?>" readonly><br> -->
							<input type="text" name="vehicle_list" id="vehicleList" class="form-control"  placeholder="Salario Mensual" readonly><br>
							<br><br>
						</div>
							<div class="form-group">
                             
							<label id="username1" name="" style="color:black;"><strong>Salario Mensual</strong></label>
						    <input type="text" id="SalaryMonthly"  name="SalaryMonthly" class="form-control" placeholder="Salario Mensual" autofocus readonly></input><br>						
						   </div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Tanqueada Full</strong></label>
							    <input type="text" name="gasolinefull" class="form-control" placeholder="Tanqueada Full" autofocus readonly></input><br>
							</div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Aceite</strong></label>
								<input type="text" name="oilfull" class="form-control" placeholder="Aceite" readonly></input><br>
							</div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Soat Anual</strong></label>
								<input type="text" name="soatyearly" class="form-control" placeholder="Soat Anual" readonly></input><br>
							</div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Tecnomecánica Anual</strong></label>
								<input type="text" name="technomecanicalyearly" class="form-control" placeholder="Tecnomecanica Anual" readonly></input><br>
							</div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Mantenimiento Trimestral</strong></label>
								<input type="text" name="quarterlymaintenance" class="form-control" placeholder="Mantenimiento Trimestral" readonly></input><br>
							</div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Impuesto Anual</strong></label>
								<input type="text" name="anualtaxes" class="form-control" placeholder="Impuesto Anual" readonly></input><br>
							</div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Costo de Peaje</strong></label>
								<input type="text" name="tollcost" class="form-control" placeholder="Costo de Peaje" readonly></input><br>
							</div>
							<div class="form-group">
							    <label id="username1" name="vehicle" style="color:black;"><strong>Costo de Hora de Espera</strong></label>
								<input type="text" name="hourcost" class="form-control" placeholder="Costo de Hora de Espera" readonly></input><br>
							</div>
					</form>

						<script>
						  // Función para actualizar el campo de entrada con el vehículo seleccionado
						  document.getElementById("vehicleSelect").addEventListener("change", function() {
							var selectedVehicle = this.value;
							document.getElementById("vehicleList").value = selectedVehicle;
						  });
						  //document.getElementById("SalaryMonthly").addEventListener("change", function() {
						//	var selectedSalary = this.value;
						//	document.getElementById("SalaryMonthly").value = selectedSalary;
						 // });
						</script>
                      
					
					
					
					<!--<form action="loadvalues.php" method="POST">
					  <label id= "username1" name="vehicle" color="white"><strong>Select the vehicle</strong></label>
					  <select name= "vehicle" required> <?php $SQLSELECT = "SELECT * FROM vehicle order by id asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $vehicle = $rows['vehicle']; echo "<option value='$vehicle'>$vehicle</option>";} ?></select> <br><br>
					 </form>
					<form action="savetask.php" method="POST"> 
					<div class="form-group">
						<input type="text" name="SalaryMonthly" class="form-control" placeholder="Salario Mensual" autofocus></input><br>
						<input type="text" name="vehicle_list" class="form-control" placeholder="Vehiculo Seleccionado" autofocus value ="$_vehicle" readonly></input><br>
					</div> -->
					
					
					<input type="submit" class="btn btn-success btn-block" name="save_task" value="Update Values"></input>
					<input type="submit" class="btn btn-success btn-block" name="logout" value="Logout" formaction="DriversQuotationFinal.php"></input>
					<input type="submit" class="btn btn-success btn-block" name="logout" value="Refresh" formaction="driversQuotationOpsaAndAdminfinal.php""></input>
				</form>
			</div>
		</div>
		
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
				   <tr>
				      <th>ID</th>
					  <th>Vehículo</th>
					  <th>Salario Mensual</th>
					  <th>Tanqueada Full</th>
					  <th>Aceite</th>
					  <th>SOAT Anual</th>
					  <th>Tecnomecanica Anual</th>
					  <th>Mantenimiento Trimestral</th>
					  <th>Impuesto Anual</th>
					  <th>Costo de Peaje</th>
					  <th>Costo de Hora de Espera</th>
				   </tr>
			    </thead>
				<tbody>
					<?php 
					$query = "select * from drivers_opsvalues";
					$result_tasks = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($result_tasks)) { ?>
					  <tr>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['vehicle'] ?></td>
						<td><?php echo $row['salarymonthly'] ?></td>
						<td><?php echo $row['gasolinefull'] ?></td>
						<td><?php echo $row['oilfull'] ?></td>
						<td><?php echo $row['soatyearly'] ?></td>
						<td><?php echo $row['technomechanicalyearly'] ?></td>
						<td><?php echo $row['quarterlymaintenance'] ?></td>
						<td><?php echo $row['anullytaxes'] ?></td>
						<td><?php echo $row['tollcost'] ?></td>
						<td><?php echo $row['hourcost'] ?></td>
						<td><a href="edit.php?id=<?php echo $row['id']?>"class="btn btn-secondary"><i class="fas fa-marker"></i></a>
						    <a href="delete.php?id=<?php echo $row['id']?>"class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
						</td>
					  </tr>
					<?php }?>
				<tbody>
			</table>
		</div>
	</div>
</div>

<?php include ("footer.php")?>

 