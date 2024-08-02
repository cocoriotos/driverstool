<link rel="stylesheet" href="tab.css">
<?php	   
include "db_connection1.php";
include "sessions.php";
$_SESSION['counter']=$_SESSION['counter']+1;
$counter=$_SESSION['counter'];
$id=$_POST['id'];

?>	

<?php
           $query = "delete from drivers_quotations where id='$id'";
		   $result_tasks = mysqli_query($conn,$query);
		   //$row = mysqli_fetch_array($result_tasks);
		   
		   echo "<div align=\"center\"><font size=80% color=black>Registro número '$id' Borrado </font></div>";
		   include "driversQuotationOpsaAndAdminVehicleuser.php";
		   ?>

   
	   