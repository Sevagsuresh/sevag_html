<html>
<head>
</head>
<body>
	<h1 align="center"><i><u>ARRAY FUNCTIONS</u></i></h1>
	<?php
		$name=["arun","sharoon","liya","heena","rahman"];
		$t=$name;
		
		echo "Displaying using print_r() : <br><br>";
		print_r($name);
		echo "<br><br>";
		
		echo "Sorting using asort()  : <br><br>";
		asort($name);
		print_r($name);
		echo "<br><br>";
		
		echo "Sorting using arsort()  : <br><br>";
		arsort($t);
		print_r($t);
	?>
</body>
</html>
