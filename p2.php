
<?php

$result_str = $result = '';
if (isset($_POST['unit-submit'])) {
	$units = $_POST['units'];
	if (!empty($units)) {
		$result = calculate_bill($units);
		$result_str = 'Total amount for '.$units.' units'.' = '.'Rs.'.$result;
	}
}

function calculate_bill($units) {
	$unit_cost_first = 9;
	$unit_cost_second = 12;
	$unit_cost_third = 15;

	if($units <= 50) {
		$bill = $units * $unit_cost_first;
	}
	else if($units > 50 && $units <= 100) {
		$bill = $units * $unit_cost_second;
	}
	else{
		$bill = $units * $unit_cost_third;
	}
	return number_format((float)$bill, 2, '.', '');
}

echo "
<html>
<body>
<div id='page-wrap'>
	<h1>Calculate Electricity Bill(PHP)</h1>
	
	<form action ='' method='post' id='quiz-form'>
	<input type='number' name='units' id='units' placeholder='enter no. of Units'/>
	<input type='submit' name='unit-submit' id='unit-submit' value='submit'/>
	</form>
</div>
</body>
</html>
";

echo "<br>".$result_str;


?>
