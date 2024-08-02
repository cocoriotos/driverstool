<link rel="stylesheet" href="tab.css">
<?php	   
include "db_connection1.php";
include "sessions.php";
$_SESSION['counter']=$_SESSION['counter']+1;
$counter=$_SESSION['counter'];
$id=$_GET['id'];

?>	

<?php
           $query = "select * from drivers_quotations where id='$id'";
		   $result_tasks = mysqli_query($conn,$query);
		   $row = mysqli_fetch_array($result_tasks);
		   ?>

   
	   <div class="container p-4">
			<div class="card card-body">
			<center>
			    <br>
                <form action="borrado.php" method="POST"> 				
                    <center><label id="form_title" style="color:red; font-size: 150%;" ><strong>Resumen de Cotizacion del vehículo <?php echo $row['vehicle']; ?></strong></label></center><br><br>	
                    <center><label id="username1" name="vehicle" style="color:black; font-size: 150%; text-align: center;"><strong>ID del registro a eliminar</strong></label></center><br>
					<center><input type="text" style="background-color:#f2f2f2; color:black; font-size: 150%; text-align: center;" name="id" class="form-control" placeholder="ID" autofocus value="<?php echo $id; ?>" readonly></input></center><br><br>						
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
                    <center><input type="text" class="form-control" style="color:black; font-size: 150%; text-align: center;" name="description" placeholder="Descripción corta del Servicio" value="<?php echo $row['description'];?>" readonly autofocus /></center><br>
					<center><input id="loginbutton" style="font-size: 150%; text-align: center;" type="submit" value="Borrar"></input></center><br>
					<center><input type="submit" style="font-size: 150%; text-align: center;" class="btn btn-success btn-block" name="cancel" value="Cancel" formaction="driversQuotationOpsaAndAdminVehicleuser.php"/></center>
				</form>		
			</center>	   
            </div>
</div>			
