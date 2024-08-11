<link rel="stylesheet" href="tab.css">
<?php	   
include "db_connection1.php";
include "sessions.php";
$_SESSION['counter']=$_SESSION['counter']+1;
$counter=$_SESSION['counter'];
$vehicle = $_POST['vehicle'];
$usernamer=$_POST['usernamer1'];



$vehicle=$_POST['vehicle']; 
$customername=$_POST['customername']; 
$origin=$_POST['origin']; 
$destination=$_POST['destination']; 
$deliverydistancecity=$_POST['deliverydistancecity'];
$drivenhourscity=$_POST['drivenhourscity'];
$tripcity = $_POST['tripcity'];
$roundtripcity = $_POST['roundtripcity'];
$unforeseencity = $_POST['unforeseencity'];
$deliverydistancerural=$_POST['deliverydistancerural']; 
$drivenhoursrural=$_POST['drivenhoursrural'];
$triprural = $_POST['triprural'];
$roundtriprural = $_POST['roundtriprural'];
$unforeseenrural = $_POST['unforeseenrural'];
$tollsquantity=$_POST['tollsquantity'];
$description=$_POST['description'];

$query2="insert into drivers_quotations (vehicle, salarymonthly, salarydaily, salaryhourly, gasolinefull, gasolinekms, gasolinecostperkm, oilfull, oilrenewkms, oilbykm, soatyearly, soatdaily, soathourly, technomechanicalyearly, technomechanicaldaily, technomechanicalhour, quarterlymaintenance, dailymaintenance, hourmaintenance, anuallytaxes, taxesdaily, taxeshourly, tollcost, tollsquantity, drivenhourscity, drivenhoursrural, drivenhourcostcity, drivenhourcostrural, totalcostdrivencity, totalcostdrivenrural, tripcity, triprural, roundtripcity, roundtriprural, minimalprofit, deliverydistancecity, deliverydistancerural, gasolinecity, gasolinerural, oilcity, oilrural, soatcity, soatrural, technocity, technorural, maintenancecity, maintenancerural, taxcity, taxrural, tollrural, operationalexpensescity, operationalexpensesrural, totaltriparounddeliverycity, totaltriparounddeliveryrural, deliveryprofitcity, deliveryprofitrural, subtotaldeliverycity, subtotaldeliveryrural, unforeseencity, unforeseenrural, totaldeliverycity, totaldeliveryrural, totaloperationalexpensescity, totaloperationalexpensesrural, salarymonthlydays, quarterlydays, yearlydays, hoursbyday) select vehicle, salarymonthly, salarydaily, salaryhourly, gasolinefull, gasolinekms, gasolinecostperkm, oilfull, oilrenewkms, oilbykm, soatyearly, soatdaily, soathourly, technomechanicalyearly, technomechanicaldaily, technomechanicalhour, quarterlymaintenance, dailymaintenance, hourmaintenance, anuallytaxes, taxesdaily, taxeshourly, tollcost, tollsquantity, drivenhourscity, drivenhoursrural, drivenhourcostcity, drivenhourcostrural, totalcostdrivencity, totalcostdrivenrural, tripcity, triprural, roundtripcity, roundtriprural, minimalprofit, deliverydistancecity, deliverydistancerural, gasolinecity, gasolinerural, oilcity, oilrural, soatcity, soatrural, technocity, technorural, maintenancecity, maintenancerural, taxcity, taxrural, tollrural, operationalexpensescity, operationalexpensesrural, totaltriparounddeliverycity, totaltriparounddeliveryrural, deliveryprofitcity, deliveryprofitrural, subtotaldeliverycity, subtotaldeliveryrural, unforeseencity, unforeseenrural, totaldeliverycity, totaldeliveryrural, totaloperationalexpensescity, totaloperationalexpensesrural, salarymonthlydays, quarterlydays, yearlydays, hoursbyday  from drivers_opsvalues where vehicle =  '$vehicle'";
$resultado2= $conn ->query($query2);
$query3="SELECT max(id) AS max_id from drivers_quotations";
$resultado3= $conn ->query($query3);
$fila = $resultado3->fetch_assoc();
$max_id = $fila['max_id'];
$query4="UPDATE drivers_quotations SET customername = '$customername', origin = '$origin', destination = '$destination', deliverydistancecity = '$deliverydistancecity', drivenhourscity = '$drivenhourscity',tripcity = '$tripcity', roundtripcity = '$roundtripcity', unforeseencity = '$unforeseencity', deliverydistancerural = '$deliverydistancerural', drivenhoursrural = '$drivenhoursrural', triprural = '$triprural', roundtriprural = '$roundtriprural', unforeseenrural = '$unforeseenrural',tollsquantity = '$tollsquantity' where id = '$max_id' and  vehicle = '$vehicle'";
$resultado4= $conn ->query($query4);
$query5="UPDATE drivers_quotations SET salarydaily = salarymonthly / salarymonthlydays, salaryhourly = salarydaily / hoursbyday, gasolinecostperkm = gasolinefull / gasolinekms, oilbykm = oilfull / oilrenewkms, soatdaily = soatyearly / yearlydays, soathourly = soatdaily / hoursbyday, technomechanicaldaily = technomechanicalyearly / yearlydays, technomechanicalhour = technomechanicaldaily / hoursbyday, dailymaintenance = quarterlymaintenance / quarterlydays, hourmaintenance = dailymaintenance / hoursbyday, taxesdaily = anuallytaxes / yearlydays, taxeshourly = taxesdaily / hoursbyday, drivenhourcostcity = salaryhourly, drivenhourcostrural = ((salaryhourly * 103.1)/100) + salaryhourly, totalcostdrivencity = drivenhourcostcity * drivenhourscity, totalcostdrivenrural = drivenhourcostrural * drivenhoursrural, minimalprofit = salaryhourly,  gasolinecity = deliverydistancecity * gasolinecostperkm, gasolinerural = deliverydistancerural * gasolinecostperkm, oilcity = deliverydistancecity * oilbykm, oilrural = deliverydistancerural * oilbykm, soatcity = (tripcity + roundtripcity) * soathourly, soatrural = (triprural + roundtriprural) * soathourly, technocity = (tripcity + roundtripcity) * technomechanicalhour, technorural = (triprural + roundtriprural) * technomechanicalhour, maintenancecity = (tripcity + roundtripcity) * hourmaintenance, maintenancerural = (triprural + roundtriprural) * hourmaintenance, taxcity = (tripcity + roundtripcity) * taxeshourly, taxrural = (triprural + roundtriprural) * taxeshourly, tollrural = tollcost * tollsquantity, operationalexpensescity = gasolinecity + oilcity + soatcity + technocity + maintenancecity + taxcity, operationalexpensesrural = gasolinerural + oilrural + soatrural + technorural + maintenancerural + taxrural, totaltriparounddeliverycity = (tripcity + roundtripcity) * operationalexpensescity, totaltriparounddeliveryrural = (triprural + roundtriprural) * operationalexpensesrural, deliveryprofitcity = drivenhourscity * drivenhourcostcity, deliveryprofitrural =  drivenhoursrural * drivenhourcostrural, subtotaldeliverycity = totaltriparounddeliverycity + deliveryprofitcity, subtotaldeliveryrural = totaltriparounddeliveryrural + deliveryprofitrural +tollrural, totaldeliverycity = subtotaldeliverycity + unforeseencity, totaldeliveryrural = subtotaldeliveryrural + unforeseenrural, totaloperationalexpensescity = totaldeliverycity - deliveryprofitcity, totaloperationalexpensesrural = totaldeliveryrural - deliveryprofitrural, description = '$description', user='$usernamer' where id ='$max_id' and  vehicle = '$vehicle'";
$resultado5= $conn ->query($query5);

