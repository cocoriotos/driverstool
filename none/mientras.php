<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulario con 3 Columnas</title>

<?php 
include "header.php";
include "db_connection1.php"; 
?>

<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .row {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }
    .column {
        flex: 1;
        margin-right: 10px;
    }
    .column:last-child {
        margin-right: 0;
    }
    input[type="text"] {
        width: 100%;
        padding: 8px;
        margin-top: 4px;
        margin-bottom: 10px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>
<div class="container">
    <form action="quotation.php" method="POST">
        <label id="form_title" style="color:red; font-size: 150%;" ><strong>Módulo de Cotización de Rutas/Domicilios</strong></label><br><br>	
		<div class="row">
            <div class="column">    
				<label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Vehículo</strong></label>
				<input id="text" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input>
				</div>
            <div class="column">
                <label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
				<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
            </div>
            <div class="column">    
				<label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Vehículo</strong></label>
				<input id="text" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input>
				</div>
            <div class="column">
                <label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
				<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
            </div>
			<div class="column">    
				<label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Vehículo</strong></label>
				<input id="text" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input>
				</div>
            <div class="column">
                <label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
				<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
            </div>
			<div class="column">    
				<label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Vehículo</strong></label>
				<input id="text" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input>
				</div>
            <div class="column">
                <label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
				<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
            </div>
			<div class="column">    
				<label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Vehículo</strong></label>
				<input id="text" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input>
				</div>
            <div class="column">
                <label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
				<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
            </div>
        </div>
		<div class="row">
		<div class="column">    
				<label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Vehículo</strong></label>
				<input id="text" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input>
				</div>
            <div class="column">
                <label id="username1" style="color:black; font-size: 100%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
				<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
            </div>
        <input type="submit" value="Enviar">
		</div>
    </form>
</div>
</body>
</html>