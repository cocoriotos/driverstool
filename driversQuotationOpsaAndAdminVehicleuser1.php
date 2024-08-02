<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 

//$username=$_POST['username'];
//print $username;
//print $usernamer;
?>


	   <?php
		   //echo "<div align=\"center\"><font size=80% color=black>Bienvenido $username !</font></div>";
		   //echo "<div align=\"center\"><font size=80% color=black>Welcome $username!</font></div>";
		include "search.php";
		?>
  
<div class="container p-4">
			<div class="card card-body">
					<form action="vehicleops.php" method="POST">
						<div class="form-group">
							<br>
							<center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Selecciona el vehículo a usar en el Servicio</strong></label></center><br>
							<!--<center><select style="color:black; font-size: 150%; text-align: center;" name= "vehicle" required> <?php $SQLSELECT = "SELECT vehicle FROM drivers_vehicle where username = '$username'"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $vehicle = $rows['vehicle']; echo "<option value='$vehicle'>$vehicle</option>";} ?></select></center> <br><br>-->
							<center><select style="color:black; font-size: 150%; text-align: center;" name= "vehicle" required> <?php $SQLSELECT = "SELECT vehicle FROM drivers_vehicle"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $vehicle = $rows['vehicle']; echo "<option value='$vehicle'>$vehicle</option>";} ?></select></center> <br><br>		
					</form>
					<center><input style="background-color: green; color:white; font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="opsvalues" value="Revisar Costos Operacionales"></input></center><br>
					<!--<center><input style="background-color: green; color:white; font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="opsvalues" value="Load Operational Values"></input></center><br>    
					<form action="historical.php">
                         <center><input style="font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="logout" value="Histórico de Servicios" /></center>
                    </form> -->
				
					<form action="DriversQuotationFinal.php">
                         <center><input style="font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="logout" value="Logout" /></center>
                    </form>
			</div>
		</div>
</div>		


<!--<div class="container p-4">
	<div class="row">
		<div class="col-md-8">  
		<?php //include("search.php") ?>
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
				   </tr>
			    </thead>
				<tbody><br><br><br><br>
					<?php 
					//$query1="select * from drivers_quotations where user= '$usernamer' order by id";
					//$result_links = mysqli_query($conn,$query1);
					//while($links = mysqli_fetch_array($result_links)) { ?>
					  <tr>
					    <td align="center"><?php //echo "<a href='edit.php?id={$links['id']}'>{$links['id']}"?></td>
					    <!--<td align=center><?php ////echo $links['id'] ?></td>-->
						<!--<td align=center><?php //echo $links['vehicle'] ?></td>
						<td align=center><?php //echo $links['customername'] ?></td>
						<td align=center><?php //echo $links['origin'] ?></td>
						<td align=center><?php //echo $links['destination'] ?></td>
						<td align=center><?php //echo $links['deliverydistancecity'] ?></td>
						<td align=center><?php //echo $links['totaloperationalexpensescity'] ?></td>
						<td align=center><?php //echo $links['unforeseencity'] ?></td>
						<td align=center><?php //echo $links['deliveryprofitcity'] ?></td>
						<td align=center><?php //echo $links['totaldeliverycity'] ?></td>
						<td align=center><?php //echo $links['deliverydistancerural'] ?></td>
						<td align=center><?php //echo $links['totaloperationalexpensesrural'] ?></td>
						<td align=center><?php //echo $links['unforeseenrural'] ?></td>
						<td align=center><?php //echo $links['deliveryprofitrural'] ?></td>
						<td align=center><?php //echo $links['totaldeliveryrural'] ?></td>
					  </tr>
					<?php //}?>
				</tbody>
			</table><br><br><br><br>
		</div>
	</div>
</div>-->
<?php include ("footer.php")?>
 