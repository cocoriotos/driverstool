<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 

$vehicle = $_POST['vehicle'];
//print_r($vehicle);
?>

<link rel="stylesheet" href="tab.css">

<!-- s<script>
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
		   //echo "<div align=\"center\" style=\"font-size: 120%;\">Welcome! Your Profile is: Admin </div>";
           $query = "select * from drivers_opsvalues where vehicle='$vehicle'";
		   $result_tasks = mysqli_query($conn,$query);
		   $row = mysqli_fetch_array($result_tasks);
		   ?>
	   
<div class="container p-4">
			<div class="card card-body">
			<center>
			    <br>
				<form action="quotation.php" method="POST"> 
				    <center><label id="form_title" style="color:red; font-size: 150%;" ><strong>Módulo de Cotización de Rutas/Domicilios</strong></label></center><br><br>	
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Vehículo</strong></label></center>
					<center><input id="texto" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label></center>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label></center> 	
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Sitio Desde dónde arranca el Servicio</strong></label></center>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="origin" class="form-control" placeholder="Sitio de Origen del Servicio" required /></center>	
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Sitio de Destino del Servicio </strong></label></center>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="destination" class="form-control" placeholder="Destino del Servicio" required /></center><br>
                    <center><label id="username1" style="color:blue; font-size: 150%; text-align: center;"><strong>---------------------- Cotización servicio en Ciudad ----------------</strong></label></center><br><br>		
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Distancia en Kms de ida para atender el servicio en ciudad</strong></label></center>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="deliverydistancecity" class="form-control" placeholder="deliverydistancecity" autofocus value="<?php echo $row['deliverydistancecity']; ?>" required ></center>	
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>horas totales manejadas en ciudad</strong></label></center> 
					<center><select style="color:black; font-size: 150%; text-align: center;" name= "drivenhourscity" required> <?php $SQLSELECT = "SELECT hoursdriven FROM drivers_hoursdriven"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $drivenhourscity = $rows['hoursdriven']; echo "<option value='$drivenhourscity'>$drivenhourscity</option>";} ?></select></center> <br>	
					<!--<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="drivenhourscity" class="form-control" placeholder="drivenhourscity" autofocus value="<?php echo $row['drivenhourscity']; ?>" required ></input></center>-->
	        		<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Trayecto ida en Ciudad</strong></label></center> 
					<center><select style="color:black; font-size: 150%; text-align: center;" name= "tripcity" required> <?php $SQLSELECT = "SELECT trip FROM drivers_trips"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $tripcity = $rows['trip']; echo "<option value='$tripcity'>$tripcity</option>";} ?></select></center> <br>	
					<!--<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="tripcity" class="form-control" placeholder="tripcity" autofocus value="<?php echo $row['tripcity']; ?>" required ></input></center>-->
                    <center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Trayecto Regreso en Ciudad</strong></label></center> 
					<center><select style="color:black; font-size: 150%; text-align: center;" name= "roundtripcity" required> <?php $SQLSELECT = "SELECT trip FROM drivers_trips"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $roundtripcity = $rows['trip']; echo "<option value='$roundtripcity'>$roundtripcity</option>";} ?></select></center> <br>	
					<!--<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="roundtripcity" class="form-control" placeholder="roundtripcity" autofocus value="<?php echo $row['roundtripcity']; ?>" required ></input></center>-->
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Ciudad</strong></label></center> 
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="unforeseencity" class="form-control" placeholder="unforeseencity" autofocus value="<?php echo $row['unforeseencity']; ?>" required ></input></center><br>	
					<center><center><label id="username1" style="color:blue; font-size: 150%; text-align: center;"><strong>---------------------- Cotización servicio en Carretera ----------------</strong></label></center><br><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Distancia en Kms solo ida para atender el servicio en Carretera</strong></label></center>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="deliverydistancerural" class="form-control" placeholder="deliverydistancerural" autofocus value="<?php echo $row['deliverydistancerural']; ?>" required ></center>	
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>horas totales manejadas en carretera</strong></label></center> 
					<center><select style="color:black; font-size: 150%; text-align: center;" name= "drivenhoursrural" required> <?php $SQLSELECT = "SELECT hoursdriven FROM drivers_hoursdriven"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $drivenhoursrural = $rows['hoursdriven']; echo "<option value='$drivenhoursrural'>$drivenhoursrural</option>";} ?></select></center> <br>	
					<!--<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="drivenhoursrural" class="form-control" placeholder="drivenhoursrural" autofocus value="<?php echo $row['drivenhoursrural']; ?>" required ></input></center>-->	        		
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Trayecto ida en Carretera</strong></label></center> 
				    <center><select style="color:black; font-size: 150%; text-align: center;" name= "triprural" required> <?php $SQLSELECT = "SELECT trip FROM drivers_trips"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $triprural = $rows['trip']; echo "<option value='$triprural'>$triprural</option>";} ?></select></center> <br>	
     				<!--<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="triprural" class="form-control" placeholder="triprural" autofocus value="<?php echo $row['triprural']; ?>" required ></input></center>-->
                    <center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Trayecto Regreso en Carretera</strong></label></center> 
				     <center><select style="color:black; font-size: 150%; text-align: center;" name= "roundtriprural" required> <?php $SQLSELECT = "SELECT trip FROM drivers_trips"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $roundtriprural = $rows['trip']; echo "<option value='$roundtriprural'>$roundtriprural</option>";} ?></select></center> <br>		
                 	<!--<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="roundtriprural" class="form-control" placeholder="roundtriprural" autofocus value="<?php echo $row['roundtriprural']; ?>" required ></input></center>-->
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Carretera</strong></label></center> 
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="unforeseenrural" class="form-control" placeholder="unforeseenrural" autofocus value="<?php echo $row['unforeseenrural']; ?>" required ></input></center>
                    <center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Cantidad de Peajes (ida y regreso si aplican) </strong></label></center>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="tollsquantity" class="form-control" placeholder="tollsquantity" autofocus value="<?php echo $row['tollsquantity']; ?>" required ></center>
					<br>
					<input id="loginbutton" style="background-color:green; color:white; font-size: 150%; text-align: center;" name="quotation" type="submit" value="Generar Cotización"/><br><br>
					<input type="submit" style="font-size: 150%; text-align: center;" class="btn btn-success btn-block" name="cancel" value="Cancel" formaction="driversQuotationOpsaAndAdminVehicleuser.php"/>
				</form>
			</center>						
			</div>
</div>			
<?php include ("footer.php")?>

 