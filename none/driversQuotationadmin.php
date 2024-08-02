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


<body>
<ul class="tab">
		  
		  <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminConsole')">| Managing Console Options |</a></li>
		  <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminActionList')">Managing Cases  |</a></li>
		  
	</ul>
	
		
<div id="Resume" class="tabcontent">
	  <table id="autosearch" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
                                <th>IDs</th>
								<th>SR Number</th>
								<th>Statement</th>
								<th>Channel Name</th>
								<th>Tier</th>
								<th>Subregion</th>
								<th>Country</th>
								<th>Case Opened Date</th>
								<th>Case Edge</th>						
								<th>PAM POCs</th>
								<th>PAN Director</th>
								<th>LOB</th>
								<th>Product</th>
								<th>Channel POC</th>
								<th>Topic</th>
								<th>Channel Agreement Topic Fixed</th>
								<th>Task Action Taken1</th>
								<th>Task Action Taken2</th>
								<th>Recap Sent</th>
								<th>Reincidence Issue</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM top_channels_tracker"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    /*$_cont=$_cont+1;*/
					
					?>
                        
						     <tr>
							<td align="center" onclick="Display"><?php echo"<a href='emailfinal.php?id={$row['id']}'>{$row['id']}"?></td>
                            <!--<td align="center"><?php echo $row['id']; ?></td> -->
							<td align="center"><?php echo $row['sr_number']; ?></td>
							<td align="center"><?php echo $row['statement']; ?></td>
                            <td align="center"><?php echo $row['channel_name']; ?></td>
                            <td align="center"><?php echo $row['channel_partner_distributor_reseller']; ?></td>
                            <td align="center"><?php echo $row['Subregion']; ?></td>	
							<td align="center"><?php echo $row['Country']; ?></td>
                            <td align="center"><?php echo $row['Case_opened']; ?></td>
							<td align="center"><?php echo $row['Case_Edge']; ?></td>							
							<td align="center"><?php echo $row['pam_poc']; ?></td>	
                            <td align="center"><?php echo $row['pam_director']; ?></td>							
							<td align="center"><?php echo $row['lob']; ?></td>
							<td align="center"><?php echo $row['product']; ?></td>							
                            <td align="center"><?php echo $row['channel_topic_POC']; ?></td>
							<td align="center"><?php echo $row['topic']; ?></td>
							<td align="center"><?php echo $row['channel_agreement_topic_fixed']; ?></td>
							<td align="center"><?php echo $row['tasks_actions_taken1']; ?></td>
							<td align="center"><?php echo $row['tasks_actions_taken2']; ?></td>
							<td align="center"><?php echo $row['recap_sent']; ?></td>
							<td align="center"><?php echo $row['reincidence']; ?></td>
                           </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>
		</div>		
</body>			
		


		
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
								$SQLSELECT = "SELECT * FROM vehicle ORDER BY id ASC"; 
								$result_set = mysqli_query($conn, $SQLSELECT); 
								while ($rows = $result_set->fetch_assoc()) { 
								  $vehicle = $rows['vehicle']; 
								  echo "<option value='$vehicle'>$vehicle</option>"; 
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
							//?>-->	
							print_r ($_POST['vehicle']);
							<label id="username1" name="vehicle" style="color:black;"><strong>Vehículo Seleccionado</strong></label>
							<input type="text" name="vehicle_list" id="vehicleList" class="form-control" placeholder="Vehiculo Seleccionado" readonly><br>
							<!--<input type="text" name="vehicle_list" id="vehicleList" class="form-control" value="<?php //echo $selectedVehicle; ?>" readonly><br> -->
							<br><br>
						</div>
							<div class="form-group">
                             
							<label id="username1" name="" style="color:black;"><strong>Salario Mensual</strong></label>
						    
							<!--<input type="text" id="SalaryMonthly"  name="SalaryMonthly" class="form-control" value="<?php echo $SalaryMonthly; ?>" placeholder="Salario Mensual" autofocus readonly><br>-->
							<!--<input type="text" id="SalaryMonthly"  name="SalaryMonthly" class="form-control" placeholder="Salario Mensual" autofocus readonly></input><br>-->
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
				      <th>Salario Mensual</th>
					  <th>Description</th>
					  <th>Project</th>
					  <th>Region</th>
					  <th>Subregion</th>
					  <th>Created At</th>
					  <th>Days Opened</th>
					  <th>Actions</th>
				   </tr>
			    </thead>
				<tbody>
					<?php 
					##$query = "select * from dailytask where completed = '0' and username = '$username1' order by id";
					$query = "select * from dailytask where completed = '0' order by id";
					$result_tasks = mysqli_query($conn,$query);
					while($row = mysqli_fetch_array($result_tasks)) { ?>
					  <tr>
						<td><?php echo $row['task'] ?></td>
						<td><?php echo $row['description'] ?></td>
						<td><?php echo $row['project'] ?></td>
						<td><?php echo $row['region'] ?></td>
						<td><?php echo $row['subregion'] ?></td>
						<td><?php echo $row['creationdate'] ?></td>
						<td><?php echo $row['difference'] ?></td>
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