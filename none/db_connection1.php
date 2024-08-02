<!--Developed by julian Gonzalez -->
<?php
session_start();
$db_host="127.0.0.1";
$db_user="u927778197_adm";
$db_pass="C0mp13t3501ut10n5*";
$db_name="u927778197_appsdb";
 
$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name) or die ("Unable to connect");
  
  //$query="USE $db_name"; 
  //$resultado=$conn->query($query);
  //echo "$resultado";  
 // $query1="UPDATE opsvalues SET salarydaily = salarymonthly / salarymonthlydays, salaryhourly = salarydaily / hoursbyday, gasolinecostperkm = gasolinefull / gasolinekms, oilbykm = oilfull / oilrenewkms, soatdaily = soatyearly / yearlydays, soathourly = soatdaily / hoursbyday, technomechanicaldaily =  technomechanicalyearly / yearlydays, technomechanicalhour = technomechanicaldaily / hoursbyday, dailymaintenance = quarterlymaintenance / quarterlydays, hourmaintenance = dailymaintenance / hoursbyday,  taxesdaily = anullytaxes / yearlydays, taxeshourly = taxesdaily / hoursbyday, totacostdrivencity = hourcost * hoursholding, totalcostdrivenrural = ruraldrivehourcost * ruralhoursdriven, totaldelivery = subtotaldelivery + othercosts, hourcost = salaryhourly, deliveryprofit = (trip + triparound + hoursholding) * salaryhourly";
 // $resultado1= $conn ->query($query1);
	
 $query1="UPDATE drivers_opsvalues SET salarydaily = salarymonthly / salarymonthlydays, salaryhourly = salarydaily / hoursbyday, gasolinecostperkm = gasolinefull / gasolinekms, oilbykm = oilfull / oilrenewkms, soatdaily = soatyearly / yearlydays, soathourly = soatdaily / hoursbyday, technomechanicaldaily = technomechanicalyearly / yearlydays, technomechanicalhour = technomechanicaldaily / hoursbyday, dailymaintenance = quarterlymaintenance / quarterlydays, hourmaintenance = dailymaintenance / hoursbyday, taxesdaily = anuallytaxes / yearlydays, taxeshourly = taxesdaily / hoursbyday, drivenhourcostcity = salaryhourly, drivenhourcostrural = ((salaryhourly * 103.1)/100) + salaryhourly, totalcostdrivencity = drivenhourcostcity * drivenhourscity, totalcostdrivenrural = drivenhourcostrural * drivenhoursrural, minimalprofit = salaryhourly, gasolinecity = deliverydistancecity * gasolinecostperkm, gasolinerural = deliverydistancerural * gasolinecostperkm, oilcity = deliverydistancecity * oilbykm, oilrural = deliverydistancerural * oilbykm, soatcity = (tripcity + roundtripcity) * soathourly, soatrural = (triprural + roundtriprural) * soathourly, technocity = (tripcity + roundtripcity) * technomechanicalhour, technorural = (triprural + roundtriprural) * technomechanicalhour, maintenancecity = (tripcity + roundtripcity) * hourmaintenance, maintenancerural = (triprural + roundtriprural) * hourmaintenance, taxcity = (tripcity + roundtripcity) * taxeshourly, taxrural = (triprural + roundtriprural) * taxeshourly, tollrural = tollcost * tollsquantity, operationalexpensescity = gasolinecity + oilcity + soatcity + technocity + maintenancecity + taxcity, operationalexpensesrural = gasolinerural + oilrural + soatrural + technorural + maintenancerural + taxrural, totaltriparounddeliverycity = (tripcity + roundtripcity) * operationalexpensescity, totaltriparounddeliveryrural = (triprural + roundtriprural) * operationalexpensesrural, deliveryprofitcity = drivenhourscity * drivenhourcostcity, deliveryprofitrural =  drivenhoursrural * drivenhourcostrural, subtotaldeliverycity = totaltriparounddeliverycity + deliveryprofitcity, subtotaldeliveryrural = totaltriparounddeliveryrural + deliveryprofitrural, totaldeliverycity = subtotaldeliverycity + unforeseencity, totaldeliveryrural = subtotaldeliveryrural + unforeseenrural, totaloperationalexpensescity = totaldeliverycity - deliveryprofitcity, totaloperationalexpensesrural = totaldeliveryrural - deliveryprofitrural";
 $resultado1=$conn->query($query1);	
  
  if(mysqli_connect_errno()) /*if mysql connection is not success then will generate error message*/
			{
			echo "Not Database connection success";
			echo "<br>";
			echo "<br>";
			echo "<br>";
			//exit();/*Break php file and next lines*/
			}
  //mysqli_select_db($conn,$db_name) or die ("There is not Database available");/*database is not available*/			
  /*mysqli_set_charset($conexion,"utf8");/*to display  correct latin america characters */
  if ($conn==true)
			  {
			  echo "<center>Congratulations! You are already connected to Main Database</center>";
			  echo "<br><br>";	
			 
			  }
?>
