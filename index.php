<!DOCTYPE html>
<html>
<head>
	<title>Ex1</title>
</head>
<body>
	<form method="post">
		<div>
			<label for="person1">Enter name person1:</label>
			<input type="text" name="person1" id="person1">
		</div>
		<div>
			<label for="birthdate1">Birthday:</label>
			<input type="date" name="birthday1" id="birthday1">
		</div>
		<div>
			<label for="person2">Enter name person2:</label>
			<input type="text" name="person2" id="person2">
		</div>
		<div>
			<label for="birthdate2">Birthday:</label>
			<input type="date" name="birthday2" id="birthday2">
		</div>
		<button type="submit" name="submit">Calculate</button>
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$p1 = $_POST['person1'];
			$b1 = new DateTime($_POST['birthday1']);
			$p2 = $_POST['person2'];
			$b2 = new DateTime($_POST['birthday2']);

			$today = new DateTime('today');

			$age1 = $b1->diff($today)->y;
			$age2 = $b2->diff($today)->y;

			$diff = $b1->diff($b2);
			$days_diff = $diff->format('%a');

			echo "<h2>Kết quả:</h2>";
			echo "<p> $p1 's age is $age1 </p>";
			echo "<p>$p2's age is $age2 </p>";
			echo "<p>Days:  $days_diff </p>";
		}
	?>
</body>
</html>
