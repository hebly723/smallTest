<?php /* Smarty version Smarty-3.1.6, created on 2016-05-31 14:33:19
         compiled from "/usr/share/phpmyadmin/smallTest/shop/Home/View/Goods/showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:14538334365747cd53882816-72111254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eae2cea69ef51a57d6f0aebcc98e39733ae68f1' => 
    array (
      0 => '/usr/share/phpmyadmin/smallTest/shop/Home/View/Goods/showlist.html',
      1 => 1464676386,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14538334365747cd53882816-72111254',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5747cd538d396',
  'variables' => 
  array (
    'js_arr' => 0,
    'count' => 0,
  ),
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
									<form id="login_input" class="login_input" action="?g=Home&&c=Index&&a=login" method="post" >
										<label for="username">
											用户名
										</label><br>
										<input type="text" id="login_username" placeholder="请输入用户名/账号/手机号" name="username"><br>
										<label for="password">
											密码
										</label><br>
										<input type="password" id="login_password" placeholder="请输入密码" name="password">
										<input type="text" id="getURL" value="" name="url" class="login_btn" >
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
								</div>
							</div>
						</div>
					</div>
					<!--注册弹出框-->
					<div id="registerModal" class="modal fade " tabindex="-5" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content register">
								<div class="modal-header login_head">
									<button type="button" class="close" data-dismiss="modal">
										&times;
									</button>
									<h4 class="modal-title" >注册用户</h4>
								</div>
								<div class="modal-body login_body">
									<form id="register_input" class="register_input login_input">
										<label>填写用户名</label><br>
										<input type="text" id="register_username" placeholder="请填写您要使用的用户名"><br>
										<label>填写密码</label><br>
										<input type="password" id="register_password1" placeholder="请填写您的密码"><br>
										<label>确认密码</label><br>
										<input type="password" id="register_password2" placeholder="请再次填写您的密码来确认">
										<a href="#" data-dismiss="modal">已有账号? 去登陆！</a>
									</form>
								</div>
								<div class="modal-footer login_foot">
									<button type="button" class="btn btn-default" data-dismiss="modal">
										取消
									</button>
									<button type="button" class="btn btn-primary">
										注册
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="midBar">
				<div class="center">
					<div class="middle">
						<div class="midBar_logo">
							<img src="<?php echo @IMG_URL;?>
/icon/logo.png" class="img-circle logo" height="75" width="75">
						</div>
						<form class="midBar_serch search" action="?g=Home&c=Index&a=search" method="post">
							<input type="text" class="searchText" placeholder="请输入要查询的内容" name="key" >
							<input class="btn-info btn searchBtn" type="submit" value="搜索"/>
						</form>
						<div class="midBar_shopcar">
							<div class="shopcar">
								<img src="<?php echo @IMG_URL;?>
/icon/shopcar.png" class="img-rounded " height="46" width="50">
								<a href="#" class="btn btn-warning ">我的购物车</a>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</header>
		<content>
			<div class="book_list" id="book_list">
				
			</div>
			<div class="btn_page" id="btn_page">

			</div>
		</content>

	<script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery.validate-1.13.1.js"></script>	
	<script type="text/javascript" src="<?php echo @JS_URL;?>
/bookAdd.js"></script>
	<script type="text/javascript">
	var submit = function(){
		$("#login_btn").click();
	}
		var nowURL = window.location.href;
		$("#getURL").attr('value',nowURL);

	var book = <?php echo $_smarty_tpl->tpl_vars['js_arr']->value;?>
;
	var bookNum = <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
;
	var listNum = Math.ceil(<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
/2);
	for(var j=0;j<=listNum;j=j+2){
		var book = <?php echo $_smarty_tpl->tpl_vars['js_arr']->value;?>
;
		var list_id= "list"+(j/2);
		var $list = "<div class='list' id="+list_id+"></div>";
		$("#book_list").append($list);
		var listbtn_id=(j/2);
		var $listbtn="<a href='javascript:void(0)' class='btn btn-success' onclick='listshow(this);' id="+listbtn_id+">"+(j/2+1)+"</a>"
		$("#btn_page").append($listbtn);
		for(var i=j;i<j+2 && i<bookNum;i++){
			var detail_id="detail"+i;
			var car_id = "car"+i;
			var collect_id = "collect"+i;
			var name = book[i].bookname;
			var img = book[i].image;
			var writer = book[i].writer;
			var price = book[i].price;
			var $detail = "<div class='book_detail' id="+detail_id+"></div> "
			$("#list"+(j/2)).append($detail);
			var $bookImg = "<img class='bookImg' src=<?php echo @IMG_URL;?>
"+img+" height='150' width='97.5'>";
			$("#detail"+i).append($bookImg);
			var $bookname = "<div class='bookname'>书名："+name+"</div> ";
			$("#detail"+i).append($bookname);
			var $bookwriter = "<div class='bookwriter'>作者："+writer+"</div> ";
			$("#detail"+i).append($bookwriter);
			var $bookprice = "<div class='bookprice'>价格："+price+"</div> ";
			$("#detail"+i).append($bookprice);
			var $bookcar = "<a class='bookcar btn btn-warning'id="+car_id+">购买</a>";
			$("#detail"+i).append($bookcar);
			var $bookcollect = "<a class='bookcollect btn btn-prmary'id="+collect_id+">收藏</a> ";
			$("#detail"+i).append($bookcollect);
		
		
		}
	}

		$("#list0").css("display","block");

	var listshow=function(ob){
		var id= $(ob).html();
		var show_id = id-1;
		// alert(show_id);
		for(j=0;j<=listNum;j=j+2){
			$("#list"+(j/2)).css("display","none");
			}
		$("#list"+show_id).css("display","block");
	}



	</script>
	</body>
</html>
<?php }} ?>