<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="http://localhost/WebsiteVersion2/images/earth-icon.png">
  	<title>
  		FCF Result - FCFT
  	</title>
	<meta content="noindex, nofollow" name="robots">
	
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
	<link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">

	<!--Following 3 lines are put to enable datepicker -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

	<!-- Including CSS File Here -->
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="styleForm.css" rel="stylesheet" type="text/css">

	<!-- Including JS File Here -->
	<script src="multi_step_form.js" type="text/javascript"></script>
</head>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<div class="header">
      <div class="container">
        <a href="http://localhost/WebsiteVersion2/home.html" class="logo-icon">
          <img src="http://localhost/WebsiteVersion2/images/earth-icon.png">
          <b>food carbon footprint tracker</b>
        </a>

        <ul class="menu">
          <li><a href="http://localhost/WebsiteVersion1/home.html">Home</a></li>
          <li><a href="http://localhost/WebsiteVersion1/multi_step_form.html">Calculate Your Carbon Footprint</a></li>
          <li><a href="https://www.bloomberg.com/graphics/2015-whats-warming-the-world/">Culprit of Global Warming</a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle">More <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/WebsiteVersion1/contributors.html">Contributors</a></li>
              <li><a href="http://localhost/WebsiteVersion1/aboutUs.html">About us</a></li>
              <li><a href="#">Sources</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>

<!--<div class="content">-->
<!-- Multistep Form -->
<div class="main">
<form action="results.php" method="POST">


<!-- Progressbar -->
<ul id="progressbar">
<li id="active0">&nbsp;&nbsp;&nbsp;&nbsp;About You&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li id="active1">&nbsp;&nbsp;&nbsp;&nbsp;Shopping and Storage&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li id="active2">&nbsp;&nbsp;&nbsp;&nbsp;Meat&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li id="active3">&nbsp;&nbsp;&nbsp;&nbsp;Dairy&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li id="active4">&nbsp;&nbsp;&nbsp;&nbsp;Fruits&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li id="active5">&nbsp;&nbsp;&nbsp;&nbsp;Vegetables&nbsp;&nbsp;&nbsp;&nbsp;</li>
<li id="active6">&nbsp;&nbsp;&nbsp;&nbsp;Bread and Rice&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul>



<!-- Fieldsets -->

