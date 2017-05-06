<?php
/* Smarty version 3.1.30, created on 2017-04-09 16:41:44
  from "C:\wamp\www\moving\template\admin\cateshow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea4828182d06_29539511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1ba3539a9604f90ac9b51f0db6992f5542701d' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\cateshow.html',
      1 => 1491748899,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea4828182d06_29539511 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
</head>
<style>
	table{
		width: 800px;
		margin:20px 10px;
		border: 1px solid #000;
		border-collapse: collapse;
		font-size: 14px;
		text-align: center;
		table-layout: fixed;
	}
	tr{
		height: 30px;
	}
	th,td{
		width: 12.5%;
		border: 1px solid #000;	
		height: 30px;
	}
	td>span{
		height: 30px;
		display:block;/*内联对象需加*/  
   		width:100%;  
    	word-break:keep-all;/* 不换行 */  
    	white-space:nowrap;/* 不换行 */  
    	overflow:hidden;/* 内容超出宽度时隐藏超出部分的内容 */  
    	text-overflow:ellipsis;
	}
	a{
		margin-left: 10px;
	}
	img{
		border: none;
	}
</style>
<body>
	<table>
		<tr>
			<th>cid</th>
			<th>cname</th>
			<th>pid</th>	
			<th>操作</th>
		</tr>
		<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['res']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["scid"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["scname"];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['v']->value["spid"];?>
</td>
					<td><a href="index.php?&m=admin&f=category&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['scid'];?>
">删除</a><a href="index.php?&m=admin&f=category&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['scid'];?>
">编辑</a></td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					
		</tbody>
	</table>
</body>
</html><?php }
}
