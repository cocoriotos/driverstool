<?php 
// defining and loading  data fields
session_start();
include ("db_connection1.php");

$name = $_POST['Name'];
$lastname = $_POST['LastName'];
$email = $_POST['Email'];
$country = $_POST['Country'];
$city = $_POST['City'];
$password = $_POST['password1'];


	$query="INSERT INTO drivers_accessrequests(name, lastname, email, country, city, password) VALUES ('$name', '$lastname', '$email', '$country', '$city','$password')";
$result=$conn->query($query);

/*Destination email information*/
/*$to ="driversmail@localhost";*/
/*$subject = "Urgent Drivers Quotation tool access request";*/
/*$message = "Good day Admin Team:  \n\n";*/
/*$message .= "This user is requesting tool access, please response ASAP \n\n";*//*/. to concatenate lines in the same variable*/
/*$message .= "Complete Solutions SAS team member name            : $name \n";*/
/*$message .= "Complete Solutions SAS team member Last name       : $lastname \n";*/
/*$message .= "Complete Solutions SAS team member Reports To      : $reportsto \n";*/
/*$message .= "Complete Solutions SAS team member corporate email : $email \n\n";*/
/*$message .= "Thank you for your support \n\n";*/
/*$message .= "Email Application sender";*/

/*Sending Email */
/*mail($to, $subject, $message);*/


if ($result){
        echo "Your request was sent, please wait for Administrators message with agree or not response";
} else {
	echo "Request not send please try again";
	/*include ("DriversQuotationFinal.php");*/
}

header("refresh:7;url=DriversQuotationFinal.php");
?>
 
