<html>
	<head>
		<meta charset = "utf-8">
	</head>
	<body>
		<?php
			print '随即生成数：';
			print rand().'<br/>';
	
			$name = 'Family tree';

			print '$name'.'的长度是'.strlen($name).'<br/>';

			print '从0到10的随机数是'.rand(0,10).'<br/>';

			print '截取钊字'.substr( $name, 0, 4).'<br/>';
			print $name.'|||';
		?>
	</body>
</html>
