<!DOCTYPE html>
<html>
<head>
	<title>Add User</title>
</head>
<body>

	<?php
		if(isset($_POST['submit'])){

			$data_missing = $array();

			if (empty($_POST['name'])) {
				$data_missing[] = 'name';
			}

			else {
				$name = trim($_POST['name']);
			}

			if (empty($_POST['selectCountry'])) {
				$data_missing[] = 'selectCountry';
			}

			else {
				$selectCountry = trim($_POST['selectCountry']);
			}

			if (empty($_POST['dob'])) {
				$data_missing[] = 'dob';
			}

			else {
				$dob = trim($_POST['dob']);
			}

			if (empty($_POST['email'])) {
				$data_missing[] = 'email';
			}

			else {
				$email = trim($_POST['email']);
			}

			if (empty($_POST['occupation'])) {
				$data_missing[] = 'occupation';
			}

			else {
				$occupation = trim($_POST['occupation']);
			}

			if (empty($_POST['totalfcf'])) {
				$data_missing[] = 'totalfcf';
			}

			else {
				$totalfcf = trim($_POST['totalfcf']);
			}

			if (empty($_POST['lossofice'])) {
				$data_missing[] = 'lossofice';
			}

			else {
				$lossofice = trim($_POST['lossofice']);
			}

			if (empty($_POST['shopping_bags'])) {
				$data_missing[] = 'shopping_bags';
			}

			else {
				$shopping_bags = trim($_POST['shopping_bags']);
			}

			if (empty($_POST['eat_beef'])) {
				$data_missing[] = 'eat_beef';
			}

			else {
				$eat_beef = trim($_POST['eat_beef']);
			}

			if (empty($_POST['eat_chicken'])) {
				$data_missing[] = 'eat_chicken';
			}

			else {
				$eat_chicken = trim($_POST['eat_chicken']);
			}

			if (empty($_POST['buy_milk'])) {
				$data_missing[] = 'buy_milk';
			}

			else {
				$buy_milk = trim($_POST['buy_milk']);
			}

			if (empty($_POST['buy_cheese'])) {
				$data_missing[] = 'buy_cheese';
			}

			else {
				$buy_cheese = trim($_POST['buy_cheese']);
			}

			if (empty($_POST['eat_apples'])) {
				$data_missing[] = 'eat_apples';
			}

			else {
				$eat_apples = trim($_POST['eat_apples']);
			}

			if (empty($_POST['eat_bananas'])) {
				$data_missing[] = 'eat_bananas';
			}

			else {
				$eat_bananas = trim($_POST['eat_bananas']);
			}

			if (empty($_POST['buy_potatoes'])) {
				$data_missing[] = 'buy_potatoes';
			}

			else {
				$buy_potatoes = trim($_POST['buy_potatoes']);
			}

			if (empty($_POST['buy_carrots'])) {
				$data_missing[] = 'buy_carrots';
			}

			else {
				$buy_carrots = trim($_POST['buy_carrots']);
			}

			if (empty($_POST['eat_beans'])) {
				$data_missing[] = 'eat_beans';
			}

			else {
				$eat_beans = trim($_POST['eat_beans']);
			}

			if (empty($_POST['buy_bread'])) {
				$data_missing[] = 'buy_bread';
			}

			else {
				$buy_bread = trim($_POST['buy_bread']);
			}

			if (empty($_POST['servings_rice'])) {
				$data_missing[] = 'servings_rice';
			}

			else {
				$servings_rice = trim($_POST['servings_rice']);
			}			
			
			
			if (empty($data_missing)) {

				require_once('../connect_db/mysqli_connect.php');

				$query = "INSERT INTO userdietinfo (selectCountry, name, dob, email, occupation, totalfcf, 
				lossofice, shopping_bags, eat_beef, eat_chicken, buy_milk, buy_cheese, eat_apples, eat_bananas,
				buy_potatoes, buy_carrots, eat_beans, buy_bread, servings_rice, date_entered) VALUES 
				(?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, ?,?, ?, ?, NOW())";

				$stmt = mysqli_prepare($dbcon, $query);

				i Integers
				d Doubles
				b Blobs
				s Everything Else

				mysqli_stmt_bind_param($stmt, "ssssssssssssssssssss", $name, $dob, $email, 
									   $occupation, $totalfcf, $lossofice, $shopping_bags
									   $eat_beef, $eat_chicken, $buy_milk, $buy_cheese, 
									   $eat_apples, $eat_bananas, $buy_potatoes, $buy_carrots
									   $eat_beans, $buy_bread, $servings_rice);

				mysqli_stmt_execute($stmt);

				$affected_rows = mysqli_stmt_affected_rows($stmt);

				if ($affected_rows == 1) {
					echo "User Diet details entered";

					mysqli_stmt_close($stmt);
					mysqli_close($dbcon);
				}

				else {
					echo "Error occured<br />";
					echo mysqli_error();
				}

			}

			else {
				echo "You need to enter the following data<br />";
				foreach ($data_missing as $missing) {
					echo "$missing<br />";
				}

			}

		}

	?>

</body>
</html>