<?php 
// defining and loading  data fields
session_start();
include ("db_connection1.php");

$name=$_POST['Name'];
$lastname=$_POST['LastName'];
$email=$_POST['Email'];
$country=$_POST['Country'];
$city=$_POST['City'];
$password=$_POST['password1'];


$query="INSERT INTO drivers_accessrequests(name, lastname, email, country, city, password) VALUES ('$name', '$lastname', '$email', '$country', '$city','$password')";
$result=$conn->query($query);
$query1="INSERT INTO drivers_accesslist(username, email, active, visits, role, country, city, password) VALUES (concat('$name',',','','$lastname'), '$email', 0, 1, user, '$country', '$city','$password')";
$result1=$conn->query($query1);

/*Destination email information*/
//$to ="%email";
//if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $to = "$email, cocoriotos@hotmail.com, adm@solicionespro.com";
//} else {
    // Si $email no es válido, usar solo las otras direcciones de correo electrónico
    
}
////$to= "$email, cocoriotos@hotmail.com, adm@solicionespro.com";
////$to.= "adm@solicionespro.com";
//$to = "cocoriotos@hotmail.com, adm@solicionespro.com";
//$subject= "Urgent Drivers Quotation tool access request";
//$message= "Good day Admin Team:  \n\n";
//$message.= "This user is requesting tool access, please response ASAP \n\n";
//$message.= "Requester name            : $name \n";
//$message.= "Requester Last name       : $lastname \n";
//$message.= "Requester email           : $email \n\n";
//$message.= "Requester County          : $country \n";
//$message.= "Requester City            : $city \n";
//$message.= "Requester Password        : $password \n";
//$message.= "Thank you for your support \n\n";
//$message.= "Email Application sender";
//$header= "From: adm@solicionespro.com" . "\r\n";
//$header.= "X-Mailer: PHP/". phpversion();

///*Sending Email */
//mail($to,$subject,$message,$header);

//if ($mail) {
//echo "<h4> ¡Enviado exitosamente!</h4>";
//}

//$to = "$email";
//$subject = "Requerimiento de acceso";
//$message = "Buen día $lastname, $name :  \n\n";
//$message.= "Su requerimiento ha sido enviado a los administradores de la herramienta  para processar su solicitud, por favor esperar la respuesta vía correo electrónico. Acá la información de su solicitud \n\n";//. to concatenate lines in the same variable
//$message.= "Nombre                           : $name \n";
//$message.= "Apellido                         : $lastname \n";
//$message.= "Email                            : $email \n";
//$message.= "País                             : $country \n";
//$message.= "Ciudad                           : $city \n";
//$message.= "Password                         : $password \n";
//$message.= "Nombre de usuario  espareado     : $lastname, $name \n\n";
//$message.= "Por favor no responder éste correo \n\n";
//$message.= "Gracias por su paciencia \n\n";
//$header = "From: adm@solicionespro.com" . "\r\n";
//$header.= "X-Mailer: PHP/". phpversion();

//$mail = mail($to,$subject,$message,$header);

//if ($result){
//        echo "Your request was sent, please wait for Administrators message with agree or not response";
//} else {
//	echo "Request not send please try again";
//	/*include ("DriversQuotationFinal.php");*/
//}

header("refresh:7;url=DriversQuotationFinal.php");
?>
 
