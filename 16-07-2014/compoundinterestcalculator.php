
<html>
<head>
	<title>Compound Interest Calculator</title>
</head>
<body>
	<form action = "compoundinterestcalculator.php" method = "GET">
		<table border="1" style="width:300px">
			<tr>
				<td>Pricipal Amount</td>
				<td><input type = 'text' name = 'pricipalAmountText'> <br /></td>
		    </tr>
		    <tr>
				<td>Annual Interest Rate</td>
				<td><input type = 'text' name = 'annualInterestText'> <br /></td>
				<td> % </td>
		    </tr>
		    <tr>
				<td>Compound Interval</td>
				<td>
				<select id="CompoundIntervaltext">
				<option value="1">Monthly</option>
				<option value="2" >Querterly</option>
				<option value="3">Half Yearly</option>
				<option value="4">Yearly</option>
				</td>
				</select>
		    </tr>
		    <tr>
				<td>Time Period</td>
				<td><input type = 'text' name = 'timePeriodText'> <br /></td>
				<td> Year </td>
		    </tr>
		    <tr>
		    	<td> </td>	
				<td><input type = "submit" value = "Calculate" name = 'submitButtion'><br /></td>
		    </tr>
		</table>
	</form>	
	<?php
		require 'compoundinterest.php'; 
		if(isset($_GET['submitButtion']))
		{
			$an_input = new InterestCalculator ();
			$an_input->principal_Amount = $_GET['pricipalAmountText'];
			$an_input->annual_interest_rate = $_GET['annualInterestText'];
			$an_input->time_period = $_GET['timePeriodText'];

			$total_amount = $an_input->get_total_amount(); 

			echo $an_input->principal_Amount. ' '. $an_input->annual_interest_rate. ' '. $an_input->time_period. ' Result'.' '. $total_amount;
		}
	?>

</body>
</html>	
