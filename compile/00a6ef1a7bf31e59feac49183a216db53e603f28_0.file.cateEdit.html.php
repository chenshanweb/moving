<?php
/* Smarty version 3.1.30, created on 2017-04-09 17:06:42
  from "C:\wamp\www\moving\template\admin\cateEdit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea4e0230a905_82183775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00a6ef1a7bf31e59feac49183a216db53e603f28' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\cateEdit.html',
      1 => 1491750389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea4e0230a905_82183775 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	
</head>
<style>
	form{
		width:300px;
		height: 300px;
		margin: auto;
		line-height: 30px;
	}
	.showcon{
		width:200px;
		height:200px;
		position: relative;
		border: 1px solid #000;
	}
	img{
		width: 100%;
		height:180px;
		position: absolute;
		left: 0;
		top: 0;
	}
	div.press{
		width:0%;
		height: 20px;
		position: absolute;
		left: 0;
		top: 180px;
		background: aqua;
		line-height: 20px;
		color: cadetblue;
		text-align: center;
	}
</style>
<body>
	<form action="index.php?m=admin&f=category&a=update" method="post">
		上级栏目：<select name="pid" >
					<option value="0">一级导航</option>
					<?php echo $_smarty_tpl->tpl_vars['re']->value;?>

				</select><br>
		修改分类：<input type="text" name="cname" value="<?php echo $_smarty_tpl->tpl_vars['ree']->value['scname'];?>
"/>
		<input type="hidden" name="cid" id="" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" />
		<input type="submit" value="提交" />
	</form>
</body>
</html><?php }
}
