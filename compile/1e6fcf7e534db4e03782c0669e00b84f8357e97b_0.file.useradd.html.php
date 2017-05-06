<?php
/* Smarty version 3.1.30, created on 2017-04-09 16:08:07
  from "C:\wamp\www\moving\template\admin\useradd.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea40472a3d74_02394879',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e6fcf7e534db4e03782c0669e00b84f8357e97b' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\useradd.html',
      1 => 1491746863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea40472a3d74_02394879 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/bootstrap.min.css"/>
	</head>
	<body>
		<form action="index.php?m=admin&f=user&a=adds" method="post">
			添加用户名：<input type="text" name="uname" class="form-control" /><br>
			添加密码：<input type="text" name="upass" class="form-control"/ ><br>
			<input type="submit" value="提交" class="btn btn-default"/>
		</form>
	</body>
</html>

</head>
<body>
	<?php }
}
