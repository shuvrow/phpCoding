<html>
	<head>
	</head>
	<body>
		<form action="index.php" method="GET">
		Customer Name : <input type="text" name="customerNameText"><br/>
		Email Address : <input type="text" name="emailAddressText"><br/>
		Account Number : <input type="text" name="accountNumberText"><br/>
		Opening Date : <input type="text" name="openingDateText"><br/>
		<input type="submit" name="createAccountButton" value="Create Account"><br/>
		<b>Transaction</b><br/>
		Amount : <input type="text" name="amountText">
		<input type="submit" name="depositButton" value="Deposit">
		<input type="submit" name="withdrawButton" value="Withdraw">
		<input type="submit" name="showButton" value="Show Details">
		
		</form>
		
			<?php
				require_once 'account.php';

				session_start();
				if(isset($_GET['customerNameText']) && isset($_GET['openingDateText']) && isset($_GET['createAccountButton']))
				{
					

						$account=new Account($_GET['customerNameText'],$_GET['openingDateText']);
						$_SESSION['an_account']=$account;
				}

					

					

						
										
				 if (isset($_GET['depositButton']))
				            {
				                 $account = $_SESSION['an_account'];
				                 $account->deposit($_GET['amountText']);
				                 $_SESSION['an_account'] = $account;
				                 echo 'Deposited';
				            }
            
				
				if (isset($_GET['withdrawButton']))
				            {
				                 $account = $_SESSION['an_account'];
				                 echo $account->withdraw($_GET['amountText']);
				                 $_SESSION['an_account'] = $account;
				                 
				            }
			   if (isset($_GET['showButton']))
                            {
				                $account = $_SESSION['an_account'];
				                echo $account->get_name(). '<br/>';
				                echo $account->get_date(). '<br/>';
				                echo $account->get_balance(). '<br/>';
                            }      
			
			
			?>
	</body>
</html>