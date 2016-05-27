<?php /* Smarty version Smarty-3.1.6, created on 2016-05-27 18:08:20
         compiled from "/usr/share/phpmyadmin/smallTest/shop/Home/View/Goods/showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:14538334365747cd53882816-72111254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8eae2cea69ef51a57d6f0aebcc98e39733ae68f1' => 
    array (
      0 => '/usr/share/phpmyadmin/smallTest/shop/Home/View/Goods/showlist.html',
      1 => 1464343697,
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
    'info' => 0,
    'v' => 0,
    'count' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5747cd538d396')) {function content_5747cd538d396($_smarty_tpl) {?><html>
	<body>
		<table>
			<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<tr id="product1">
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['bookname'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['writer'];?>
</td>
				<td><img src="<?php echo @IMG_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['image'];?>
"></td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
			<?php } ?>
		</table>
<script type="text/javascript" language="Javascript">
var a = <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
;
alert(a);
</script>
	</body>
</html>
<?php }} ?>