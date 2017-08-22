<?php

	require_once('../connect_db/mysqli_connect.php');

	$query = "SELECT Country, Name, DOB, Email, Occupation, Food_Carbon_Footprint_kgCO2_yearly, Loss_of_Ice_MetricTons_yearly, 
	ShoppingBags_Weekly, Beef_gms_weekly, Chicken_gms_weekly, Milk_ml_weekly, Cheese_gms_weekly, Apples_weekly, Bananas_weekly,
	Potatoes_gms_weekly, Carrots_gms_weekly, Beans_units, Bread_loaves_weekly, Rice_gms_weekly from userdietinfo";

	$response = @mysql_query($dbcon, $query);

	if ($response) {
		
		echo '<table align="left"
		cellspacing="5"	cellpadding="8">

		<tr><td align="left"><b>Country</b></td>
		<tr><td align="left"><b>Name</b></td>
		<tr><td align="left"><b>DOB</b></td>
		<tr><td align="left"><b>Email</b></td>
		<tr><td align="left"><b>Occupation</b></td>
		<tr><td align="left"><b>Food Carbon Footprint(Kg of CO2)</b></td>
		<tr><td align="left"><b>Loss of Ice(Metric Tons/year)</b></td>
		<tr><td align="left"><b>Bags of Shopping(Weekly)</b></td>
		<tr><td align="left"><b>Beef(gms/week)</b></td>
		<tr><td align="left"><b>Chicken(gms/week)</b></td>
		<tr><td align="left"><b>Milk(ml/week)</b></td>
		<tr><td align="left"><b>Cheese(gms/week)</b></td>
		<tr><td align="left"><b>Apples(per week)</b></td>
		<tr><td align="left"><b>Bananas(per week)</b></td>
		<tr><td align="left"><b>Potatoes(gms/week)</b></td>
		<tr><td align="left"><b>Carrots(gms/week)</b></td>
		<tr><td align="left"><b>Beans(units)</b></td>
		<tr><td align="left"><b>Bread(Loaves/week)</b></td>
		<tr><td align="left"><b>Rice(gms/week)</b></td></tr>';



		while ($row = mysqli_fetch_array($response)) {
			
			echo '<tr><td align="left">' .
			$row['Country'] . '</td><td align="left">' .
			$row['Name'] . '</td><td align="left">' .
			$row['DOB'] . '</td><td align="left">' .
			$row['Email'] . '</td><td align="left">' .
			$row['Occupation'] . '</td><td align="left">' .
			$row['Food_Carbon_Footprint_kgCO2_yearly'] . '</td><td align="left">' .
			$row['Loss_of_Ice_MetricTons_yearly'] . '</td><td align="left">' .
			$row['ShoppingBags_Weekly'] . '</td><td align="left">' .
			$row['Beef_gms_weekly'] . '</td><td align="left">' .
			$row['Chicken_gms_weekly'] . '</td><td align="left">' .
			$row['Milk_ml_weekly'] . '</td><td align="left">' .
			$row['Cheese_gms_weekly'] . '</td><td align="left">' .
			$row['Apples_weekly'] . '</td><td align="left">' .
			$row['Bananas_weekly'] . '</td><td align="left">' .
			$row['Potatoes_gms_weekly'] . '</td><td align="left">' .
			$row['Carrots_gms_weekly'] . '</td><td align="left">' .
			$row['Beans_units'] . '</td><td align="left">' .
			$row['Bread_loaves_weekly'] . '</td><td align="left">' .
			$row['Rice_gms_weekly'] . '</td><td align="left">';

			echo "</tr>";
		}

		echo "</table>";
	}

	else {
		echo "Couldn't issue database query";
		echo mysqli_error($dbcon);
	}

	mysqli_close($dbcon);

?>