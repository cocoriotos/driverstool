<!--  Developed by julián González Bucheli
bootstrapCDN https://getbootstrap.com and then download then CDN via jsDeliver and copy links -->
<?php include "header.php";
include "db_connection1.php"; 
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

	   <?php

		   echo "<div align=\"center\"><font size=120% color=black>Welcome! Your Profile is: User </div></font>";

		?>
	   
<div class="container p-4">
	<div class="row">
		<div class="col-md-4">
		     <?php  if(isset($_SESSION['message'])) {?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>				
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
			 <?php  session_unset();}?>
		</div>
			 <div class="col-md-8">
				<table class="table table-bordered">
					<thead>
					   <tr>
						  <th>Task</th>
						  <th>Description</th>
						  <th>Project</th>
						  <th>Region</th>
						  <th>Subregion</th>
						  <th>Created At</th>
						  <th>Days Opened</th>
						  <th>Actions</th>
					   </tr>
					</thead>
					<tbody>
						<?php 
						$query = "select * from dailytask where completed = '0' order by id";
						$result_tasks = mysqli_query($conn,$query);
						while($row = mysqli_fetch_array($result_tasks)) { ?>
						  <tr>
							<td><?php echo $row['task'] ?></td>
							<td><?php echo $row['description'] ?></td>
							<td><?php echo $row['project'] ?></td>
							<td><?php echo $row['region'] ?></td>
							<td><?php echo $row['subregion'] ?></td>
							<td><?php echo $row['creationdate'] ?></td>
							<td><?php echo $row['difference'] ?></td>
							<td><a href="edit.php?id=<?php echo $row['id']?>"class="btn btn-secondary"><i class="fas fa-marker"></i></a>
								<a href="delete.php?id=<?php echo $row['id']?>"class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
							</td>
						  </tr>
						
					</tbody>
				</table>
			</div>	
			
			<div class="card card-body">
			      <form action="loadvalues.php" method="POST">
				  <label id= "username1" name="vehicle" color="white"><strong>Select the vehicle</strong></label>
                  <select name= "vehicle" required> <?php $SQLSELECT = "SELECT * FROM vehicle order by id asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $vehicle = $rows['vehicle']; echo "<option value='$vehicle'>$vehicle</option>";} ?></select> <br><br>
				  </form>
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
					<input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Values"></input>
					<input type="submit" class="btn btn-success btn-block" name="logout" value="Logout" formaction="DriversQuotationFinal.php"></input>
					<input type="submit" class="btn btn-success btn-block" name="Refresh" value="Refresh" formaction="driversQuotationOpsaAndAdmin1.php"></input>
				</form>
	       </div>

		
		
		
		
		
	</div>
</div>


<?php include ("footer.php")?>
