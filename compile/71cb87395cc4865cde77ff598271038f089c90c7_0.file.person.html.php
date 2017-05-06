<?php
/* Smarty version 3.1.30, created on 2017-05-06 12:53:53
  from "C:\wamp\www\moving\template\index\wode\person.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590dab4114a487_85390499',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71cb87395cc4865cde77ff598271038f089c90c7' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\index\\wode\\person.html',
      1 => 1494067803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590dab4114a487_85390499 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<!--<link href="css/mui.min.css" rel="stylesheet" />-->
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/wode/public.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/wode/lzg_person.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/wode/swiper.min.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/wode/animate.min.css" />
	</head>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/zepto.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/resize.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/lzg_touxiang.js"><?php echo '</script'; ?>
>
<style type="text/css">
.lzg_touxiang_box{
     width: 5rem;
     height: 3rem;
     overflow: hidden;
     margin: 0.2rem auto;
     color: #FFFFFF;
}
.lzg_touxiang_box .lzg_btn{
     width: 100%;
     height: 2rem;
     line-height: 0.8rem;
     text-align: center;
     display: block;
     border-radius: 0.05rem;
     margin: 0.5rem 0;
}
.upload{
     float: right;
     position: relative;
}
.upload_pic{
     display: block;
     width: 100%;
     height: 1.5rem;
     position: absolute;
     left: 0;
     top: 0;
     opacity: 0;
     border-radius: 0.05rem;
}
#cvs{
	width:1.8rem;
	height:1.8rem;
	border-radius: 50%;
	margin:0.2rem 0;
	float: left;
	background: url(../../../../moving/moving/static/img/index/wode/lzg_4touxiang.png) no-repeat center center;
	background-size: contain;
}
.lzg_genghuan{
	display: inline-block;
	z-index: 12;
	color: #aaa;
	margin: 0.5rem 0;
}
</style>

	<body>
		<div class="lzg_box">
			
			<!--头部-->
			<div class="lzg_header">
				<div class="lzg_back">
					<a href="index.php?m=index&f=wode">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_bfanhui.png"/>
					</a>

				</div>
				<div class="lzg_save">
					<a href="">
						<span>保存</span>
					</a>
				</div>
			</div>
			
			<!--头部结束-->
			
			<!--内容-->
			<form action="index.php?m=index&f=wode&a=update" method="post">
				<div class="lzg_touxiang_box">
					<span class="lzg_btn">
						<!--<canvas id="cvs" width="80" height="80"></canvas>-->
						<img src="<?php echo IMG_PATH;?>
/index/wode/<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['utouxiang'];?>
" id="cvs" alt="">
						<input type="file" class="upload_pic" id="upload" name="utouxiang" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['utouxiang'];?>
"/>
						<span class="lzg_genghuan">更换头像</span>
					</span>
				</div>
				<div>
					<label>昵称</label>
					<input type="search" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['unicheng'];?>
" name="unicheng"/>
				</div>
				<div class="lzg_sex">
					<label>性别</label>
					<span>男性：</span>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value[0]['usex'];
$_prefixVariable1=ob_get_clean();
if (($_prefixVariable1 == 0)) {?>
						<input type="radio" name="usex" value="0" checked>
					<?php } else { ?>
						<input type="radio" name="usex" value="0" >

					<?php }?>

					<span>女性：</span>
					<?php ob_start();
echo $_smarty_tpl->tpl_vars['result']->value[0]['usex'];
$_prefixVariable2=ob_get_clean();
if (($_prefixVariable2 == 1)) {?>
						<input type="radio" name="usex" value="1" checked>
					<?php } else { ?>
						<input type="radio" name="usex" value="1" >

					<?php }?>

				</div>
				<div>
					<label>出生年月</label>
					<input type="date" class="date" name="uage" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uage'];?>
"/>
				</div>
				<div>

					<label>身高</label>
					<input type="search" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uheight'];?>
" name="uheight"/>
				</div>
				<div>
					<label>体重</label>
					<input type="search" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['uweight'];?>
" name="uweight"/>
				</div>
				<div>
					<label>身体质量指数</label>
					<label>正常</label>
					
				</div>
				<div>
					<label>个人简介</label>
					<input type="search" placeholder="运动使我更加快乐" class="lzg_jianjie"/>
				</div>

				<div>
					<button type="submit" data-loading-text="提交中" class="mui-btn" >确认</button>
					<button type="button" data-loading-text="取消中" class="mui-btn" onclick="return false">取消</button>
				</div>
			</form>
		</div>


	<!--<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/mui.min.js"><?php echo '</script'; ?>
>-->
		<!--<?php echo '<script'; ?>
 type="text/javascript">
			mui.init()
			
//			mui(document.body).on('tap', '.mui-btn', function(e) {
//			    mui(this).button('loading');
//			    setTimeout(function() {
//			        mui(this).button('reset');
//			    }.bind(this), 2000);
//			});
		<?php echo '</script'; ?>
>-->
	</body>

</html><?php }
}
