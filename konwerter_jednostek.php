<!DOCTYPE html>
<html>
<head>
	<title>Konwerter jednostek</title>
</head>
<body>
	<h1>Konwerter jednostek</h1>

	<form method="post">
		<label>Przelicz km/h na m/s:</label>
		<input type="number" name="kmh" required>
		<input type="submit" value="Przelicz">
	</form>

	<?php
    if (isset($_POST['kmh'])) {
			$kmh = $_POST['kmh'];
			$ms = $kmh / 3.6;
			echo "<p>$kmh km/h = $ms m/s</p>";
		}
	?>

	<form method="post">
		<label>Przelicz m/s na km/h:</label>
		<input type="number" name="ms" required>
		<input type="submit" value="Przelicz">
	</form>

	<?php
    if (isset($_POST['ms'])) {
        $ms = $_POST['ms'];
        $kmh = $ms * 3.6;
        echo "<p>$ms m/s = $kmh km/h</p>";
    }
	?>

	<form method="post">
		<label>Przelicz stopnie Fahrenheita na stopnie Celsjusza:</label>
		<input type="number" name="fahrenheit" required>
		<input type="submit" value="Przelicz">
	</form>

	<?php
    if (isset($_POST['fahrenheit'])) {
			$fahrenheit = $_POST['fahrenheit'];
			$celsius = ($fahrenheit - 32) * 5/9;
			echo "<p>$fahrenheit &deg;F = $celsius &deg;C</p>";
		}
	?>

	<form method="post">
		<label>Przelicz stopnie Celsjusza na stopnie Fahrenheita:</label>
		<input type="number" name="celsius" required>
		<input type="submit" value="Przelicz">
	</form>

	<?php
    if (isset($_POST['celsius'])) {
			$celsius = $_POST['celsius'];
			$fahrenheit = ($celsius * 9/5) + 32;
			echo "<p>$celsius &deg;C = $fahrenheit &deg;F</p>";
		}
	?>

</body>
</html>
