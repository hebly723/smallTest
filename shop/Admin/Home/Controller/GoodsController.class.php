<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
	class GoodsController extends Controller{
	function showlist(){
		//echo "I'm loginning";
		//$goods = new GoodsModel();
		//$goods = new \Home\Model\GoodsModel();
		//$model = D();
		
		//var_dump($goods);
		//1.实例化父类model
		//$model = D();//执行原生的sql语句
		//var_dump($model);
		//$this->display();
		//2.操作数据表
		//$good = D('Goods');//表名sh_goods
		//var_dump($good);
		//实例化父类model对象，同时操作数据表
		$search    =  $_GET['search'];
		$book = D('Book');
		//var_dump($book);
		$book->where('bookname like '.'\'%'.$search.'%\'');
		$info = $book->select();
		$count=$book->where('bookname like '.'\'%'.$search.'%\'')->count();
		//{foreach $info as $k=>$v}
				
		//{/foreach}
		if ($info == null)
			//$this->display('sorry');
			$this->error('账号密码错误!');
		else{
		$this->assign('js_arr',json_encode($info));
		$this->assign('info', $info);
		$this->assign('count', $count);
		$this->display();
}
		//echo '<pre>';
		//var_dump($info);
		//echo '</pre>';
	}
}
?>
