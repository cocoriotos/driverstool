<select name="vehicle" id="vehicleSelect" required>
    <?php 
        $SQLSELECT = "SELECT * FROM vehicle ORDER BY id ASC"; 
        $result_set = mysqli_query($conn, $SQLSELECT); 
        while ($rows = $result_set->fetch_assoc()) { 
            $vehicle = $rows['vehicle']; 
            echo "<option value='$vehicle'>$vehicle</option>"; 
        }
    ?>
</select>

<?php
    // Obtener el salario mensual para el vehículo seleccionado
    $selectedVehicle = $_POST['vehicle']; // Asegúrate de que el formulario esté enviado mediante POST
    $SQLSELECT1 = "SELECT SalaryMonthly FROM valuesbenelli WHERE vehicle='$selectedVehicle'"; 
    $result_set1 = mysqli_query($conn, $SQLSELECT1);

    if ($row = mysqli_fetch_assoc($result_set1)) {
        $SalaryMonthly = $row['SalaryMonthly']; 
    } else {
        $SalaryMonthly = "No se encontró información del salario mensual para este vehículo.";
    }
?>

<label id="username1" name="vehicle" style="color:black;"><strong>Vehículo Seleccionado</strong></label>
<input type="text" name="vehicle_list" id="vehicleList" class="form-control" value="<?php echo $selectedVehicle; ?>" readonly><br>

<label id="username1" name="" style="color:black;"><strong>Salario Mensual</strong></label>
<input type="text" id="SalaryMonthly"  name="SalaryMonthly" class="form-control" value="<?php echo $SalaryMonthly; ?>" placeholder="Salario Mensual" autofocus readonly><br>