<fieldset id="zeroth">	

	<h2 class="title">We are done. Thank you very much for your patience!</h2>
	<p class="subtitle"><em>Results</em></p><br><br>


	<?php
	
	
	//Retrieve data from 0th Fieldset
	$name = $_POST["name"];
	$email = $_POST["email"];
	$dob = $_POST["dob"];
	$country = $_POST["selectCountry"];

	/*
	echo $name . "<br>";
	echo $email . "<br>";
	echo $dob . "<br>";
	echo $country . "<br>";
	*/
	
	//echo "<br><br>";
	//Retrieve data from 1st Fieldset
	$shopping_bags = $_POST["shopping_bags"];
	$frozen = $_POST["frozen"];
	$refrigerated = $_POST["refrigerated"];
	$supermarket = $_POST["supermarket"];
	$occupation = $_POST["occupation"];
	$important = $_POST["important"];
	$predict_fcf_value = $_POST["predict_fcf_value"];
	$predict_fcf_relation = $_POST["predict_fcf_relation"];

	/*
	echo $shopping_bags . "<br>";
	echo $frozen . "<br>";
	echo $refrigerated . "<br>";
	echo $supermarket . "<br>";
	echo $occupation . "<br>";
	echo $important . "<br>";
	echo $predict_fcf_value . "<br>";
	echo $predict_fcf_relation . "<br>";
	*/
	
	//echo "<br><br>";
	//Retrieve data from 2nd Fieldset
	$eat_beef = $_POST["eat_beef"];
	$beef_organic = $_POST["beef_organic"];
	$frozen_beef = $_POST["frozen_beef"];
	$beef_bag = $_POST["beef_bag"];
	$eat_chicken = $_POST["eat_chicken"];
	$frozen_chicken = $_POST["frozen_chicken"];
	$chicken_bag = $_POST["chicken_bag"];
	
	
	/*
	echo $eat_beef . "<br>";
	echo $beef_organic . "<br>";
	echo $frozen_beef . "<br>";
	echo $beef_bag . "<br>";
	echo $eat_chicken . "<br>";
	echo $frozen_chicken . "<br>";
	echo $chicken_bag . "<br>";
	*/
	
	
	
	
	//echo "<br><br>";
	//Retrieve data from 3rd Fieldset
	$buy_milk = $_POST["buy_milk"];
	$organic_milk = $_POST["organic_milk"];
	$milk_type = $_POST["milk_type"];
	$milk_packaging = $_POST["milk_packaging"];
	$buy_cheese = $_POST["buy_cheese"];
	$organic_cheese = $_POST["organic_cheese"];
	
	
	/*
	echo $buy_milk . "<br>";
	echo $organic_milk . "<br>";
	echo $milk_type . "<br>";
	echo $milk_packaging . "<br>";
	echo $buy_cheese . "<br>";
	echo $organic_cheese . "<br>";
	*/
	
	
	//echo "<br><br>";
	//Retrieve data from 4th Fieldset
	$eat_apples = $_POST["eat_apples"];
	$organic_apples = $_POST["organic_apples"];
	$apples_bag = $_POST["apples_bag"];
	$eat_bananas = $_POST["eat_bananas"];
	$organic_bananas = $_POST["organic_bananas"];
	
	
	/*
	echo $eat_apples . "<br>";
	echo $organic_apples . "<br>";
	echo $apples_bag . "<br>";
	echo $eat_bananas . "<br>";
	echo $organic_bananas . "<br>";	
	*/

	
	
	//echo "<br><br>";
	//Retrieve data from 5th Fieldset
	$buy_potatoes = $_POST["buy_potatoes"];
	$organic_potatoes = $_POST["organic_potatoes"];
	$buy_carrots = $_POST["buy_carrots"];
	$organic_carrots = $_POST["organic_carrots"];
	$eat_beans = $_POST["eat_beans"];
	$organic_beans = $_POST["organic_beans"];
	
	/*
	echo $buy_potatoes . "<br>";
	echo $organic_potatoes . "<br>";
	echo $buy_carrots . "<br>";
	echo $organic_carrots . "<br>";	
	echo $eat_beans . "<br>";
	echo $organic_beans . "<br>";	
	*/

	
	
	///echo "<br><br>";
	//Retrieve data from 6th Fieldset
	$buy_bread = $_POST["buy_bread"];
	$baked_bread = $_POST["baked_bread"];
	$organic_bread = $_POST["organic_bread"];
	$servings_rice = $_POST["servings_rice"];
	$organic_rice = $_POST["organic_rice"];
	
	/*
	echo $buy_bread . "<br>";
	echo $baked_bread . "<br>";
	echo $organic_bread . "<br>";
	echo $servings_rice . "<br>";
	echo $organic_rice . "<br>";
	*/


	//echo "<br><br><br><br>";


	//Calculating the fcf from retrieved data
	$eat_beef_adds = $eat_beef*2.014; 
	$eat_chicken_adds = $eat_chicken*0.732;

	$buy_milk_adds = $buy_milk*0.241136490;
	$buy_cheese_adds = $buy_cheese*1.432;

	if (strcmp($organic_apples, "non_organic") == 0) {
		$eat_apples_adds = $eat_apples*30.8;
	}
	else if (strcmp($organic_apples, "organic") == 0) {
		$eat_apples_adds = $eat_apples*33;
	}
	else $eat_apples_adds = $eat_apples*0;

	$eat_bananas_adds = $eat_bananas*27.3;


	if (strcmp($organic_potatoes, "non_organic") == 0) {
		$buy_potatoes_adds = $buy_potatoes*0.534;
	}
	else if (strcmp($organic_potatoes, "organic") == 0) {
		$buy_potatoes_adds = $buy_potatoes*0.57;
	}
	else $buy_potatoes_adds = $buy_potatoes*0;



	if (strcmp($organic_carrots, "non_organic") == 0) {
		$buy_carrots_adds = $buy_carrots*0.668;
	}
	else if (strcmp($organic_carrots, "organic") == 0) {
		$buy_carrots_adds = $buy_carrots*0.73;
	}
	else $buy_carrots_adds = $buy_carrots*0;


	$eat_beans_adds = $eat_beans*141.8;

	$buy_bread_adds = $buy_bread*117.9;
	$servings_rice_adds = $servings_rice*0.582;



	//Total fcf
	$totalfcf = $eat_beef_adds + $eat_chicken_adds + $buy_milk_adds + $buy_cheese_adds + $eat_apples_adds + $eat_bananas_adds + $buy_potatoes_adds + $buy_carrots_adds + $eat_beans_adds + $buy_bread_adds + $servings_rice_adds;

	?>	

	<div style="color: #228B22; font-weight: bold;">
		<?php 
			echo "Dear " . "<em>" . $name . "</em>" . 	", your personal carbon emission from food is " . "<span style='font-size:2em; color:#000000; padding:16px;'>" . round($totalfcf, 2) . "</span>" . " kg per year." . "<br><br>";
		 ?>
	</div>



	<!--Ice calculations-->
	
	<?php

	$enthalpy_formation = 393.5;	// KJ per mol
	$gms_in_mol_ofCO2 = 44;			// grams
	$quantity_heat = $totalfcf*($enthalpy_formation/$gms_in_mol_ofCO2); // KJ
	$latent_heat = 0.33355;			//KJ per gram

	//$mass = $quantity_heat/$latent_heat; //Yields the same value as the $mass_of_ice_melted
	$mass_of_ice_melted = (1000*$totalfcf)/37.30; //Kg
	$mass_of_ice_melted_in_metricTons = $mass_of_ice_melted/1000; //Metric tons
	$perspective_ice_melted = 0.003*$totalfcf; //meter squared

	?>

	<div style='font-size:1.2em; color: #00868B !important; font-weight: bold;'>
		<?php
			
			echo "Each year, your average carbon emissions leads to the loss of about" . "<span style='font-size:2em; color:#000000; padding:16px;'>" . round($mass_of_ice_melted_in_metricTons, 2) . "</span>" . " metric tonnes of ice." . "<br><br>";

			echo "To put things in perspective, it is about" . "<span style='font-size:2em; color:#000000; padding:16px;'>" . round($perspective_ice_melted, 2) . "</span>" . " square metres of Arctic sea ice.";
			echo "<br><br><br>";
		?>
	</div>




	<div style="font-size: 1.5em;">
		<?php
			echo "Your FCF is broken down as follows: " . "<br>";
		?>
	</div>

	

	<div>
		<?php
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from beef: " . "<span style='font-size:1.5em; color:#009900;'>" . $eat_beef_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from chicken: " . "<span style='font-size:1.5em; color:#009900;'>" . $eat_chicken_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from milk: " . "<span style='font-size:1.5em; color:#009900;'>" . $buy_milk_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from cheese: " . "<span style='font-size:1.5em; color:#009900;'>" . $buy_cheese_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from apples: " . "<span style='font-size:1.5em; color:#009900;'>" . $eat_apples_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from bananas: " . "<span style='font-size:1.5em; color:#009900;'>" . $eat_bananas_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from potatoes: " . "<span style='font-size:1.5em; color:#009900;'>" . $buy_potatoes_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from carrots: " . "<span style='font-size:1.5em; color:#009900;'>" . $buy_carrots_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from beans: " . "<span style='font-size:1.5em; color:#009900;'>" . $eat_beans_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from bread: " . "<span style='font-size:1.5em; color:#009900;'>" . $buy_bread_adds . "</span>" . " kg per year." . "<br>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;" . "Carbon from rice: " . "<span style='font-size:1.5em; color:#009900;'>" . $servings_rice_adds . "</span>" . " kg per year." . "<br>";
		?>
	</div>
	
	
	<br><br><br>


	<div>
			<p style="font-size: 1em; color: #808080; font-weight: bold">
				<em>Please take a look at the following suggestions to help reduce your carbon footprint-</em>
			</p>

			<p style="font-size: 1em; color: #808080; text-align: left">
				Imported food results in a much larger carbon footprint, check where your food comes from and try and buy from as local as possible.
			</p>

			<p style="font-size: 1em; color: #808080; text-align: left">
				Eating a lot of meat, especially beef, results in a higher carbon footprint than eating non meat products. To reduce you carbon footprint, try to cut down on your meat consumption, or switch to a meat with a smaller footprint, like chicken.
			</p>

			<p style="font-size: 1em; color: #808080; text-align: left">
				Chilled or frozen food require much more energy for storage (and hence a higher carbon footprint). Frozen foods also tend to be stored for longer and so will have accumulated a higher carbon footprint by the time they are consumed. If you are concerned about freshness, try buying local food from farmers markets!
			</p>

			<p style="font-size: 1em; color: #808080; text-align: left">
				Although not included in the food carbon footprint calculator, carbon may be emitted during transport to and from the supermarket. Try walking or cycling, home delivery has also been shown to result in lower emissions.
			</p>

			<p style="font-size: 1em; color: #808080; text-align: left">
				Organic food tends to have a lower carbon footprint, although this varies between individual foods, the biggest reductions are on milk, cheese and potatoes.
			</p>
	</div>



	<!--Database-->
	<?php
	/*
	$servername = "localhost";
	$username = "deepank";
	$password = "deepank@sql";
	$dbname = "fcft";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

	// Check connection
	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successfully";
	
	// Change database to "test"
	mysqli_select_db($conn, $dbname);

	// sql to create table
	$sql = "CREATE TABLE table1 (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50),
	reg_date TIMESTAMP
	)";

	if (mysqli_query($conn, $sql)) {
	    echo "Table MyGuests created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($conn);
	}

	mysqli_close($conn);
	*/

	require_once('getuserinfo.php');

	?>




	<div align="center"><input class = "all_btns" id="next_btn0" onclick="http://localhost/WebsiteVersion2/home.html" type="button" value="Back to Home"></<div >
	
	</div>


</fieldset>


</div>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="app.js"></script>

</body>
</html>