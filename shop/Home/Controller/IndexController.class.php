<?php
namespace Home\Controller;
use Think\Controller;
header("Content-type: text/html; charset=utf-8");
class IndexController extends Controller {
    public function index(){
$this->show();
        /*$this->show('
<style type="text/css">*
{ padding: 0; margin: 0; } 
div{ padding: 4px 48px;} 
body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px}
 h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } 
p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
 */

  }
  public function search(){
	$key = $_POST["key"];
	redirect('http://localhost/phpmyadmin/smallTest/shop/?g=Home&c=Goods&a=showlist&search='.$key);
    }
    public function login(){
    	$name = $_POST['name'];
	$password = $_POST['password'];
	$user = D('User');
	$user->where("username=\"".$name."\" and password=\"".$password."\"");
	session('[start]');
	/*if(isset($_SERVER["HTTP_X_REWRITE_URL"])){
$url = $_SERVER["HTTP_X_REWRITE_URL"].(strpos($_SERVER["HTTP_X_REWRITE_URL"],'?')?'':"?").$this->parameter;
}else{
$url = $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").$this->parameter;
}*/
	if($user->select()){
		$flag = "1";
		$_SESSION['username'] = $name;
		$_SESSION['status']   = '1';
		$_SESSION['fail']   = null;
	}
	else{
		$flag = "0";
		$fail = "1";
		$_SESSION['username'] = null;
		$_SESSION['status'] = null;
		$_SESSION['fail']   = "1";
		$go = "<script type=\"text/javascript\">alert(\"Go!\")</script>";
	}	
	$url = $this->get_url();
	//获取域名或主机地址 
//echo $_SERVER['HTTP_HOST']."<br>"; #localhost

//获取网页地址 
//echo $_SERVER['PHP_SELF']."<br>"; #/blog/testurl.php

//获取网址参数 
//echo $_SERVER["QUERY_STRING"]."<br>"; #id=5

//获取用户代理 
//echo $_SERVER['HTTP_REFERER']."<br>"; 

//获取完整的url
//echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
//echo 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'];
#http://localhost/blog/testurl.php?id=5

//包含端口号的完整url
//echo 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"]; 
#http://localhost:80/blog/testurl.php?id=5

//只取路径
$url='http://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"]; 
	//$this->assign('name', $name);
	//$this->assign('go', $go);
	//$this->assign('password', $password);
	//$this->assign('flag', $flag);
	//$this->assign('fail', $fail);
	//$this->assign('password', $password);
	$this->redirect();
	//$this->display();
	//redirect('http://localhost/phpmyadmin/smallTest/shop/?g=Home&c=Goods&a=showlist&search='.$key);
	//redirect('http://localhost/phpmyadmin/smallTest/shop/');
    //$result = $db->query("select * from user where username = ".$data["username"]."&& password = ".$data["password"].";");
    //$array  = $result->fetch_row();
    //if ($array[0]==''||$array[0]==null)
	//	$this->show("AD/guanggao");
//$this->show("AD/guanggao");

}
public function outline(){
/**********%%%%%%%%%%%**************/
	session('[start]');
	$_SESSION['name'] = null;
	$_SESSION['id'] = null;
	$this->display();
}
function get_url() {
    $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
    $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
    $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
    $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
    return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
}
 
//echo get_url();
}
?>
