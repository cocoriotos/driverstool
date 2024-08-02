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
					<form action="managementops.php" method="POST">
						<div class="form-group">
							<br>
							<center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>Selecciona El modulo que quieres Revisar o Modificar</strong></label></center><br>
						    <center><input style="font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="logout" value="Administracion de App" /></center>
					</form>
					<form action="DriversQuotationFinal.php">
                         <center><input style="font-size: 150%; text-align: center;" type="submit" class="btn btn-success btn-block" name="logout" value="Logout" /></center>
                    </form>					
			</div>
		</div>
</div>		
			

<?php include ("footer.php")?>
 