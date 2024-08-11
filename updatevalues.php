<?php 
include "db_connection1.php";

$vehicle=$_POST["vehicle"];
$salarymonthly=$_POST["salario"];
$gasolinekms=$_POST["gasolinekms"];
$gasolinefull=$_POST["gasolinefull"];
$oilfull=$_POST["oilfull"];
$soatyearly=$_POST["soatyearly"];
$technomechanicalyearly=$_POST["technomechanicalyearly"];
$quarterlymaintenance=$_POST["quarterlymaintenance"];
$anuallytaxes=$_POST["anuallytaxes"];
$tollcost=$_POST["tollcost"];
$drivenhourcostcity=$_POST["drivenhourcostcity"];
$drivenhourcostrural=$_POST["drivenhourcostrural"];
$unforeseencity=$_POST["unforeseencity"];
$unforeseenrural=$_POST["unforeseenrural"];
$hoursbyday=$_POST["hoursbyday"]; 
$usernamer=$_SESSION['usernamer'];
$_SESSION['counter']=$_SESSION['counter']+1;
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}



##$query="UPDATE drivers_opsvalues SET  salarymonthly = '$salarymonthly', gasolinekms ='$gasolinekms', gasolinefull = '$gasolinefull', oilfull = '$oilfull', soatyearly = '$soatyearly', technomechanicalyearly ='$technomechanicalyearly', quarterlymaintenance = '$quarterlymaintenance', anuallytaxes = '$anuallytaxes', tollcost = '$tollcost', drivenhourcostcity = '$drivenhourcostcity', drivenhourcostrural = '$drivenhourcostrural', unforeseencity = '$unforeseencity', unforeseenrural = '$unforeseenrural', hoursbyday = '$hoursbyday'  where vehicle = '$vehicle' and user='$usernamer'";
$query="UPDATE drivers_opsvalues SET  salarymonthly = '$salarymonthly' where vehicle = '$vehicle';
## and user='$usernamer'";
$resultado= $conn ->query($query);

if ($resultado){
  echo 	"Valores Operacionales Actualizados";
  $_SESSION['message']='Valores Actualizados Existosamente';
  $_SESSION['message_type']='Exitoso';
  header("refresh:0; url=driversQuotationOpsaAndAdminVehicleuser.php");
    }
  else{
      echo 	"Valores no se pudieron actualizar, inténtelo nuevamente";
      header("refresh:0; url=driversQuotationOpsaAndAdminVehicleuser.php");
      }
?>