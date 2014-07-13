<html>
<head>
<title>
CRUD Title
</title>
</head>
<body>
	<form action='show.php' method="POST">
		<fieldset>
			<legend> FTFL Batch</legend>
				<span class="msg">
					<?php
						if(isset($_GET["len"]))
						{
							
							if($_GET["len"]=="long")
							{
								echo "Your batch Name is Too long<br/>";
							}
						elseif($_GET["len"]=="short")
							{
								echo "Your batch name is too much short.<br/>";
							}
						}
					?>
				</span>

			<label>
				<span>Batch Name</span>
				<input type="text" name="name" />
			</label>
			<label>
				<input type="submit" value="Submit" />
			</label>
		</fieldset>
</form>
</body>
</html>