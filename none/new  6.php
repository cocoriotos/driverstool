
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
	<meta name="Description" content="Partner Coverage"> 
	<meta name="keywords" content="Partner Cases">	  
	<title>Partner Tracker Tool - Julian Gonzalez Bucheli</title><!-- page tab title-->
	
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>	
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>	
	
    <script> $(document).ready( function () {
        $('#autosearch').DataTable();
       } );</script>  <!-- to apply the external file style to the tables-->
	
	</head> 
		<?php

		   echo "<div align=\"center\"><font size=120% color=black>Welcome! Your Profile is: Administrator </div></font>";

		?>
		<header>
			<hr id="HR">  <!-- Header title  -->
				<center><h1><font color="#5a697f" style="font-family: arial";>Partner Tracker Tool - Julian Gonzalez Bucheli</font></h1></center>
				  <form id="mainmenu" action="TopChannelTrackerFinal.php" method="POST" autocomplete="off" style="padding:12px; width:18%;">
		          <input id="maimenubutton" align="right" type="submit" value="Logout" style="font-size:120%; height:5%;">
                </form>
			</hr>
		</header>
	<body>
		<?php

		?>

	<ul class="tab">
		  
		  <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminConsole')">| Managing Console Options |</a></li>
		  <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminActionList')">Managing Cases  |</a></li>
		  
	</ul>
	
	<div id="Resume" class="tabcontent">
	  <table id="autosearch" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
                                <th>IDs</th>
								<th>SR Number</th>
								<th>Statement</th>
								<th>Channel Name</th>
								<th>Tier</th>
								<th>Subregion</th>
								<th>Country</th>
								<th>Case Opened Date</th>
								<th>Case Edge</th>						
								<th>PAM POCs</th>
								<th>PAN Director</th>
								<th>LOB</th>
								<th>Product</th>
								<th>Channel POC</th>
								<th>Topic</th>
								<th>Channel Agreement Topic Fixed</th>
								<th>Task Action Taken1</th>
								<th>Task Action Taken2</th>
								<th>Recap Sent</th>
								<th>Reincidence Issue</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM top_channels_tracker"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    /*$_cont=$_cont+1;*/
					
					?>
                        
						     <tr>
							<td align="center" onclick="Display"><?php echo"<a href='emailfinal.php?id={$row['id']}'>{$row['id']}"?></td>
                            <!--<td align="center"><?php echo $row['id']; ?></td> -->
							<td align="center"><?php echo $row['sr_number']; ?></td>
							<td align="center"><?php echo $row['statement']; ?></td>
                            <td align="center"><?php echo $row['channel_name']; ?></td>
                            <td align="center"><?php echo $row['channel_partner_distributor_reseller']; ?></td>
                            <td align="center"><?php echo $row['Subregion']; ?></td>	
							<td align="center"><?php echo $row['Country']; ?></td>
                            <td align="center"><?php echo $row['Case_opened']; ?></td>
							<td align="center"><?php echo $row['Case_Edge']; ?></td>							
							<td align="center"><?php echo $row['pam_poc']; ?></td>	
                            <td align="center"><?php echo $row['pam_director']; ?></td>							
							<td align="center"><?php echo $row['lob']; ?></td>
							<td align="center"><?php echo $row['product']; ?></td>							
                            <td align="center"><?php echo $row['channel_topic_POC']; ?></td>
							<td align="center"><?php echo $row['topic']; ?></td>
							<td align="center"><?php echo $row['channel_agreement_topic_fixed']; ?></td>
							<td align="center"><?php echo $row['tasks_actions_taken1']; ?></td>
							<td align="center"><?php echo $row['tasks_actions_taken2']; ?></td>
							<td align="center"><?php echo $row['recap_sent']; ?></td>
							<td align="center"><?php echo $row['reincidence']; ?></td>
                           </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>
		</div>
	

	
	  <!-- <div id="Admin" class="tabcontent">
	      <ul class="tab">
                <li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminAdd')">Adding  |</a></li>
				<li><a href="javascript:void(0)" class="tablinks" onclick="openList(event, 'AdminList')">Listing  |</a></li>
			</ul>
	</div> -->
	 
	 
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
		
	
	<div id="ListUsers" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch1').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch1" class="display" cellspacing="0" width="100%" border="3">
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
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM accesslist"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
							 <td align="center" onclick="Display"><?php echo"<a href='modifyuser.php?username={$row['username']}'>{$row['username']}"?></td>
                              <!--<td align="center"><?php echo $row['username']; ?></td>-->
                              <td align="center"><?php echo $row['active']; ?></td>
                              <td align="center"><?php echo $row['visits']; ?></td>		
                              <td align="center"><?php echo $row['role']; ?></td>
							  <td align="center"><?php echo $row['region']; ?></td>
                              <td align="center"><?php echo $row['subregion']; ?></td>
                              <td align="center"><?php echo $row['country']; ?></td>
							  <td align="center"><?php echo $row['city']; ?></td>
                             </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
		</div>
	
	<div id="ListAccessRequests" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch2').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch2" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>Id</th>
								<th>Name</th>
								<th>Last Name</th>
								<th>Reports To</th>
								<th>Email</th>
								<th>Region</th>
								<th>Subregion</th>
								<th>Country</th>
								<th>City</th>
								<th>Processed</th>
								<th>Granted</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM accessrequests"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['id']; ?></td>
                              <td align="center"><?php echo $row['name']; ?></td>
                              <td align="center"><?php echo $row['lastname']; ?></td>		
                              <td align="center"><?php echo $row['reportsto']; ?></td>		
							  <td align="center"><?php echo $row['email']; ?></td>
							  <td align="center"><?php echo $row['region']; ?></td>
							  <td align="center"><?php echo $row['subregion']; ?></td>
							  <td align="center"><?php echo $row['country']; ?></td>
							  <td align="center"><?php echo $row['city']; ?></td>
							  <td align="center"><?php echo $row['processed']; ?></td>		
							  <td align="center"><?php echo $row['granted']; ?></td>	
                             </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>	
        </div>
	
	<div id="ListRegions" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch3').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch3" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>Region</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM region"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['region']; ?></td>					
                             </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	<div id="ListSubregions" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch4').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch4" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>Subregion</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM subregion"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['subregion']; ?></td>					
                             </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	<div id="ListCountries" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch5').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch5" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>Country</th>
								<th>Country Abbreviation</th>
								<th>SubRegion</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM country"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['country']; ?></td>
							  <td align="center"><?php echo $row['abrv']; ?></td>
							  <td align="center"><?php echo $row['subregion']; ?></td>						  
                             </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	
	<div id="ListCities" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch6').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch6" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>City</th>
								<th>Country</th>
								<th>Subregion</th>
								<th>Region</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM city"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['city']; ?></td>
							  <td align="center"><?php echo $row['country']; ?></td>
							  <td align="center"><?php echo $row['subregion']; ?></td>
							  <td align="center"><?php echo $row['region']; ?></td>							  
                             </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	
	<div id="ListPartners" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch7').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch7" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>Item</th>
								<th>Name</th>
								<th>Type</th>
								<th>Tier</th>
								<th>Country</th>
								<th>Country Abbrevation</th>
								<th>Region</th>
								<th>Subregion</th>
								<th>Active</th>
								<th>PAM</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM channel_partners_trt"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['item']; ?></td>
							  <td align="center"><?php echo $row['name']; ?></td>
							  <td align="center"><?php echo $row['track']; ?></td>
							  <td align="center"><?php echo $row['tier']; ?></td>
							  <td align="center"><?php echo $row['country']; ?></td>
							  <td align="center"><?php echo $row['country_abv']; ?></td>
							  <td align="center"><?php echo $row['region']; ?></td>
							  <td align="center"><?php echo $row['subregion']; ?></td>
                              <td align="center"><?php echo $row['active']; ?></td>	
							  <td align="center"><?php echo $row['pam']; ?></td>
                             </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	<div id="ListPAMS" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch8').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch8" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>PAM Name</th>
								<th>PAM Director</th>
								<th>Active</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM pam"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['pam']; ?></td>
							  <td align="center"><?php echo $row['reportsto']; ?></td>
							  <td align="center"><?php echo $row['active']; ?></td>
							  </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	<div id="ListPAMSDirector" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch9').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch9" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>PAM Director</th>
								<th>Subregion</th>
								<th>Active</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM pam_director"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['pam_director']; ?></td>
							  <td align="center"><?php echo $row['subregion']; ?></td>
							  <td align="center"><?php echo $row['active']; ?></td>
							  </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	<div id="ListLOBs" class="tabcontent">
	<script> $(document).ready( function () {
        $('#autosearch10').DataTable();
       } );</script> <!-- to apply the external file style to the tables-->
	  <table id="autosearch10" class="display" cellspacing="0" width="100%" border="3">
                <thead>
                        <tr>
								<th>LOB</th>
                        </tr> 
                    </thead>
					<tbody>
                <?php $_cont=0;
					$SQLSELECT = "SELECT * FROM lob"; /*read the table registers*/
					$result_set =  mysqli_query($conn, $SQLSELECT); /*matrix with all registers*/
                    while($row = mysqli_fetch_array($result_set))/*while there is registers in array*/
                    {
                    $_cont=$_cont+1;
					
					?>
						     <tr>
                              <td align="center"><?php echo $row['lob']; ?></td>
							  </tr>
						
                    <?php
					}					
	                ?> 
					</tbody>
            </table>		
	</div>
	
	
	 <div id="AddUser" class="tabcontent">
	 <form id="login" action="adduserfinal.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add User Form</strong></font><br><br>	
				<img id="img_login" center SRC="register.gif"></img></br></br> <!-- Login Icon  -->
				<label id= "username1" name="username" color="white"><strong>Username to add</strong></label><br> 
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
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add Region Form</strong></font><br><br>	
				<img id="img_login" center SRC="region.png"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>Region to add</strong></font><br> 
				<input id="username" type="text" name="AddRegion" required><br> <br>
				<br>
				<input id="loginbutton" type="submit" value="Add Region"> 
			</center>
		</form>
	</div>
	
	<div id="AddSubregion" class="tabcontent">
	 <form id="login" action="AddSubregion.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add Subregion Form</strong></font><br><br>	
				<img id="img_login" center SRC="subregion.png"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>Subregion to add</strong></font><br> 
				<input id="username" type="text" name="AddSubregion" required><br> <br>
				<br>
				<input id="loginbutton" type="submit" value="Add Subregion"> 
			</center>
		</form>
	</div>
	
	
	<div id="AddCountry" class="tabcontent">
	 <form id="login" action="addcountry.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add Country Form</strong></font><br><br>	
				<img id="img_login" center SRC="latammap.jpg"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>Country to add</strong></font><br> 
				<input id="username" type="text" name="AddCountry"  placeholder="Country Name" required><br> <br> 
				<font id= "username1" color="white"><strong>Country Abbreviation</strong></font><br> 
			    <input id="username" type="text" name="Abbreviation"  placeholder="Country Abbreviation. 2 Letters" required><br> <br> 
	            <label id= "username1" name="subregion" color="white"><strong>Subregion</strong></label><br> 
				<select name= "countrysubregion" required> <?php $SQLSELECT = "SELECT * FROM subregion order by subregion asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $countrysubregion = $rows['subregion']; echo "<option value='$countrysubregion'>$countrysubregion</option>";} ?></select> <br><br>
				<br>
				<input id="loginbutton" type="submit" value="Add Country"> 
			</center>
		</form>
	</div>

	
	<div id="AddCity" class="tabcontent">
	 <form id="login" action="addcity.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add City Form</strong></font><br><br>	
				<img id="img_login" center SRC="city.png"></img></br></br><!-- Login Icon  -->
				<font id= "username1" color="white"><strong>City to add</strong></font><br> 
				<input id="username" type="text" name="city"  placeholder="City Name" required><br> <br> 
	            <label id= "username1" name="country" color="white"><strong>Country</strong></label><br> 
				<select name= "country" required> <?php $SQLSELECT = "SELECT * FROM country order by country asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $country = $rows['country']; echo "<option value='$country'>$country</option>";} ?></select> <br><br>
				<label id= "username1" name="subregion" color="white"><strong>Subregion</strong></label><br> 
				<select name= "subregion" required> <?php $SQLSELECT = "SELECT * FROM subregion order by subregion asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $subregion = $rows['subregion']; echo "<option value='$subregion'>$subregion</option>";} ?></select> <br><br>
				<label id= "username1" name="region" color="white"><strong>Region</strong></label><br> 
				<select name= "region" required> <?php $SQLSELECT = "SELECT * FROM region order by region asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $region = $rows['region']; echo "<option value='$region'>$region</option>";} ?></select> <br><br>
				<br>
				<input id="loginbutton" type="submit" value="Add City"> 
			</center>
		</form>
	</div>
	
	
	<div id="AddPartner" class="tabcontent">
	 <form id="login" action="addpartner.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <font color=black id="form_title"><strong>Add Partner Form</strong></font><br><br>	
				<img id="img_login" center SRC="register.gif"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>Partner Name</strong></font><br> 
				<input id="username" type="text" name="partner"  placeholder="Partner Name" required><br> <br> 
	            <label id= "username1" name="partnerkind" color="white"><strong>Partner Kind</strong></label><br> 
				<select name= "partnerkind" required> <?php $SQLSELECT = "SELECT * FROM channel_partner_kind order by channel_partner_kind asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $partnerkind = $rows['channel_partner_kind']; echo "<option value='$partnerkind'>$partnerkind</option>";} ?></select> <br><br>
				<label id= "username1" name="tier" color="white"><strong>Partner Tier</strong></label><br> 
				<select name= "tier" required> <?php $SQLSELECT = "SELECT * FROM channel_tear order by tier asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $tier = $rows['tier']; echo "<option value='$tier'>$tier</option>";} ?></select> <br><br>
				<label id= "username1" name="country" color="white"><strong>Country</strong></label><br> 
				<select name= "country" required> <?php $SQLSELECT = "SELECT * FROM country order by country asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $country = $rows['country']; echo "<option value='$country'>$country</option>";} ?></select> <br><br>
                <label id= "username1" name="abbr" color="white"><strong>Country Abbrevation</strong></label><br> 
				<input id="username" type="text" name="abbr"  placeholder="Country Abbreviation 2 Letters" required><br> <br>
				<label id= "username1" name="region" color="white"><strong>Region</strong></label><br> 
				<select name= "region" required> <?php $SQLSELECT = "SELECT * FROM region order by region asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $region = $rows['region']; echo "<option value='$region'>$region</option>";} ?></select> <br><br>
				<label id= "username1" name="subregion" color="white"><strong>Subregion</strong></label><br> 
				<select name= "subregion" required> <?php $SQLSELECT = "SELECT * FROM subregion order by subregion asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $subregion = $rows['subregion']; echo "<option value='$subregion'>$subregion</option>";} ?></select> <br><br>
				<label id= "username1" name="pam" color="white"><strong>PAM POC</strong></label><br> 
			    <select name= "pam" required> <?php $SQLSELECT = "SELECT * FROM pam order by pam asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $pam = $rows['pam']; echo "<option value='$pam'>$pam</option>";} ?></select> <br><br>	
				<br>
				<input id="loginbutton" type="submit" value="Add Partner"> 
			</center>
		</form>
	</div>
	
	<div id="AddPAM" class="tabcontent">
	 <form id="login" action="addPAM.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add PAM Form</strong></font><br><br>	
				<img id="img_login" center SRC="register.gif"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>PAM Name</strong></font><br> 
				<input id="username" type="text" name="pam"  placeholder="PAM Name" required><br> <br> 
	            <label id= "username1" name="reportsto" color="white"><strong>PAM Director</strong></label><br> 
				<select name= "reportsto" required> <?php $SQLSELECT = "SELECT * FROM pam_director where active = 1 order by pam_director asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $reportsto = $rows['pam_director']; echo "<option value='$reportsto'>$reportsto</option>";} ?></select> <br><br>
				<br>
				<input id="loginbutton" type="submit" value="Add PAM"> 
			</center>
		</form>
	</div>
	
	<div id="AddPAMDirector" class="tabcontent">
	 <form id="login" action="addPAMDirector.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add PAM Director Form</strong></font><br><br>	
				<img id="img_login" center SRC="register.gif"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>PAM Director Name</strong></font><br> 
				<input id="username" type="text" name="pamdirector"  placeholder="PAM Director Name" required><br> <br> 
	            <label id= "username1" name="subregion" color="white"><strong>Subregion</strong></label><br> 
				<select name= "subregion" required> <?php $SQLSELECT = "SELECT * FROM subregion order by subregion asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $subregion = $rows['subregion']; echo "<option value='$subregion'>$subregion</option>";} ?></select> <br><br>
				<br>
				<input id="loginbutton" type="submit" value="Add PAM"> 
			</center>
		</form>
	</div>
	
	<div id="AddLob" class="tabcontent">
	 <form id="login" action="AddLOB.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add LOB Form</strong></font><br><br>	
				<img id="img_login" center SRC="lob.png"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>LOB to add</strong></font><br> 
				<input id="username" type="text" name="lob" placeholder="LOB Name" required><br> <br>
				<br>
				<input id="loginbutton" type="submit" value="Add LOB"> 
			</center>
		</form>
	</div>
	
	<div id="AddProduct" class="tabcontent">
	 <form id="login" action="addProduct.php" method="POST" autocomplete="off"> <!-- Form to login into application with authentication in database and valid username -->
			<center>
			    <br>
				<font color=black id="form_title"><strong>Add Product Form</strong></font><br><br>	
				<img id="img_login" center SRC="product.jpg"></img></br></br> <!-- Login Icon  -->
				<font id= "username1" color="white"><strong>Product Name</strong></font><br> 
				<input id="username" type="text" name="product"  placeholder="Product Name" required><br> <br> 
	            <label id= "username1" name="lob" color="white"><strong>LOB</strong></label><br> 
				<select name= "lob" required> <?php $SQLSELECT = "SELECT * FROM lob order by lob asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $lob = $rows['lob']; echo "<option value='$lob'>$lob</option>";} ?></select> <br><br>
				<br>
				<input id="loginbutton" type="submit" value="Add Product"> 
			</center>
		</form>
	</div>
	
	
	<div id="AddChannelAction" class="tabcontent" >
	 <form id="login" action="addchannelactionfinal.php" method="POST" autocomplete="off"> 
			<center> <br>
			    <font color=black id="form_title"><strong>Add Channel Case Form</strong></font><br><br>	
				<img id="img_addcase" center SRC="accountinformation.gif"></img></br></br> <!-- Login Icon  -->
				<label id= "username1" name="casenumber" color="white"><strong>Case Number</strong></label><br> 
				<input id="username" type="text" name="casenumber"  placeholder="Case Number" required><br>  
				<label id= "username1" name="statement" color="white"><strong>Statement</strong></label><br> 
				<input id="username" type="text" name="statement"  placeholder="Statement" required><br>
				<label id= "username1" name="channelname" color="white"><strong>Channel Name</strong></label><br> 
				<select name= "channelname" required> <?php $SQLSELECT = "SELECT * FROM channel_partners_trt order by name asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $channelname = $rows['name']; echo "<option value='$channelname'>$channelname</option>";} ?></select> <br><br>              
				<label id= "username1" name="partnerkind" color="white"><strong>Partner Kind</strong></label><br> 
				<select name= "partnerkind" required> <?php $SQLSELECT = "SELECT * FROM channel_partner_kind"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $partnerkind = $rows['channel_partner_kind']; echo "<option value='$partnerkind'>$partnerkind</option>";} ?></select> <br><br>			   
                <label id= "username1" color="white"><strong>Region</strong></label><br> 
				<select name= "region" required> <?php $SQLSELECT = "SELECT * FROM region order by region asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $region = $rows['region']; echo "<option value='$region'>$region</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Subregion</strong></label><br> 
				<select name= "subregion" required> <?php $SQLSELECT = "SELECT * FROM subregion order by subregion asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $subregion = $rows['subregion']; echo "<option value='$subregion'>$subregion</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Country</strong></label><br> 
				<select name= "country" required> <?php $SQLSELECT = "SELECT * FROM country order by country asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $country = $rows['country']; echo "<option value='$country'>$country</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>City</strong></label><br> 
				<select name= "city" required> <?php $SQLSELECT = "SELECT * FROM city order by city asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $city = $rows['city']; echo "<option value='$city'>$city</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Case Opened Date</strong></label><br> 
				<input id="date" type="date" name="dateopened" placeholder="YYYY-MM-DD" required><br>
				<label id= "username1" color="white"><strong>Case Closed Date</strong></label><br>  
				<input id="date" type="date" name="dateclosed" placeholder="YYYY-MM-DD"><br>
				<label id= "username1" name="caseedge" color="white"><strong>Case Edge</strong></label><br> 
			    <select name= "caseedge" required> <?php $SQLSELECT = "SELECT * FROM caseedge order by caseedge asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $caseedge = $rows['caseedge']; echo "<option value='$caseedge'>$caseedge</option>";} ?></select> <br><br>	
				<label id= "username1" name="pam" color="white"><strong>PAM POC</strong></label><br> 
			    <select name= "pam" required> <?php $SQLSELECT = "SELECT * FROM pam order by pam asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $pam = $rows['pam']; echo "<option value='$pam'>$pam</option>";} ?></select> <br><br>	
				<label id= "username1" name="pamdirector" color="white"><strong>PAM Director</strong></label><br> 
				<select name= "pamdirector" required> <?php $SQLSELECT = "SELECT * FROM pam_director where active = 1 order by pam_director asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $pamdirector = $rows['pam_director']; echo "<option value='$pamdirector'>$pamdirector</option>";} ?></select> <br><br>	
				<label id= "username1" color="white"><strong>Line Of Business</strong></label><br> 
                <select name= "lob" required> <?php $SQLSELECT = "SELECT * FROM lob order by lob asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $lob = $rows['lob']; echo "<option value='$lob'>$lob</option>";} ?></select> <br><br>		
          		<label id= "username1" color="white"><strong>Product</strong></label><br> 
                <select name= "product" required> <?php $SQLSELECT = "SELECT * FROM product order by product asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $product = $rows['product']; echo "<option value='$product'>$product</option>";} ?></select> <br><br>				
				<label id= "username1" color="white"><strong>Partner Topic POC</strong></label><br>
				<input id="username" type="text" name="partnertopicpoc"  placeholder="Channel POC email" required><br> <br> 
                <label id= "username1" color="white"><strong>Issue</strong></label><br>
				<select name= "issue" required> <?php $SQLSELECT = "SELECT * FROM issue order by issue asc"; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $issue = $rows['issue']; echo "<option value='$issue'>$issue</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Channel Agreement issue was fixed</strong></label><br> 
                <select name= "fixapproved" required> <?php $SQLSELECT = "SELECT * FROM active "; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $fixapproved = $rows['active']; echo "<option value='$fixapproved'>$fixapproved</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Task Actions taken 1</strong></label><br>
				<input id="username2" type="text" name="actions1"  placeholder="Actions taken and results" required><br> <br>
				<label id= "username1" color="white"><strong>Task Actions taken 2</strong></label><br>
				<input id="username2" type="text" name="actions2"  placeholder="Actions taken and results" required><br> <br>
				<label id= "username1" color="white"><strong>Recap Sent</strong></label><br> 
                <select name= "recapsent" required> <?php $SQLSELECT = "SELECT * FROM active "; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $recapsent = $rows['active']; echo "<option value='$recapsent'>$recapsent</option>";} ?></select> <br><br>
				<label id= "username1" color="white"><strong>Reincidence</strong></label><br> 
                <select name= "reincidence" required> <?php $SQLSELECT = "SELECT * FROM active "; $result_set =  mysqli_query($conn, $SQLSELECT); while ($rows = $result_set ->fetch_assoc()) { $reincidence = $rows['active']; echo "<option value='$reincidence'>$reincidence</option>";} ?></select> <br><br>
				<br>
				<input id="loginbutton" type="submit" value="Add Channel Case"> 
			</center>
		</form>
	</div>	
	
	
	
	
	
	
	<div id="Signout" class="tabcontent">
	        <form id="mainmenu" action="TopChannelTrackerFinal.php" method="POST" autocomplete="off" style="padding:18px; width:18%;">
	          <ul class="tab">
		          <input id="maimenubutton" type="submit" value="Logout" style="font-size:108%;">
	          </ul>
            </form>
	</div>
  </body>
 </html>