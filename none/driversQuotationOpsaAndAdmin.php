
<html>

<head><!--Data Menu options to get lists from MySLQ, Developed by julian Gonzalez-->
		<?php 
			include 'db_connection1.php';
           
			
		?>
	<link rel="stylesheet" href="tab.css">
	
	
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
	<meta charset="iso-8559-1">
	<meta name="Description" content="Driver Quotation Tool"> 
	<meta name="keywords" content="Driver Quotation Tool">	  
	<title>Driver Quotation Tool - Julian Gonzalez Bucheli</title><!-- page tab title-->
	
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>	
	
    <script> $(document).ready( function () {
        $('#autosearch').DataTable();
       } );</script>  <!-- to apply the external file style to the tables-->
	
	</head> 
		<?php

		   echo "<div align=\"center\"><font size=120% color=black>Welcome! Your Profile is: User </div></font>";

		?>
		<header>
			<hr id="HR">  <!-- Header title  -->
				<center><h1><font color="#5a697f" style="font-family: arial";>Driver Quotation Tool - Julian Gonzalez Bucheli</font></h1></center>
				  <form id="mainmenu" action="DriversQuotationFinal.php" method="POST" autocomplete="off" style="padding:12px; width:18%;">
		          <input id="maimenubutton" align="right" type="submit" value="Logout" style="font-size:120%; height:5%;"><br><br>
				  <label id= "username1" name="vehicle" color="white"><strong>Select the vehicle</strong></label>
                  <select name= "vehicle" required> <?php $SQLSELECT = "SELECT * FROM drivers_vehicle order by id asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $vehicle = $rows['vehicle']; echo "<option value='$vehicle'>$vehicle</option>";} ?></select> <br><br>
				</form>
			</hr>
		</header>
	<body>
		<?php

		?>

	<ul class="tab">
		  <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminConsole')">| Managing Operation Values |</a></li>
		  <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminActionList')">Managing Cases  |</a></li>
		  
	</ul>
	
	<div id="AdminConsole" class="tabcontent">
	      <ul class="tab">
                <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminAdd')">| Adding  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminList')">Listing |</a></li>
			</ul>
	</div>
	 
	 <div id="AdminAdd" class="tabcontent">
	      <ul class="tab">
                <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddUser')">| Add User  |</a></li>	
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddRegion')">Add Region  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddSubregion')">Add Subregions  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddCountry')">Add Country  |</a></li>				
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddCity')">Add City  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddPartner')">Add Partner  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddPAM')">Add PAM |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddPAMDirector')">Add PAM Director |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddLob')">Add LOB  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddProduct')">Add Product |</a></li>
			</ul>
	</div>
	
	 <div id="AdminList" class="tabcontent">
	      <ul class="tab">
                <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListUsers')">| List Users  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListRegions')">List Regions  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListSubregions')">List Subregions  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListCountries')">List Countries  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListCities')">List Cities  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListPartners')">List Partners  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListPAMS')">List PAMs  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListPAMSDirector')">List PAMs Director  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListLOBs')">List LOBs  |</a></li>
			    <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'ListAccessRequests')">List Access Requests |</a></li>
			</ul>
	</div>
	
	<div id="AdminActionList" class="tabcontent">
	      <ul class="tab">
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'addingChannelActions')">| Adding  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'Resume')">Cases List |</a></li>
			</ul>
	</div>
	
	<div id="addingChannelActions" class="tabcontent">
	      <ul class="tab">
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AddChannelAction')">| Add Channel Actions  |</a></li>
				
			</ul>
	</div>
	
	
	<!--<div id="ListUsers" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch1').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	 <!-- <table id="autosearch1" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>User Name</th>
								<th>Active</th>
								<th>Visits</th>
								<th>Role</th>
								<th>Region</th>
								<th>SubRegion</th>
								<th>Country</th>
								<th>City</th>
                        </tr> 
                    </thead>
					<tbody>-->
                <?php //$_cont=0;
					//$SQLSELECT = "SELECT * FROM accesslist"; /*read the table registers*/
					//$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    //while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    //{
                    //$_cont=$_cont+1;
					
					?>
						     <!-- <tr>
							 <td align="center" onclick="Display"><?php //echo"<a href='modifyuser.php?username={$row['username']}'>{$row['username']}"//?></td>
                              <!--<td align="center"><?php //echo $row['username'];// ?></td>-->
                             <!-- <td align="center"><?php //echo $row['active'];// ?></td>
                              <td align="center"><?php //echo $row['visits']; ?></td>		
                              <td align="center"><?php //echo $row['role']; ?></td>
							  <td align="center"><?php //echo $row['region']; ?></td>
                              <td align="center"><?php //echo $row['subregion']; ?></td>
                              <td align="center"><?php //echo $row['country']; ?></td>
							  <td align="center"><?php //echo $row['city']; ?></td>
                             </tr>-->
						
                    <?php
									
	                ?> 
					<!--</tbody>
            </table>		
		</div>
	
	
	
	
	 <div id="AddUser" class="tabcontent">
	 <form id="login" action="adduserfinal.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<!--<center>
			    <br>
				<font color=black id="form_title"><strong>Add User Form</strong></font><br><br>	
				<img id="img_login" center SRC="register.gif"></img></br></br> <!-- Login Icon  -->
				<!--<label id= "username1" name="username" color="white"><strong>Username to add</strong></label><br> 
				<input id="username" type="text" name="addusername"  placeholder="lastname, name" required><br> <br> 
                <label id= "username1" color="white"><strong>Company Hire or Partner</strong></label><br> 
                <select name= "hireorpartner" required> <?php $SQLSELECT = "SELECT * FROM channel_partners_trt where active = 1 order by name asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $hireorpartner = $rows['name']; echo "<option value='$hireorpartner'>$hireorpartner</option>";} ?></select> <br><br>		
				<label id= "username1" color="white"><strong>Email</strong></label><br> 
				<input id="username" type="text" name="email"  placeholder="email" required><br> <br> 
				<label id= "username1" color="white"><strong>Tool Role</strong></label><br> 
                <select name= "role" required> <?php $SQLSELECT = "SELECT * FROM role order by role asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $role = $rows['role']; echo "<option value='$role'>$role</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Region</strong></label><br> 
				<select name= "region" required> <?php $SQLSELECT = "SELECT * FROM region order by region asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $region = $rows['region']; echo "<option value='$region'>$region</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Subregion</strong></label><br> 
				<select name= "subregion" required> <?php $SQLSELECT = "SELECT * FROM subregion order by subregion asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $subregion = $rows['subregion']; echo "<option value='$subregion'>$subregion</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Country</strong></label><br> 
				<select name= "country" required> <?php $SQLSELECT = "SELECT * FROM country order by country asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $country = $rows['country']; echo "<option value='$country'>$country</option>";} ?></select> <br><br>
				<label id= "username1" name="addcity" color="white"><strong>City</strong></label><br> 
				<select name= "city" required> <?php $SQLSELECT = "SELECT * FROM city order by city asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $city = $rows['city']; echo "<option value='$city'>$city</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Password</strong></label><br> 
				<input id="username" type="password" name="password"  placeholder="Type New Password" required><br> <br> 
     			<br>
				<input id="loginbutton" name="adduser" type="submit" value="Add User"> 
			</center>
		</form>
	</div>
	
	
	
	<div id="AddRegion" class="tabcontent">
	 <form id="login" action="AddRegion.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<!--<center>
			    <br>
				<font color=black id="form_title"><strong>Add Region Form</strong></font><br><br>	
				<img id="img_login" center SRC="region.png"></img></br></br> <!-- Login Icon  -->
				<!--<font id= "username1" color="white"><strong>Region to add</strong></font><br> 
				<input id="username" type="text" name="AddRegion" required><br> <br>
				<br>
				<input id="loginbutton" type="submit" value="Add Region"> 
			</center>
		</form>
	</div>-->
	
	
	
	
	<div id="Signout" class="tabcontent">
	        <form id="mainmenu" action="TopChannelTrackerFinal.php" method="POST" autocomplete="off" style="padding:18px; width:18%;">
	          <ul class="tab">
		          <input id="maimenubutton" type="submit" value="Logout" style="font-size:108%;">
	          </ul>
            </form>
	</div>
  </body>
 </html>