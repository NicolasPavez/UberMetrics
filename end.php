<!DOCTYPE html>
<html>
<?php 

require 'function.php';
headWeb();

?>

	<body>
		<div id="container">

			<h1>Uber Analytics</h1>
			<h3>Término sesión</h3>

			<form action="endForm.php" method="post">
				<input type="text" name="kmEnd" placeholder="km final..." />
				<br>
				<input type="text" name="cashEnd" placeholder="cash final..." />
				<br>
				<input type="submit" value="enviar" />
			</form>
			
		</div>
	</body>

</html>