<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php";
include "sessions.php";
$usernamer=$_SESSION['usernamer'];
?>

<link rel="stylesheet" href="tab.css">
	   <?php

		  echo "<div align=\"center\"><font size=80% color=black>Welcome! '$usernamer' </font></div>";

		?>

  
<div class="container p-4">
			<div class="card card-body">
					<form action="vehicleops.php" method="POST">
						<div class="form-group">
							<br>
							<center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Selecciona el vehículo a usar en el Servicio</strong></label></center><br>
							<center><select style="color:black; font-size: 150%; text-align: center;" name= "vehicle" required> <?php $SQLSELECT = "SELECT vehicle FROM drivers_vehicle where username='$usernamer'"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $vehicle = $rows['vehicle']; echo "<option value='$vehicle'>$vehicle</option>";} ?></select></center> <br>
							<center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Usuario</strong></label></center><br>
							<center><input type="text" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center;" name="usernamer1" class="form-control" placeholder="usuario" autofocus value="<?php echo $usernamer; ?>" readonly></input></center><br><br>
							
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


<div class="container p-4">
	<div class="row">
		<div class="col-md-8">  
		<?php include("search.php") ?>
		<br>
		<center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>------------------------------------------------------------------------------------------------------------ Tabla de Cotizaciones realizadas ------------------------------------------------------------------------------------------------------------</strong></label></center>
		<center><label id="username1" name="vehicle" style="color:red; font-size: 100%; text-align: center; text-decoration: underline; font-style: italic; font-weight: bold; "><strong> Puede consultar los detalles y/o eliminarla si no fue prestado el servicio </strong></label></center>
			<table id="autosearch" class="display" font color="black">
				<thead>
				   <tr>
					  <th>ID</th>
					  <th>Vehiculo</th>
					  <th>Nombre del Cliente</th>
					  <th>Origen</th>
					  <th>Destino</th>
					  <th>Distancia en Ciudad</th>
					  <th>Costos Operacionales Ciudad</th>
					  <th>Imprevistos Ciudad</th>
					  <th>Ganancia del Conductor Ciudad</th>
					  <th>Costo Total Servicio Ciudad</th>
					  <th>Distancia Rural</th>
					  <th>Costos Operacionales Rural</th>
					  <th>Imprevistos Rural</th>
					  <th>Ganancia del Conductor Rural</th>
					  <th>Costo Total Servicio Rural</th>
					  <th>Descripcion del Servicio</th>
				   </tr>
			    </thead>
				<tbody><br>
					<?php 
					$query1="select * from drivers_quotations where user= '$usernamer' order by id";
					$result_links = mysqli_query($conn,$query1);
					while($links = mysqli_fetch_array($result_links)) { ?>
					  <tr>
					    <td align="center"><?php echo "<a href='deletequotation.php?id={$links['id']}'style='color: blue'>{$links['id']}"?></td>
					    <!--<td align=center><?php //echo $links['id'] ?></td>-->
						<td align=center><?php echo $links['vehicle'] ?></td>
						<td align=center><?php echo $links['customername'] ?></td>
						<td align=center><?php echo $links['origin'] ?></td>
						<td align=center><?php echo $links['destination'] ?></td>
						<td align=center><?php echo $links['deliverydistancecity'] ?></td>
						<td align=center style="background-color: #D9EDF7; color: black; font-weight: bold;"><?php echo '$' . number_format($links['totaloperationalexpensescity'], 0, '.', ',') ?></td>
						<td align=center style="background-color: #F2DEDE; color: black; font-weight: bold;"><?php echo '$' . number_format($links['unforeseencity'], 0, '.', ',') ?></td>
						<td align=center style="background-color: #DFF0D8; color: black; font-weight: bold;"><?php echo '$' . number_format($links['deliveryprofitcity'], 0, '.', ',') ?></td>
						<td align=center style="background-color: green; color: white; font-weight: bold;"><?php echo '$' . number_format($links['totaldeliverycity'], 0, '.', ',') ?></td>
						<td align=center><?php echo $links['deliverydistancerural'] ?></td>
						<td align=center style="background-color: #D9EDF7; color: black; font-weight: bold;"><?php echo '$' . number_format($links['totaloperationalexpensesrural'], 0, '.', ',') ?></td>
						<td align=center style="background-color: #F2DEDE; color: black; font-weight: bold;"><?php echo '$' . number_format($links['unforeseenrural'], 0, '.', ',') ?></td>
						<td align=center style="background-color: #DFF0D8; color: black; font-weight: bold;"><?php echo '$' . number_format($links['deliveryprofitrural'], 0, '.', ',') ?></td>
						<td align=center style="background-color: green; color: white; font-weight: bold;"><?php echo '$' . number_format($links['totaldeliveryrural'], 0, '.', ',') ?></td>
					    <td align=center><?php echo $links['description'] ?></td> 
					  </tr>
					<?php }?>
				</tbody>
			</table><br><br><br><br>
		</div>
	</div>
</div>
			

<?php include ("footer.php")?>
 