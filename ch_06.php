<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			$headCount = 0;
			$count     = 0;
			do{
				$re = rand(0,1);
				if ($re)
				{
					$headCount++;
					echo"<p class=\"coin\">正</p>";
				}
				else
				{
					echo"<p class=\"coin\">反</p>";
				}
			}while($headCount<1);
		?>
	</body>
</html>
