<?php /* Smarty version Smarty-3.1.6, created on 2016-05-30 08:03:15
         compiled from "/usr/share/phpmyadmin/smallTest/shop/Home/View/Goods/showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:14538334365747cd53882816-72111254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eae2cea69ef51a57d6f0aebcc98e39733ae68f1' => 
    array (
      0 => '/usr/share/phpmyadmin/smallTest/shop/Home/View/Goods/showlist.html',
      1 => 1464566592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14538334365747cd53882816-72111254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5747cd538d396',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747cd538d396')) {function content_5747cd538d396($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/shoplist.css">
</head>
	<body>
		<header>
			<div class="topBar">
				<div class="center">
					<div class="left">
						<img src="<?php echo @IMG_URL;?>
/icon/shoucang.jpg" class="shoucang" height="14" width="15">
						<a href="#">收藏本网站</a>
					</div>
					<div class="right">
						<span>欢迎来到XX网!</span>
						<span><a href="#" data-toggle="modal" data-target="#loginModal">[<?php echo $_SESSION['name'];?>
登录]</a></span>
						<span><a href="#" data-toggle="modal" data-target="#registerModal">[免费注册]</a></span>
					</div>
					<!--登录弹出框-->
					<div id="loginModal" class="modal fade" tabindex="-5" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content login">
								<div class="modal-herder login_head">
									<button type="button" class="close" data-dismiss="modal">
										&times;
									</button>
									<h4 class="modal-title">
										登录
									</h4>
								</div>
								<div class="modal-body login_body">
									<form id="login_input" class="login_input" action="<?php echo @SHOP_URL;?>
?g=Home&&c=Index&&a=login" method="post" >
										<label for="username">
											用户名
										</label><br>
										<input type="text" id="login_username" placeholder="请输入用户名/账号/手机号" name="username"><br>
										<label for="password">
											密码
										</label><br>
										<input type="password" id="login_password" placeholder="请输入密码" name="password">
										<a href="#">忘记密码?</a>
										<a href="#" data-dismiss="modal">没有账号?去注册！</a>
										<button type="submit" id="login_btn" class="login_btn"></button>
									</form>
								</div>
								<div class="modal-footer login_foot">
									<button type="button" class="btn btn-default"data-dismiss="modal">
										关闭
									</button>
									<button type="submit" class="btn btn-primary" onclick="submit()">确定</button>
<?php }} ?>