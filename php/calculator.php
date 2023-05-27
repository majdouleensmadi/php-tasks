<!DOCTYPE html>
<html>
<head>
	<title>PHP Calculator</title>
</head>
<body>
	<h2>PHP Calculator</h2>
	<form method="post">
		<input type="number" name="num1" required>
		<select name="operator" required>
			<option value="+">+</option>
			<option value="-">-</option>
			<option value="*">*</option>
			<option value="/">/</option>
		</select>
		<input type="number" name="num2" required>
		<input type="submit" value="Calculate">
	</form>
	<?php
	if(isset($_POST['operator'])) {
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$operator = $_POST['operator'];
		switch($operator) {
			case "+":
				$result = $num1 + $num2;
				break;
			case "-":
				$result = $num1 - $num2;
				break;
			case "*":
				$result = $num1 * $num2;
				break;
			case "/":
				if($num2 == 0) {
					echo "<p style='color:red'>Error: Division by zero</p>";
				} else {
					$result = $num1 / $num2;
				}
				break;
			default:
				echo "<p style='color:red'>Error: Invalid operator</p>";
		}
		echo "<h3>Result: $result</h3>";
	}
	?>
</body>
</html>
