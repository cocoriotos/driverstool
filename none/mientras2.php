<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página con Contenedores Verticales</title>
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
    }
    .column {
        margin-bottom: 15px;
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
    <div class="column">
        <h2>Primer Contenedor</h2>
        <label id="form_title" style="color:red; font-size: 150%;" ><strong>Módulo de Cotización de Rutas/Domicilios</strong></label><br><br>	
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Vehículo</strong></label>
					<input id="texto" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
					
		<!-- Contenido del primer contenedor -->
    </div>
</div>

<div class="container">
    <div class="column">
        <h2>Segundo Contenedor</h2>
        <!-- Contenido del segundo contenedor -->
    </div>
</div>

<!-- Agrega más contenedores según sea necesario -->

</body>
</html>