$query="select * from drivers_quotations where vehicle='$vehicle' and id ='$max_id'";
$result_tasks = mysqli_query($conn,$query);
$row=mysqli_fetch_array($result_tasks);
?>	   


<!--<script>
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
       } );</script>-->
	   <div class="container p-4">
			<div class="card card-body">
			<center>
			    <br>
                <form action="driversQuotationOpsaAndAdminVehicleuser.php" method="POST"> 				
                    <center><label id="form_title" style="color:red; font-size: 150%;" ><strong>Resumen de Cotizacion del vehículo<?php echo $row['vehicle']; ?></strong></label></center><br><br>	
                    <center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Usuario</strong></label></center><br>
					<center><input type="text" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center;" name="usernamer1" class="form-control" placeholder="usuario" autofocus value="<?php echo $usernamer; ?>" readonly></input></center><br><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Nombre Completo del Cliente</strong> </label></center><br>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" autofocus value="<?php echo $row['customername'];?>" readonly /></center><br> 	
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Sitio Desde dónde arranca el Servicio</strong></label></center><br>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="origin" class="form-control" placeholder="Sitio de Origen del Servicio" autofocus value="<?php echo $row['origin'];?>" readonly /></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Sitio de Destino del Servicio </strong></label></center><br>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="destination" class="form-control" placeholder="Destino del Servicio" autofocus value="<?php echo $row['destination'];?>" readonly /></center><br>
					<center><label id="username1" style="color:blue; font-size: 150%; text-align: center;"><strong>---------------------------------------------------------------------------------------------- </strong></label></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Subtotal Domicilio Ciudad</strong></label></center><br>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="subtotaldeliverycity" class="form-control" placeholder="subtotaldeliverycity" autofocus value="<?php echo '$' . number_format($row['subtotaldeliverycity'], 2, '.', ','); ?>" readonly ></center></input><br>
                    <center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Ciudad</strong></label></center><br>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="unforeseencity" class="form-control" placeholder="unforeseencity" autofocus value="<?php echo '$' . number_format($row['unforeseencity'], 2, '.', ','); ?>" readonly > </input></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Total Servicio en Ciudad a Cobrar</strong></label></center><br>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="totaldeliverycity" class="form-control" placeholder="totaldeliverycity" autofocus value="<?php echo '$' . number_format($row['totaldeliverycity'], 2, '.', ','); ?>" readonly > </input></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Ganancia Del Servicio en Ciudad</strong></label></center><br>
					<center><input type="text" style="background-color: green; color: white; font-size: 180%; text-align: center;" name="deliveryprofitcity" class="form-control" placeholder="deliveryprofitcity" autofocus value="<?php echo '$' . number_format($row['deliveryprofitcity'], 2, '.', ','); ?>" readonly > </input></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Total Gastos de Operación en Ciudad</strong></label></center><br> 
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="totaloperationalexpensescity" class="form-control" placeholder="totaloperationalexpensescity" autofocus value="<?php echo '$' . number_format($row['totaloperationalexpensescity'], 2, '.', ','); ?>" readonly ></input></center><br>
					<center><label id="username1" style="color:blue; font-size: 150%; text-align: center;"><strong>---------------------------------------------------------------------------------------------- </strong></label></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Subtotal Domicilio Carretera</strong></label></center><br>
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="subtotaldeliveryrural" class="form-control" placeholder="subtotaldeliveryrural" autofocus value="<?php echo '$' . number_format($row['subtotaldeliveryrural'], 2, '.', ','); ?>" readonly ></input></center><br>
                    <center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Imprevistos en Carretera</strong></label></center><br> 
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="unforeseenrural" class="form-control" placeholder="unforeseenrural" autofocus value="<?php echo '$' . number_format($row['unforeseenrural'], 2, '.', ','); ?>" readonly > </input></center><br>		
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Total Servicio Rural a Cobrar</strong></label></center><br> 
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="totaldeliveryrural" class="form-control" placeholder="totaldeliveryrural" autofocus value="<?php echo '$' . number_format($row['totaldeliveryrural'], 2, '.', ','); ?>" readonly > </input></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Ganancia Del Servicio Rural</strong></label></center><br> 
					<center><input type="text" style="background-color: green; color: white; font-size: 180%; text-align: center;" name="deliveryprofitrural" class="form-control" placeholder="deliveryprofitrural" autofocus value="<?php echo '$' . number_format($row['deliveryprofitrural'], 2, '.', ','); ?>" readonly ></input></center><br>
					<center><label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Total Gastos de Operación Rural</strong></label></center></center><br> 
					<center><input type="text" style="color:black; font-size: 150%; text-align: center;" name="totaloperationalexpensesrural" class="form-control" placeholder="totaloperationalexpensesrural" autofocus value="<?php echo '$' . number_format($row['totaloperationalexpensesrural'], 2, '.', ','); ?>" readonly ></input></center><br>
                <center><input id="loginbutton" style="font-size: 150%; text-align: center;" type="submit" value="Siguiente Cotización"></input></center><br>
				</form>		
			</center>	   
            </div>
</div>			

	   
	   
	   



<?php 



//if ($resultado && $resultado1 && $resultado2){
//echo 	"Valores Operacionales Actualizados";
//header("refresh:7; url=driversQuotationOpsaAndAdminVehicle.php");
//   }
 // else{
 //     echo 	"Valores no se pudieron actualizar, inténtelo nuevamente";
 //header("refresh:7; url=driversQuotationOpsaAndAdminVehicle.php");
 //    }
 
 

//$save = $_POST['save'];
//echo ($save);
//print_r($save);
//print_r($max_id);
//print_r($vehicle);

//if ($save == 'Yes')
//   {
//   
 //echo 	"Cotizacion Guardada";
    //header("refresh:7; url=driversQuotationOpsaAndAdmin.php"); 
 //} else //{
  //$query="DELETE * from quotations where vehicle = '$vehicle' and id ='$max_id';"
  //$resultado = $conn ->query($query);
  //$query="ALTER TABLE quotations auto_increment = '$max_id'";
  //$resultado = $conn ->query($query);
  //echo 	"Cotizacion Borrada";
  //header("refresh:7; url=driversQuotationOpsaAndAdmin.php");
  //   }
?>