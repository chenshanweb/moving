<?php
/* Smarty version 3.1.30, created on 2017-04-13 16:52:47
  from "C:\wamp\www\moving\template\admin\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef90bf79a903_06195333',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd164abdde1a9da696f8534e0223ff97c1658e335' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\index.html',
      1 => 1492095160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef90bf79a903_06195333 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>moving后台</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/index.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/index.js"><?php echo '</script'; ?>
>
</head>
<body>
	<!--头部开始-->
	<div class="head">
		<header>
			<div class="box">
				<a href="javascript:;" class="hyx-left"><?php echo $_smarty_tpl->tpl_vars['aname']->value;?>
,Welcome to Admin</a>
				<a href="index.php?m=admin&f=index&a=logout" class="out">退出</a>
			</div>
		</header>
	</div>
	<!--头部结束-->
	<!--内容部分-->
	<div class="con">
		<div class="list-group left">
			<ul class="list">
				<li class="lis">
					<h5 class="list-group-item active">用户管理</h5>
					<ul class="mune">
						<li class="list-group-item"><a href="index.php?m=admin&f=user&a=add" target="right">添加用户</a></li>
						<li class="list-group-item"><a href="index.php?m=admin&f=user&a=select" target="right">管理用户</a></li>
					</ul>
				</li>
				<li class="lis">
					<h5 class="list-group-item active">视频分类管理</h5>
					<ul class="mune">
						<li class="list-group-item"><a href="index.php?m=admin&f=category&a=cateadd" target="right">添加分类</a></li>
						<li class="list-group-item"><a href="index.php?m=admin&f=category&a=cateshow" target="right">管理分类</a></li>
					</ul>
				</li>
				<li class="lis">
					<h5 class="list-group-item active">内容管理</h5>
					<ul class="mune">
						<li class="list-group-item"><a href="index.php?m=admin&f=art&a=show" target="right">添加内容</a></li>
						<li class="list-group-item"><a href="index.php?m=admin&f=art1&a=show" target="right">管理内容</a></li>
					</ul>
				</li>
				<li class="lis">
					<h5 class="list-group-item active">推荐位管理</h5>
					<ul class="mune">
						<li class="list-group-item"><a href="" target="right">添加推荐位</a></li>
						<li class="list-group-item"><a href="" target="right">管理推荐位</a></li>
					</ul>
				</li>
			</ul>
			<br>
			
		</div>
		
		<div class="right">
			<iframe src="" frameborder="0" name="right">
        	</iframe>
		</div>
	</div>
	<!--内容结束-->
</body>
</html><?php }
}
