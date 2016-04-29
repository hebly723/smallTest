<!doctype html>
<html>
	<head>
		<meta charset = "utf-8">
	</head>
	<body>
		<?php
			$favorite = "family tree";
			$favor    = substr($favorite, 7, 11);
			print $favor;
			$uppercase= strtoupper($favorite);
			print $uppercase;
			$lowercase= strtolower($favorite);
			print $lowercase;
			$position = strpos($favorite, "f");
			print $position;
		?>
	</body>
</html>
