<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 

?>

<link rel="stylesheet" href="tab.css">
	   <?php

		   //echo "<div align=\"center\"><font size=80% color=black>Welcome! Your Profile is: Admin </font></div>";

		?>

  
<div class="container p-4">
			<div class="card card-body">
					<form action="vehicleops.php" method="POST">
						<div class="form-group">
							<br>
							<center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Selecciona el vehículo a usar en el Servicio</strong></label></center><br>
							<center><select style="color:black; font-size: 150%; text-align: center;" name= "vehicle" required> <?php $SQLSELECT = "SELECT vehicle FROM drivers_vehicle"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $vehicle = $rows['vehicle']; echo "<option value='$vehicle'>$vehicle</option>";} ?></select></center> <br><br>		
					</form>
					<center><input style="background-color: green; color:white; font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="opsvalues" value="Revisar Costos Operacionales"></input></center><br>
					<!--<center><input style="background-color: green; color:white; font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="opsvalues" value="Load Operational Values"></input></center><br>

					<form action="historical.php">
                         <center><input style="font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="logout" value="Histórico de Servicios" /></center>
                    </form>-->
					<form action="DriversQuotationFinal.php">
                         <center><input style="font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="logout" value="Logout" /></center>
                    </form>
			</div>
		</div>
</div>		
			

<?php include ("footer.php")?>
 