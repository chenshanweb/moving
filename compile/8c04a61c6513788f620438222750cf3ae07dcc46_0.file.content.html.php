<?php
/* Smarty version 3.1.30, created on 2017-04-13 17:43:31
  from "C:\wamp\www\moving\template\admin\shipin\content.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef9ca373fb62_92807583',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c04a61c6513788f620438222750cf3ae07dcc46' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\shipin\\content.html',
      1 => 1492093761,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef9ca373fb62_92807583 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1>
			<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["ssname"];?>

		</h1>
		<!--<p>
			<?php echo $_smarty_tpl->tpl_vars['result']->value[0]["scon"];?>

		</p>-->
		<form action="index.php?m=admin&f=art&a=editinfo" method="post">
		       <!--未审核:<input type="radio" value="0" name="statu"><br>
		       审核中:<input type="radio" value="1" name="statu"><br>
		       未通过:<input type="radio" value="2" name="statu"><br>
		       通过:<input type="radio" value="3" name="statu"><br>-->
		       <!--//影藏域 储存id的-->
	       <!--<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['sid'];?>
" name="sid">-->
	       <input type="submit" value="提交">
	   </form>
	</body>
</html>
<?php }
}
