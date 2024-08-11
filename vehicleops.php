<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 
$vehicle = $_POST['vehicle'];
$usernamer=$_POST['usernamer1'];

include "sessions.php";
$_SESSION['counter']=$_SESSION['counter']+1;
$counter=$_SESSION['counter'];
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
				<form action="edit.php" method="POST"> 
				    <label id="form_title" style="color:red; font-size: 150%;" ><strong>Estos son los valores actuales de Operación</strong></label><br><br>	
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Vehículo</strong></label><br>
					<input type="text" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center; width: 500px;" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input><br><br>
					
					<label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Usuario</strong></label><br>
					<input type="text" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center; width: 500px;" name="usernamer1" class="form-control" placeholder="Usuario" autofocus value="<?php echo $usernamer; ?>" readonly><br><br>
					
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Salario Mensual | <?php echo $row['salarymonthlydays']; ?>  días</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="salario" class="form-control" placeholder="Salario" autofocus value="<?php echo $row['salarymonthly']; ?>" readonly><br><br>
					<!--<input type="text" name="salarymonthly" class="form-control" placeholder="salarymonthly" autofocus  value="<?php //echo '$' . number_format($row['salarymonthly'], 2, '.', ','); ?>" readonly></input>-->
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong><?php echo $row['gasolinekms']; ?> kms por tanqueada</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="gasolinekms" class="form-control" placeholder="gasolinekms" autofocus value="<?php echo $row['gasolinekms']; ?>" readonly></input><br><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Costo Tanqueada full cada <?php echo $row['gasolinekms']; ?> kms</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="gasolinefull" class="form-control" placeholder="gasolinefull" autofocus value="<?php echo $row['gasolinefull']; ?>" readonly></input><br><br>
	        		<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Cambio de Aceite  cada <?php echo $row['oilrenewkms']; ?> kms</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="oilfull" class="form-control" placeholder="oilfull" autofocus value="<?php echo $row['oilfull']; ?>" readonly></input><br><br>
                    <label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Soat Anual</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="soatyearly" class="form-control" placeholder="soatyearly" autofocus value="<?php echo $row['soatyearly']; ?>" readonly></input><br><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Tecnomecánica Anual</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="technomechanicalyearly" class="form-control" placeholder="technomechanicalyearly" autofocus value="<?php echo $row['technomechanicalyearly']; ?>" readonly></input><br><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Mantenimiento Trimestral | cada <?php echo $row['quarterlydays']; ?> días</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="quarterlymaintenance" class="form-control" placeholder="quarterlymaintenance" autofocus value="<?php echo $row['quarterlymaintenance']; ?>" readonly></input><br><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Impuestos Anuales</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="anuallytaxes" class="form-control" placeholder="anuallytaxes" autofocus value="<?php echo $row['anuallytaxes']; ?>" readonly></input><br><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Valor de Peajes</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="tollcost" class="form-control" placeholder="tollcost" autofocus value="<?php echo $row['tollcost']; ?>" readonly></input><br><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Valor Hora Manejada en ciudad</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="drivenhourcostcity" class="form-control" placeholder="drivenhourcostcity" autofocus value="<?php echo $row['drivenhourcostcity']; ?>" readonly></input><br><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Valor Hora Manejada en Carretera</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="drivenhourcostrural" class="form-control" placeholder="drivenhourcostrural" autofocus value="<?php echo $row['drivenhourcostrural']; ?>" readonly></input><br><br>
                    <label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Ciudad</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="unforeseencity" class="form-control" placeholder="unforeseencity" autofocus value="<?php echo $row['unforeseencity']; ?>" readonly></input><br><br>
                    <label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Carretera</strong></label><br> 
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="unforeseenrural" class="form-control" placeholder="unforeseenrural" autofocus value="<?php echo $row['unforeseenrural']; ?>" readonly></input><br><br>
                    <label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Horas laborales Diarias</strong></label><br>
					<input type="text" style="color:black; font-size: 150%; text-align: center; width: 500px;" name="hoursbyday" class="form-control" placeholder="hoursbyday" autofocus value="<?php echo $row['hoursbyday']; ?>" readonly></input><br><br>
					<br>
					<input id="loginbutton" style="background-color:red; color:white; font-size: 150%; text-align: center; width: 500px;" name="editvalues" type="submit" value="Editar Valores"><br><br> 
					<center>
					<input type="submit" class="btn btn-success btn-block" style="background-color:green; color:white; font-size: 150%; text-align: center; width: 500px;" name="quote" value="Ir a Cotizar" formaction="quoteservices.php"><br><br>
					<input type="submit" class="btn btn-success btn-block" style="font-size: 150%; text-align: center; width: 500px;" name="cancel" value="Cancelar" formaction="driversQuotationOpsaAndAdminVehicleuser.php">
                    </center>

				</form>
			</div>
</div>			
<?php include ("footer.php")?>

 