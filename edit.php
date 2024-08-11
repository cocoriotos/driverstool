<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 
include "sessions.php";
//if (session_status() === PHP_SESSION_NONE) {
//    session_start();
//}
$vehicle = $_POST['vehicle'];
$usernamer=$_POST['usernamer1'];
//print $usernamer;
//print $_SESSION['counter'];
?>

<link rel="stylesheet" href="tab.css">

<?php
		   //echo "<div align=\"center\" style=\"font-size: 120%;\">Welcome! Your Profile is: Admin </div>";
           $query = "select * from drivers_opsvalues where vehicle='$vehicle' and user='$usernamer'";
		   $result_tasks = mysqli_query($conn,$query);
		   $row = mysqli_fetch_array($result_tasks);
?>
	   
<div class="container p-4">
			<div class="card card-body">
			<center>
			    <br>
				<form action="updatevalues.php" method="POST"> 
				    <label id="form_title" style="color:red; font-size: 150%;" ><strong>Puede cambiar los valores de Operación</strong></label><br><br>	
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Vehículo</strong></label><br>
					<input type="text" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center;" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input><br>
					
					<label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Usuario</strong></label><br>
					<input type="text" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center;" name="usernamer1" class="form-control" placeholder="Usuario" autofocus value="<?php echo $usernamer; ?>" readonly><br><br>
					
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Salario Mensual | <?php echo $row['salarymonthlydays']; ?>  días</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="salario" class="form-control" placeholder="salario" autofocus value="<?php echo $row['salarymonthly']; ?>"></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong><?php echo $row['gasolinekms']; ?> kms por tanqueada</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="gasolinekms" class="form-control" placeholder="gasolinekms" autofocus value="<?php echo $row['gasolinekms']; ?>" ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Costo Tanqueada full cada <?php echo $row['gasolinekms']; ?> kms</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="gasolinefull" class="form-control" placeholder="gasolinefull" autofocus value="<?php echo $row['gasolinefull']; ?>" ></input><br>
	        		<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Cambio de Aceite  cada <?php echo $row['oilrenewkms']; ?> kms</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="oilfull" class="form-control" placeholder="oilfull" autofocus value="<?php echo $row['oilfull']; ?>" ></input><br>
                    <label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Soat Anual</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="soatyearly" class="form-control" placeholder="soatyearly" autofocus value="<?php echo $row['soatyearly']; ?>" ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Tecnomecánica Anual</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="technomechanicalyearly" class="form-control" placeholder="technomechanicalyearly" autofocus value="<?php echo $row['technomechanicalyearly']; ?>" ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Mantenimiento Trimestral | cada <?php echo $row['quarterlydays']; ?> días</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="quarterlymaintenance" class="form-control" placeholder="quarterlymaintenance" autofocus value="<?php echo $row['quarterlymaintenance']; ?>" ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Impuestos Anuales</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="anuallytaxes" class="form-control" placeholder="anuallytaxes" autofocus value="<?php echo $row['anuallytaxes']; ?>" ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Valor de Peajes</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="tollcost" class="form-control" placeholder="tollcost" autofocus value="<?php echo $row['tollcost']; ?>" ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Valor Hora Manejada en ciudad</strong></label><br> 
					<input type="text" style="background-color:gray; color:white; font-size: 150%; text-align: center;" name="drivenhourcostcity" class="form-control" placeholder="drivenhourcostcity" autofocus value="<?php echo $row['drivenhourcostcity']; ?>" readonly ></input><br>
                    <label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Valor Hora Manejada en Carretera</strong></label><br>
					<input type="text" style="background-color:gray; color:white; font-size: 150%; text-align: center;" name="drivenhourcostrural" class="form-control" placeholder="drivenhourcostrural" autofocus value="<?php echo $row['drivenhourcostrural']; ?>" readonly ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Ciudad</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="unforeseencity" class="form-control" placeholder="unforeseencity" autofocus value="<?php echo $row['unforeseencity']; ?>" ></input><br>
                    <label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Carretera</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="unforeseenrural" class="form-control" placeholder="unforeseenrural" autofocus value="<?php echo $row['unforeseenrural']; ?>" ></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Horas laborales Diarias</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="hoursbyday" class="form-control" placeholder="hoursbyday" autofocus value="<?php echo $row['hoursbyday']; ?>" ></input><br>
					<input id="loginbutton" style="font-size: 150%; text-align: center;"name="updatevalues" type="submit" value="Actualizar Valores"><br><br> 
				    <input id="loginbutton" type="submit" class="btn btn-success btn-block" style="background-color:green; color:white; font-size: 150%; text-align: center;" name="cancel" value="Ir a Cotizar" formaction="quoteservices.php"><br>
                    <input type="submit" style="font-size: 150%; text-align: center;" class="btn btn-success btn-block" name="cancel" value="Cancel" formaction="driversQuotationOpsaAndAdminVehicleuser.php"/>
				</form>
			</center>					
					<!--<form action="quoteservices.php">
						<center><input style="background-color:green; color:white; font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="cancel" value="Ir a Cotizar"></input></center>
						<!--<center><input style="font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="cancel" value="Cancel"></input></center>
                    </form>-->
			</div>
</div>			
<?php include ("footer.php")?>

 