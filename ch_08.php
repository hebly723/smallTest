<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
		<title>数学函数</title>
	</head>
	<body>
		<ul>
		<li><h1>round(floatnumber, deci-number)</h1></li>
		<p>用来取浮点数的有效数字，不加参数默认是0位有效数字</p>
		<?php
			$round = M_PI;
			echo $round."<br/>";
			$round = round($round, 4);
			echo $round."<br/>";
			$round = round($round);
			echo $round."<br/>";
		?>
		</ul>
	</body>
</html>
