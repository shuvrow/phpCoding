<html>
	<head>
	<b>Simple Interest Calculator</b>
	</head>
		<body>
			<form action="interestCalculator.php" method="GET">
				<i>Principle Amount </i><input type="text" name="principleAmount" ><br/>
				<i>Annual Interest Rate</i> <input type="text" name="annualInterestRate" ><br/>
				<i>Time Period</i> <input type="text" name="timePeriod" ><br/>
				<input type="submit" name="button" value="Calculate"><br/>
			</form>
					
					<?php
						include 'calculatingtotalamount.php';
						if(isset($_GET['principleAmount']))
						{
							$interest_calculator=new Calculatingtotalamount();
							$interest_calculator->principleAmountOfMoney=$_GET['principleAmount'];
							$interest_calculator->interestRate=$_GET['annualInterestRate'];
							$interest_calculator->time=$_GET['timePeriod'];


							//echo $interest_calculator->principleAmountOfMoney. ' ' . $interest_calculator->interestRate . ' ' . $interest_calculator->time;
							echo "Total amount :" . $interest_calculator->get_total_amount();
						}
					?>
		</body>
</html>