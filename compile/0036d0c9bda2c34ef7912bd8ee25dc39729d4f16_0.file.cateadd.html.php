<?php
/* Smarty version 3.1.30, created on 2017-04-09 16:39:46
  from "C:\wamp\www\moving\template\admin\cateadd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea47b2423b48_72161474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0036d0c9bda2c34ef7912bd8ee25dc39729d4f16' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\cateadd.html',
      1 => 1491748774,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea47b2423b48_72161474 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css"/>
</head>
<body>
	<form action="index.php?m=admin&f=category&a=add" method="post">
		上级栏目：<select name="pid" class="form-control">
					<option value="0">一级导航</option>
					<?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

				</select><br>
		添加分类：<input type="text" name="cname" class="form-control"/><br>
		<input type="submit" value="提交" class="btn btn-default"/>
	</form>
</body>
</html><?php }
}
