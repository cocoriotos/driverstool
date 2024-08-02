<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Página con Múltiples Contenedores</title>
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        margin-bottom: 20px;
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
	header {
        background-color: #333; /* Color de fondo del encabezado */
        color: #fff; /* Color del texto */
        padding: 20px 0; /* Espaciado interno superior e inferior */
        text-align: center; /* Alinear texto al centro */
    }
    .rectangle {
        width: 100%; /* Ancho del rectángulo al 100% del contenedor */
        height: 100px; /* Altura del rectángulo */
        background-color: #555; /* Color de fondo del rectángulo */
        display: flex; /* Utilizar flexbox para centrar verticalmente */
        justify-content: center; /* Centrar horizontalmente */
        align-items: center; /* Centrar verticalmente */
</style>
</head>
<header>
    <div class="rectangle">
        <h1>Texto centrado en el rectángulo del encabezado</h1>
    </div>
</header>
<body>
<div class="container">
    <center><h2 style="color:red; font-size: 150%;"><strong>Módulo de Cotización de Rutas/Domicilios</h2></center>
    <div class="row">
        <div class="column">
            <!-- Contenido del primer contenedor -->
            <label id="form_title" style="color:red; font-size: 150%;" ><strong>Módulo de Cotización de Rutas/Domicilios</strong></label><br><br>	
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Vehículo</strong></label>
					<input id="texto" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
					
        </div>
        <div class="column">
          <label id="form_title" style="color:red; font-size: 150%;" ><strong>Módulo de Cotización de Rutas/Domicilios</strong></label><br><br>	
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Vehículo</strong></label>
					<input id="texto" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
					  <!-- Contenido del primer contenedor -->
        </div>
    </div>
</div>

<div class="container">
    <h2>Segundo Contenedor</h2>
    <div class="row">
        <div class="column">
            <label id="form_title" style="color:red; font-size: 150%;" ><strong>Módulo de Cotización de Rutas/Domicilios</strong></label><br><br>	
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Vehículo</strong></label>
					<input id="texto" style="color:black; font-size: 150%; text-align: center;" type="text" name="vehicle" class="form-control" placeholder="vehicle" autofocus value="<?php echo $row['vehicle']; ?>" readonly></input><br>
					<label id="username1" style="color:black; font-size: 150%; text-align: center;"><strong>Nombre Completo del Cliente</strong></label>
					<input type="text" style="color:black; font-size: 150%; text-align: center;" name="customername" class="form-control" placeholder="Nombre del Cliente" required></label>
					<!-- Contenido del segundo contenedor -->
        </div>
        <div class="column">
            <!-- Contenido del segundo contenedor -->
        </div>
    </div>
</div>

<!-- Agrega más contenedores según sea necesario -->

</body>
</html>
