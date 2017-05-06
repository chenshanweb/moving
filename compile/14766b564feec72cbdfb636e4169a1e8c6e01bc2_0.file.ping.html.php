<?php
/* Smarty version 3.1.30, created on 2017-05-06 13:40:54
  from "C:\wamp\www\moving\template\index\ping.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590db646964e91_60337912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14766b564feec72cbdfb636e4169a1e8c6e01bc2' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\index\\ping.html',
      1 => 1494070851,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590db646964e91_60337912 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title></title>		
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/add.css" />	
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/resize.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/zepto.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/touch.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/iscroll-probe(1).js"><?php echo '</script'; ?>
>
	</head>
	<body>
	<div class="czl-index-wrap">	
		<div class="czl-index-scroll">
			<div class="header">
				<a class="header_left" href="index.php?m=index&f=index">取消</a>
				<a class="header_mid" href="index.php?m=index&f=index">
					<div class="header_mid_top">发布信息</div>
					<div class="header_mid_bot">醉醉醉丶醉生梦死</div>
				</a>
				<div class="header_right">发表</div>
			</div>
		</div>
		<div class="footer">
			<div class="iconfont">&#xe600;</div>
			<div class="iconfont">&#xe7ab;</div>
			<div class="iconfont">&#xe784;</div>
			<div class="iconfont">&#xe688;</div>
			<div class="iconfont">&#xe748;</div>
		</div>
		
	</div>
	</body>
	<?php echo '<script'; ?>
 type="text/javascript">
		window.onload=function(){
			var myScroll = new IScroll('.czl-index-wrap',{
				  mouseWheel: true,
				  scrollbars: true,
				  probeType: 3
			});
			
  
		}
	<?php echo '</script'; ?>
>
</html>
<?php }
}
