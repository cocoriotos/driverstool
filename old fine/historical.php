<!--<link rel="stylesheet" href="tab.css"> -->
<?php	   
include "db_connection1.php";
include "header.php";
//$vehicle=$_POST['vehicle']; 

//$query2="insert into drivers_quotations_no_delivered (vehicle, salarymonthly, salarydaily, salaryhourly, gasolinefull, gasolinekms, gasolinecostperkm, oilfull, oilrenewkms, oilbykm, soatyearly, soatdaily, soathourly, technomechanicalyearly, technomechanicaldaily, technomechanicalhour, quarterlymaintenance, dailymaintenance, hourmaintenance, anuallytaxes, taxesdaily, taxeshourly, tollcost, tollsquantity, drivenhourscity, drivenhoursrural, drivenhourcostcity, drivenhourcostrural, totalcostdrivencity, totalcostdrivenrural, tripcity, triprural, roundtripcity, roundtriprural, minimalprofit, deliverydistancecity, deliverydistancerural, gasolinecity, gasolinerural, oilcity, oilrural, soatcity, soatrural, technocity, technorural, maintenancecity, maintenancerural, taxcity, taxrural, tollrural, operationalexpensescity, operationalexpensesrural, totaltriparounddeliverycity, totaltriparounddeliveryrural, deliveryprofitcity, deliveryprofitrural, subtotaldeliverycity, subtotaldeliveryrural, unforeseencity, unforeseenrural, totaldeliverycity, totaldeliveryrural, totaloperationalexpensescity, totaloperationalexpensesrural, salarymonthlydays, quarterlydays, yearlydays, hoursbyday) select vehicle, salarymonthly, salarydaily, salaryhourly, gasolinefull, gasolinekms, gasolinecostperkm, oilfull, oilrenewkms, oilbykm, soatyearly, soatdaily, soathourly, technomechanicalyearly, technomechanicaldaily, technomechanicalhour, quarterlymaintenance, dailymaintenance, hourmaintenance, anuallytaxes, taxesdaily, taxeshourly, tollcost, tollsquantity, drivenhourscity, drivenhoursrural, drivenhourcostcity, drivenhourcostrural, totalcostdrivencity, totalcostdrivenrural, tripcity, triprural, roundtripcity, roundtriprural, minimalprofit, deliverydistancecity, deliverydistancerural, gasolinecity, gasolinerural, oilcity, oilrural, soatcity, soatrural, technocity, technorural, maintenancecity, maintenancerural, taxcity, taxrural, tollrural, operationalexpensescity, operationalexpensesrural, totaltriparounddeliverycity, totaltriparounddeliveryrural, deliveryprofitcity, deliveryprofitrural, subtotaldeliverycity, subtotaldeliveryrural, unforeseencity, unforeseenrural, totaldeliverycity, totaldeliveryrural, totaloperationalexpensescity, totaloperationalexpensesrural, salarymonthlydays, quarterlydays, yearlydays, hoursbyday  from drivers_quotations where vehicle =  '$vehicle'";
//$resultado2= $conn ->query($query2);


//$query3="SELECT max(id) AS max_id from drivers_quotations";
//$resultado3= $conn ->query($query3);
//$fila = $resultado3->fetch_assoc();
//$max_id = $fila['max_id'];
//print_r($max_id);
//$query4="UPDATE drivers_quotations SET customername = '$customername', origin = '$origin', destination = '$destination', deliverydistancecity = '$deliverydistancecity', drivenhourscity = '$drivenhourscity',tripcity = '$tripcity', roundtripcity = '$roundtripcity', unforeseencity = '$unforeseencity', deliverydistancerural = '$deliverydistancerural', drivenhoursrural = '$drivenhoursrural', triprural = '$triprural', roundtriprural = '$roundtriprural', unforeseenrural = '$unforeseenrural',tollsquantity = '$tollsquantity' where id = '$max_id' and  vehicle = '$vehicle'";
//$resultado4= $conn ->query($query4);
//$query5="UPDATE drivers_quotations SET salarydaily = salarymonthly / salarymonthlydays, salaryhourly = salarydaily / hoursbyday, gasolinecostperkm = gasolinefull / gasolinekms, oilbykm = oilfull / oilrenewkms, soatdaily = soatyearly / yearlydays, soathourly = soatdaily / hoursbyday, technomechanicaldaily = technomechanicalyearly / yearlydays, technomechanicalhour = technomechanicaldaily / hoursbyday, dailymaintenance = quarterlymaintenance / quarterlydays, hourmaintenance = dailymaintenance / hoursbyday, taxesdaily = anuallytaxes / yearlydays, taxeshourly = taxesdaily / hoursbyday, drivenhourcostcity = salaryhourly, drivenhourcostrural = ((salaryhourly * 103.1)/100) + salaryhourly, totalcostdrivencity = drivenhourcostcity * drivenhourscity, totalcostdrivenrural = drivenhourcostrural * drivenhoursrural, minimalprofit = salaryhourly,  gasolinecity = deliverydistancecity * gasolinecostperkm, gasolinerural = deliverydistancerural * gasolinecostperkm, oilcity = deliverydistancecity * oilbykm, oilrural = deliverydistancerural * oilbykm, soatcity = (tripcity + roundtripcity) * soathourly, soatrural = (triprural + roundtriprural) * soathourly, technocity = (tripcity + roundtripcity) * technomechanicalhour, technorural = (triprural + roundtriprural) * technomechanicalhour, maintenancecity = (tripcity + roundtripcity) * hourmaintenance, maintenancerural = (triprural + roundtriprural) * hourmaintenance, taxcity = (tripcity + roundtripcity) * taxeshourly, taxrural = (triprural + roundtriprural) * taxeshourly, tollrural = tollcost * tollsquantity, operationalexpensescity = gasolinecity + oilcity + soatcity + technocity + maintenancecity + taxcity, operationalexpensesrural = gasolinerural + oilrural + soatrural + technorural + maintenancerural + taxrural, totaltriparounddeliverycity = (tripcity + roundtripcity) * operationalexpensescity, totaltriparounddeliveryrural = (triprural + roundtriprural) * operationalexpensesrural, deliveryprofitcity = drivenhourscity * drivenhourcostcity, deliveryprofitrural =  drivenhoursrural * drivenhourcostrural, subtotaldeliverycity = totaltriparounddeliverycity + deliveryprofitcity, subtotaldeliveryrural = totaltriparounddeliveryrural + deliveryprofitrural +tollrural, totaldeliverycity = subtotaldeliverycity + unforeseencity, totaldeliveryrural = subtotaldeliveryrural + unforeseenrural, totaloperationalexpensescity = totaldeliverycity - deliveryprofitcity, totaloperationalexpensesrural = totaldeliveryrural - deliveryprofitrural where id ='$max_id' and  vehicle = '$vehicle'";
//$resultado5= $conn ->query($query5);

