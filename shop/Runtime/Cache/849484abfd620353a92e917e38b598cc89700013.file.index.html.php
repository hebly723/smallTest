<?php /* Smarty version Smarty-3.1.6, created on 2016-07-03 23:24:14
         compiled from "/usr/share/phpmyadmin/smallTest/shop/Home/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:6833492435747c6ad5e40d9-36823686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '849484abfd620353a92e917e38b598cc89700013' => 
    array (
      0 => '/usr/share/phpmyadmin/smallTest/shop/Home/View/Index/index.html',
      1 => 1467559394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6833492435747c6ad5e40d9-36823686',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5747c6ad7a39e',
  'variables' => 
  array (
    'js_arr' => 0,
    'count' => 0,
    'fail' => 0,
    'password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747c6ad7a39e')) {function content_5747c6ad7a39e($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/header.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/content.css">
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
/footer.css">
</head>
<body>
	<!--上部-->
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
								<form id="register_input" class="register_input login_input" action="?g=Home&&c=Index&&a=register" method="post">
									<label>填写用户名</label><br>
									<input type="text" id="register_username" placeholder="请填写您要使用的用户名" name="username"><br>
									<label>填写密码</label><br>
									<input type="password" id="register_password1" placeholder="请填写您的密码" name = "password"><br>
									<label>确认密码</label><br>
									<input type="password" id="register_password2" placeholder="请再次填写您的密码来确认">
									<a href="#" data-dismiss="modal">已有账号? 去登陆！</a>
									<input type="submit" id="register_btn" class="login_btn">
								</form>
							</div>
							<div class="modal-footer login_foot">
								<button type="button" class="btn btn-default" data-dismiss="modal">
									取消
								</button>
								<button type="button" class="btn btn-primary" onclick="register()">
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
		<div class="footBar clearfix">
			<div class="center">
				<div class="shopClass">
					<p class="allShop">全部商品分类<span class="caret"></span></p>
				</div>
				<div class="shopNav">
					<ul class="ulNav">
						<li><a href="#">小学教材</a></li>
						<li><a href="#">初中教材</a></li>
						<li><a href="#">高中教材</a></li>
						<li><a href="#">大学教材</a></li>
						<li><a href="#">专业书籍</a></li>
						<li><a href="#">课外读物</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<!--中部-->
	<content>
		<div class="content">
			<!--左侧菜单栏-->
			<div class="shopShow">
				<!--数学菜单框-->
				<div id="shopMath">
					<div class="shopDetail" id="math">
						<dl class="shopDetail_item" >
							<dt><a href="<?php echo @SEARCH_URL;?>
数学">数学</a><span class="badge hot pull-right"> HOT</span><img class="jiantou" src="<?php echo @IMG_URL;?>
/icon/jiantou.jpg" height="8" width="5"></dt>
							<dd><a href="#">高等数学</a><a href="#">线性代数</a><a href="#">离散数学</a></dd>
						</dl>
					</div>
					<div class="showDetail" id="showMath">
						<div class="detaile_left">
							<dl id="math1">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/math1.png" alt="math1" height="30" width="30"><a href="#">小学数学</a><hr class="hr"></dt>
								<dd><a href="#">一至三年级</a><a href="#">四至六年级</a><a href="#">小学奥数</a><a href="#">教参辅导</a></dd>
							</dl>
							<dl id="math2">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/math2.png" alt="math2" height="30" width="30"><a href="#">中学数学</a><hr class="hr"></dt>
								<dd><a href="#">初中数学</a><a href="#">高中数学</a><a href="#">初中教辅</a><a href="#">高中教辅</a><br><a href="#">初中习题册</a><a href="#">高中习题册</a></dd>
							</dl>
							<dl id="math3">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/math3.png" alt="math3" height="30" width="30"><a href="#">大学数学</a><hr class="hr"></dt>
								<dd><a href="#">高等数学</a><a href="#">离散数学</a><a href="#">线性代数</a><a href="#">概率论</a><br><a href="#">复变函数</a></dd>
							</dl>
						</div>
						<div class="detaile_right">
							<img src="<?php echo @IMG_URL;?>
/lunbo/math4.jpeg" class="detaile_right_img" alt="math4" height="390" width="200">
						</div>
					</div>
				</div>
				
				<!--英语菜单框-->
				<div id="shopEng">
					<div class="shopDetail" id="english">
						<dl class="shopDetail_item">
							<dt><a href="#">英语</a> <span class="badge hot pull-right"> HOT</span><img class="jiantou" src="<?php echo @IMG_URL;?>
/icon/jiantou.jpg" height="8" width="5"></dt>
							<dd><a href="#">托福英语</a><a href="#">雅思英语</a><a href="#">四六级</a></dd>
						</dl>
					</div>
					<div class="showDetail" id="showEng">
						<div class="detaile_left">
							<dl id="eng1">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/eng1.png" alt="eng1" height="30" width="30"><a href="#">小学英语</a><hr class="hr"></dt>
								<dd><a href="#">英语教材</a><a href="#">口语学习</a><a href="#">课外练习</a><a href="#">教参辅导</a></dd>
							</dl>
							<dl id="eng2">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/eng2.png" alt="math2" height="30" width="30"><a href="#">中学英语</a><hr class="hr"></dt>
								<dd><a href="#">初中英语</a><a href="#">高中英语</a><a href="#">初中教辅</a><a href="#">高中教辅</a><br><a href="#">初中习题册</a><a href="#">高中习题册</a></dd>
							</dl>
							<dl id="eng3">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/eng3.png" alt="eng3" height="30" width="30"><a href="#">大学英语</a><hr class="hr"></dt>
								<dd><a href="#">英语教材</a><a href="#">托福英语</a><a href="#">雅思英语</a><a href="#">四级</a><br><a href="#">六级</a><a href="#">口语练习</a></dd>
							</dl>
						</div>
						<div class="detaile_right">
							<img src="<?php echo @IMG_URL;?>
/lunbo/eng4.jpeg" class="detaile_right_img" alt="eng4" height="351" width="180">
						</div>
					</div>
				</div>

				<!--小说菜单框-->
				<div id="shopNov">
					<div class="shopDetail">
						<dl class="shopDetail_item" id="novel">
							<dt><a href="#">文学</a><a href="#">小说</a><img class="jiantou" src="<?php echo @IMG_URL;?>
/icon/jiantou.jpg" height="8" width="5"></dt>
							<dd><a href="#">武侠</a><a href="#">玄幻</a><a href="#">言情</a><a href="#">恐怖悬疑</a></dd>
						</dl>
					</div>
					<div class="showDetail" id="showNov">
						<div class="detaile_left">
							<dl id="nov1">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/nov1.png" alt="nov1" height="30" width="30"><a href="#">武侠小说</a><hr class="hr"></dt>
								<dd><a href="#">金庸专区</a><a href="#">古龙专区</a><a href="#">黄易专区</a><a href="#">其他作者</a></dd>
							</dl>
							<dl id="nov2">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/nov2.png" alt="nov2" height="30" width="30"><a href="#">网络小说</a><hr class="hr"></dt>
								<dd><a href="#">唐家三少</a><a href="#">天蚕土豆</a><a href="#">我吃西红柿</a><a href="#">辰东</a><br><a href="#">忘语</a><a href="#">血红</a></dd>
							</dl>
							<dl id="nov3">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/nov3.png" alt="nov3" height="30" width="30"><a href="#">文学名著</a><hr class="hr"></dt>
								<dd><a href="#">中国文学名著</a><a href="#">国外文学名著</a><a href="#">四大名著</a><a href="#">短篇</a><br><a href="#">长篇名著</a></dd>
							</dl>
						</div>
						<div class="detaile_right">
							<img src="<?php echo @IMG_URL;?>
/lunbo/nov4.jpeg" class="detaile_right_img" alt="nov4" height="390" width="200">
						</div>
					</div>
				</div>
				

				<!--专业菜单框-->
				<div id="shopTech">
					<div class="shopDetail">
						<dl class="shopDetail_item" id="tech">
							<dt><a href="#">专业知识</a><img class="jiantou" src="<?php echo @IMG_URL;?>
/icon/jiantou.jpg" height="8" width="5"></dt>
							<dd><a href="#">计算机</a><a href="#">软件工程</a><a href="#">物联网</a></dd>
						</dl>
					</div>
					<div class="showDetail" id="showTech">
						<div class="detaile_left">
							<dl id="tech1">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/tech1.png" alt="tech1" height="30" width="30"><a href="#">计算机语言</a><hr class="hr"></dt>
								<dd><a href="#">Java</a><a href="#">C</a><a href="#">C++</a><a href="#">PHP</a></dd>
							</dl>
							<dl id="tech2">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/tech2.png" alt="tech2" height="30" width="30"><a href="#">前端相关</a><hr class="hr"></dt>
								<dd><a href="#">HTML</a><a href="#">CSS</a><a href="#">JavaScript</a><a href="#">Jquery</a><br><a href="#">Bootstrap</a><a href="#">Node.js</a></dd>
							</dl>
							<dl id="tech3">
								<dt><img src="<?php echo @IMG_URL;?>
/icon/tech3.png" alt="tech3" height="30" width="30"><a href="#">后端相关</a><hr class="hr"></dt>
								<dd><a href="#">My Sql</a><a href="#">Sql Server</a><a href="#">PHP</a></dd>
							</dl>
						</div>
						<div class="detaile_right">
							<img src="<?php echo @IMG_URL;?>
/lunbo/tech4.jpeg" class="detaile_right_img" alt="tech4" height="390" width="200">
						</div>
					</div>
				</div>
				

				<!--其他菜单框-->
				<div id="shopOther">
					<div class="shopDetail">
						<dl class="shopDetail_item" id="other">
							<dt><a href="#">其他书籍</a><img class="jiantou" src="<?php echo @IMG_URL;?>
/icon/jiantou.jpg" height="8" width="5"></dt>
							<dd><a href="#">各种其他</a></dd>
						</dl>
					</div>
					<div class="showDetail" id="showOther">
						<img src="<?php echo @IMG_URL;?>
/lunbo/qidai.png" alt="qidai" height="380" width="580">
					</div>
				</div>
			</div>
			<!--图片轮播-->
			<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
				<!-- 轮播（Carousel）指标 -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
					<li data-target="#myCarousel" data-slide-to="3"></li>
				</ol>   
				<!-- 轮播（Carousel）项目 -->
				<div class="carousel-inner">
					<div class="item active">
						<img src="<?php echo @IMG_URL;?>
/lunbo/ad4.jpg" height="380" width="580" alt="First slide">
						<div class="carousel-caption">
							<h1>尝试功能</h1>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo @IMG_URL;?>
/lunbo/ad2.jpg" height="380" width="580" alt="Second slide">
						
					</div>
					<div class="item">
						<img src="<?php echo @IMG_URL;?>
/lunbo/ad3.jpg" height="400" width="600"  alt="Third slide">
					</div>
					<div class="item">
						<img src="<?php echo @IMG_URL;?>
/lunbo/ad1.jpg" height="433" width="600"  alt="Four slide">
					</div>
				</div>
				<!-- 轮播（Carousel）导航 -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div> 
			<!--右侧广告--> 
			<div class="introduce-ad">
				<a href="<?php echo @AD_URL;?>
">
					<img src="<?php echo @IMG_URL;?>
/lunbo/ad5.jpg" height="380" width="190" alt="guanggao">
				</a>
			</div>
			<!--热门推荐板块-->
			<div class="recommend clearfix">
				<div class="recommend_left">
					<div>
						<ul id="recommend_tab" class="nav nav-tabs">
							<li class="active"><a href="#one" data-toggle="tab">第一类推荐</a></li>
							<li><a href="#two" data-toggle="tab">第二类推荐</a></li>
						</ul>
						<div id="recommend_tab_content" class="tab-content">
							<div class="tab-pane fade in active" id="one">
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/haoduo.jpg" class="recommend_book_img" alt="haoduo" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：《好多小说》</a><a href="#" class="recommend_book_writer">作者：不知道</a>
									<p class="recommend_book_price">定价：30元</p>
								</div>
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/haoduo.jpg" class="recommend_book_img" alt="haoduo" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：《好多小说》</a><a href="#" class="recommend_book_writer">作者：不知道</a>
									<p class="recommend_book_price">定价：30元</p>
								</div>
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/none2.jpg" class="recommend_book_img" alt="暂无图片" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：暂无简介</a><a href="#" class="recommend_book_writer">作者：暂无简介</a>
									<p class="recommend_book_price">暂无价格</p>
								</div>
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/none2.jpg" class="recommend_book_img" alt="暂无图片" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：暂无简介</a><a href="#" class="recommend_book_writer">作者：暂无简介</a>
									<p class="recommend_book_price">暂无价格</p>
								</div>
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/none2.jpg" class="recommend_book_img" alt="暂无图片" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：暂无简介</a><a href="#" class="recommend_book_writer">作者：暂无简介</a>
									<p class="recommend_book_price">暂无价格</p>
								</div>
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/none2.jpg" class="recommend_book_img" alt="暂无图片" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：暂无简介</a><a href="#" class="recommend_book_writer">作者：暂无简介</a>
									<p class="recommend_book_price">暂无价格</p>
								</div>
							</div>
							<div class="tab-pane fade" id="two">
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/haoduo.jpg" class="recommend_book_img" alt="haoduo" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：《好多小说》</a><a href="#" class="recommend_book_writer">作者：不知道</a>
									<p class="recommend_book_price">定价：30元</p>
								</div>
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/haoduo.jpg" class="recommend_book_img" alt="haoduo" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：《好多小说》</a><a href="#" class="recommend_book_writer">作者：不知道</a>
									<p class="recommend_book_price">定价：30元</p>
								</div>
								<div class="recommend_book">
									<img src="<?php echo @IMG_URL;?>
/book/haoduo.jpg" class="recommend_book_img" alt="haoduo" height="200" width="130">
									<a href="#" class="recommend_book_name">书名：《好多小说》</a><a href="#" class="recommend_book_writer">作者：不知道</a>
									<p class="recommend_book_price">定价：30元</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="recommend_right">
					<div class="recommend_right_head">
						<h3>商家推荐</h3>
					</div>
					<ul class="recommend_right_ul">
						<li><a href="#">推荐一</a></li>
						<li><a href="#">推荐二</a></li>
						<li><a href="#">推荐三</a></li>
						<li><a href="#">推荐四</a></li>
					</ul>
				</div>
			</div>
		</div>
	</content>

	<!--底部-->
	<footer>
		<div class="footer">
			<!--底部信息1-->
			<div class="footer_info">
				<ul class="footer_info_ul">
					<li>
						<h3><img src="<?php echo @IMG_URL;?>
/icon/xinshou.jpg" alt="xinshou" class="img-circle foot_img" height="20" width="20">新手上路</h3>
					</li>
					<p><a href="#">购物流程</a></p>
					<p><a href="#">出售流程</a></p>
					<p><a href="#">常见问题</a></p>
					<p><a href="#">加盟投资</a></p>
				</ul>
				<ul class="footer_info_ul">
					<li>
						<h3><img src="<?php echo @IMG_URL;?>
/icon/baohu.jpg" alt="baohu" class="img-circle foot_img" height="20" width="20">购物保障</h3>
					</li>
					<p><a href="#">卖家认证</a></p>
					<p><a href="#">中介保护</a></p>
					<p><a href="#">信誉担保</a></p>
					<p><a href="#">担保金赔付</a></p>
				</ul>
				<ul class="footer_info_ul">
					<li>
						<h3><img src="<?php echo @IMG_URL;?>
/icon/zhifu.jpg" alt="zhifu" class="img-circle foot_img" height="20" width="20">支付方式</h3>
					</li>
					<p><a href="#">网上银行</a></p>
					<p><a href="#">支付宝</a></p>
					<p><a href="#">邮政汇款</a></p>
					<p><a href="#">手机充值卡</a></p>
				</ul>
				<ul class="footer_info_ul border_none">
					<li>
						<h3><img src="<?php echo @IMG_URL;?>
/icon/fuwu.jpg" alt="fuwu" class="img-circle foot_img" height="20" width="20">售后服务</h3>
					</li>
					<p><a href="#">退款退货</a></p>
					<p><a href="#">投诉维权</a></p>
					<p><a href="#">举报管理</a></p>
					<p><a href="#">留言意见</a></p>
				</ul>
			</div>
			<!--底部信息2-->
			<div class="info2 clearfix">
				<ul>
					<li><a href="#">关于本网站</a></li>
					<li><a href="#">联系我们</a></li>
					<li><a href="#">网站帮助</a></li>
					<li><a href="#">版权隐私</a></li>
					<li><a href="#">广告业务</a></li>
				</ul>
			</div>
			<!--版权部分-->
			<div class="bottom">
				Copyright© 二手书网书网 2029-3016 , All Rights Reserved 京ICP证000000号 海淀分局备案编号 1111111111
			</div>
		</div>
	</footer>
	
	<script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery.validate-1.13.1.js"></script>
	<script type="text/javascript">
	//验证登录账号密码
	// $(document).ready(function(){
	// 	$("#login_input").validata({
	// 		rules:{
	// 			username:{
	// 				required:true,
	// 				minlength:4,
	// 				maxlength:10
	// 			}
	// 			password:{
	// 				required:true,
	// 				minlength:6,
	// 				maxlength:16,
	// 			}
	// 		}
	// 		massage:{
	// 			username:{
	// 				required:"必须要填写用户名"
	// 				minlength:"用户名长度要大于4位"
	// 				maxlength:"用户名长度要小于10位"
	// 			}
	// 			password:{
	// 				required:"必须要填写密码"
	// 				minlength:"密码长度必须大于6位"
	// 				maxlength:"密码长度必须小于16位"
	// 			}
	// 		}
	// 	})
	// });
	var submit = function(){
		$("#login_btn").click();
	}
		var nowURL = window.location.href;
		$("#getURL").attr('value',nowURL);

	//数学菜单
	$("#shopMath").hover(function() {
		/* Stuff to do when the mouse enters the element */
		 $("#showMath").css("display","block");
	}, function() {
		/* Stuff to do when the mouse leaves the element */
		 $("#showMath").css("display","none");
	});

	//英语菜单
	$("#shopEng").hover(function() {
		/* Stuff to do when the mouse enters the element */
		 $("#showEng").css("display","block");
	}, function() {
		/* Stuff to do when the mouse leaves the element */
		 $("#showEng").css("display","none");
	});

	//小说菜单
	$("#shopNov").hover(function() {
		/* Stuff to do when the mouse enters the element */
		 $("#showNov").css("display","block");
	}, function() {
		/* Stuff to do when the mouse leaves the element */
		 $("#showNov").css("display","none");
	});

	//专业知识菜单
	$("#shopTech").hover(function() {
		/* Stuff to do when the mouse enters the element */
		 $("#showTech").css("display","block");
	}, function() {
		/* Stuff to do when the mouse leaves the element */
		 $("#showTech").css("display","none");
	});

	//其他书籍菜单
	$("#shopOther").hover(function() {
		/* Stuff to do when the mouse enters the element */
		 $("#showOther").css("display","block");
	}, function() {
		/* Stuff to do when the mouse leaves the element */
		 $("#showOther").css("display","none");
	});
	</script>
<script type="text/javascript">
	// var book = <?php echo $_smarty_tpl->tpl_vars['js_arr']->value;?>
;
	// var bookNum = <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
;
	// for(var i=0;i<bookNum;i++){
	// 	var $list = "<div id='list[i]' class='list'></div>";

	// }
	var submit = function(){
		$("#login_btn").click();
	}
	var fas = <?php echo $_smarty_tpl->tpl_vars['fail']->value;?>
;
	if (fas=="1")
	{
		alert("登录失败");
	}
	var submit = function(){
		$("#login_btn").click();
	}
		var nowURL = window.location.href;
		$("#getURL").attr('value',nowURL);
	var register = function(){
		$("#register_btn").click();
	}
	</script>

</body>
</html>
<!--
<?php echo $_SESSION['name'];?>
用户名（可判断其是否为空来判断有无登录）
<?php echo $_SESSION['id'];?>
未决定
<?php echo $_smarty_tpl->tpl_vars['fail']->value;?>
登录失败时传出的参数
<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
密码，可选用
-->
<?php }} ?>