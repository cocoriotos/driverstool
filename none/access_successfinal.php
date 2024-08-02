<html>

<?php /*Developed by julián González Bucheli*/
session_start();
//Defining local procedure variables and assigning POST form values into
	$username=$_POST['username'];
	$password=$_POST['password'];
    //print $username;
	//print $password;
    $_SESSION['username']=$username;
	
	if($_POST)
 {
    $db_host="127.0.0.1";
	$db_user="u927778197_adm";
	$db_pass="C0mp13t3501ut10n5*";
	$db_name="u927778197_appsdb";
  //$username=$_POST['username'];
    $conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);/*$conn store the parameter information */
    $query = "USE $db_name"; 
    $resultado= $conn->query($query);
  if(mysqli_connect_errno()) /*if mysql connection is not success then will generate error message*/
			{	
			include ("DriversQuotationFinal.php");
			exit();/*Break php file and next lines*/
			}
  mysqli_select_db($conn,$db_name) or die ("<center>There is not Database available</center>");/*database is not available*/			

  if ($conn==true)
		{

		}

		$insert="update drivers_accesslist SET visits=visits+1 where (username='$username' and password='$password')"; /*username Vistit counter increas in 1*/
        $result=mysqli_query($conn, $insert);
		$query1="select * from drivers_accesslist where username='$username' and active='1' and role='user' and password='$password'"; /*if username is user role*/
		$result1=mysqli_query($conn, $query1);
		$query2="select * from drivers_accesslist where username='$username' and active='1' and role='admin' and password='$password'"; /*if username is admin role*/
		$result2=mysqli_query($conn, $query2);


		
		if(mysqli_num_rows($result1)==true)
			{	
			include("driversQuotationOpsaAndAdminVehicleuser.php");
			exit();	
			}
		else 
		{
			if(mysqli_num_rows($result2)==true)
		    	{	
			     include ("driversQuotationOpsaAndAdminVehicleadm.php");
			     exit();	
			   } else{
			include ("access_not_successfinal.php");
			}
		}
		
 }
 
 /*mysqli_close($conn);*/
?>
	
	
</html>