//$query="select * from drivers_quotations where vehicle='$vehicle'";
//$result_tasks = mysqli_query($conn,$query);
//$row=mysqli_fetch_array($result_tasks);
?>	   

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
						<input type="text" name="task" class="form-control" placeholder="Task Title" autofocus></input><br>
					</div>
					<div class="form-group">
						<textarea name="description" rows="5" class="form-control" placeholder="Task Description"></textarea> <br>
					</div>
					<div class="form-group">
						<input type="text" name="project" class="form-control" placeholder="Project Name" ></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="region" class="form-control" placeholder="Region" ></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="subregion" class="form-control" placeholder="Subregion" ></input><br>
					</div>
					<!--<div class="form-group">
						<input type="text" name="username" class="form-control" placeholder="Type your username" ></input><br>
					</div>
					<div class="form-group">
						<input type="text" name="completed" class="form-control" placeholder="Completed=1 Incompleted=0" ></input><br>
					</div> -->
					<input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task"></input>
					<input type="submit" class="btn btn-success btn-block" name="logout" value="Logout" formaction="dailytaskstracker.php"></input>
					<input type="submit" class="btn btn-success btn-block" name="logout" value="Refresh" formaction="dailytaskadminmodule.php"></input>
				</form>
			</div>
		</div>
		
		<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
				   <tr>
							  <th>ID</th>
							  <th>Vehículo</th>
							  <th>Nombre Cliente</th>
							  <th>Sitio Origen</th>
							  <th>Sitio Destino</th>
							  <th>Subtotal Domiciio Ciudad</th>
							  <th>Imprevistos Ciudad</th>
							  <th>Total Domicilio Ciudad</th>
							  <th>Ganancia del Servicio Ciudad</th>
							  <th>Total Gastos Operación Ciudad</th>
							  <th>Subtotal Domiciio Carretera</th>
							  <th>Imprevistos Carretera</th>
							  <th>Total Domicilio Carretera</th>
							  <th>Ganancia del Servicio Carretera</th>
							  <th>Total Gastos Operación Carretera</th>
				   </tr>
			    </thead>
				<tbody>
					<?php 
					    $query = "select * from drivers_quotations";
						$result_tasks = mysqli_query($conn,$query);
						while($row = mysqli_fetch_array($result_tasks)) { ?>
					  <tr>
						        <td><?php echo $row['id'] ?></td>
								<td><?php echo $row['vehicle'] ?></td>
								<td><?php echo $row['customername'] ?></td>
								<td><?php echo $row['origin'] ?></td>
								<td><?php echo $row['destination'] ?></td>
								<td><?php echo $row['subtotaldeliverycity'] ?></td>
								<td><?php echo $row['unforeseencity'] ?></td>
								<td><?php echo $row['totaldeliverycity'] ?></td>
								<td><?php echo $row['deliveryprofitcity'] ?></td>
								<td><?php echo $row['totaloperationalexpensescity'] ?></td>
								<td><?php echo $row['subtotaldeliveryrural'] ?></td>
								<td><?php echo $row['unforeseenrural'] ?></td>
								<td><?php echo $row['totaldeliveryrural'] ?></td>
								<td><?php echo $row['deliveryprofitrural'] ?></td>
								<td><?php echo $row['totaloperationalexpensesrural'] ?></td>
								<td><a href="edit.php?id=<?php echo $row['id']?>"class="btn btn-secondary"><i class="fas fa-marker"></i></a>
									<a href="delete.php?id=<?php echo $row['id']?>"class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
						        </td>
					  </tr>
					<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>	   



<?php //include ("footer.php") ?>