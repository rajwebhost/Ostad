<!DOCTYPE html>
<html>

<head>
	<title>Simple Calculator</title>
</head>

<body>
	<h1>Simple Calculator</h1>

	<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		$number1 = $_POST["number1"];
		$number2 = $_POST["number2"];
		$operation = $_POST["operation"];
		$result = 0;

		switch ($operation) {
			case "+":
				$result = $number1 + $number2;
				break;
			case "-":
				$result = $number1 - $number2;
				break;
			case "*":
				$result = $number1 * $number2;
				break;
			case "/":
				if ($number2 != 0) {
					$result = $number1 / $number2;
				} else {
					echo "<p>Division by zero is not allowed.</p>";
				}
				break;

		}


	}
	?>

	<form method="POST" action="">
		<label for="number1">Number 1:</label>
		<input type="number" name="number1" id="number1" value="<?php if (!empty($number1))
			echo $number1; ?>" required>
		<br><br>

		<label for="number2">Number 2:</label>
		<input type="number" name="number2" id="number2" value="<?php if (!empty($number2))
			echo $number2; ?>" required>
		<br><br>

		<label for="operation">Select Operation:</label>
		<select name="operation" id="operation">
			<option value="+">Addition (+)</option>
			<option value="-">Subtraction (-)</option>
			<option value="*">Multiplication (*)</option>
			<option value="/">Division (/)</option>
		</select>
		<br><br>

		<input type="submit" value="Calculate">
	</form>

	<?php if (!empty($result))
		echo "<p>The Result is: $result</p>"; ?>

</body>

</html>