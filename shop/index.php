<!--使用php开发商城shop项目-->
<?php
	//define('HOME_MODULE','Admin');
	//define('ADMIN_MODULE','Admin');
	//'MODULE_ALLOW_LIST'    =>    array('Home','Admin'),
	//'MODULE_ALLOW_LIST' => array('Home','Admin','App');
	//'DEFAULT_MODULE' => 'Home';
	define('ALERT', '<script type="text/javascript">alert("Go!")</script>');
	define('APP_DEBUG', true);//开发模式，错误提示比较具体
	define('SEARCH_URL', '/phpmyadmin/smallTest/shop/?g=Home&c=Goods&a=showlist&search=');
	define('CSS_URL', '/phpmyadmin/smallTest/shop/public/css');
	define('JS_URL', '/phpmyadmin/smallTest/shop/public/js');
	define('IMG_URL', '/phpmyadmin/smallTest/shop/public/img');
	define('AD_URL', 'http://localhost/phpmyadmin/smallTest/shop/?g=Home&c=Ad&a=guanggao');
	define('SHOP_URL', 'http://localhost/phpmyadmin/smallTest/shop');
	//define('APP_DEBUG', false);//生产模式，错误提示比较模糊
	define('THINK_PATH', '../ThinkPHP/');
	require(THINK_PATH."/ThinkPHP.php");
	
	//App::run();
?>
