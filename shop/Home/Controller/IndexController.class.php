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
    	$name = $_POST['username'];
	$password = $_POST['password'];
	$url = $_POST['url'];
	$user = D('User');
	$user->where("username=\"".$name."\" and password=\"".$password."\"");
	session('[start]');
	if($user->select()){
		$flag = "1";
		$_SESSION['name'] = $name;
		$_SESSION['url'] = $url;
		$_SESSION['status']   = '1';
		$_SESSION['fail']   = null;
	}
	else{
		$flag = "0";
		$fail = "1";
		$_SESSION['username'] = null;
		$_SESSION['status'] = null;
		$_SESSION['fail']   = "1";
	}
	//redirect($url);
	//$this->assign('url', $url);
	//echo "<script language=\"JavaScript\">alert({$url});</script>";
        //redirect('http://localhost/phpmyadmin/smallTest/shop/?g=Home&c=Goods&a=showlist&search='.$key);
	redirect($url);
}
public function outline(){
/**********%%%%%%%%%%%**************/
	session('[start]');
	$_SESSION['name'] = null;
	$_SESSION['id'] = null;
	$this->display();
}
public function register(){
	$name = $_POST['username'];
        $password = $_POST['password'];
	
	$arr = array(
	'username' => $name,
	'password' => $password,
);
	$user = D('User');
        $user->add($arr);
	session('[start]');
	$_SESSION['name'] = $_POST['username'];
	$this->display('index');
}
//echo get_url();
}
?>
