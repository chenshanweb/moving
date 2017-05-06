<?php
/* Smarty version 3.1.30, created on 2017-05-06 12:53:17
  from "C:\wamp\www\moving\template\index\wode\wodeIndex.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590dab1d6a1516_74863488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51bef3d3a37009e0fe78616ef4c98fc94252dc00' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\index\\wode\\wodeIndex.html',
      1 => 1494067803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/footer.html' => 1,
  ),
),false)) {
function content_590dab1d6a1516_74863488 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>

	<head>
		<meta charset="UTF-8">
		<title></title>
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<!--		<link href="css/mui.min.css" rel="stylesheet" />-->
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/wode/public.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/wode/lzg_mymoving.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/wode/swiper.min.css" />
	</head>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/zepto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/swiper.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/resize.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index/wode/iscroll-probe.js"><?php echo '</script'; ?>
>
    	
<?php echo '<script'; ?>
> 
	//底部touch事件
	window.onload=function(){
	   	var myScroll = new IScroll('.zrl-index-wrap',{
		  	mouseWheel: true,
		  	scrollbars: true,
		  	click:true,
		  	probeType: 3
		});
	}
   
<?php echo '</script'; ?>
> 
	<body>
		<div class="zrl-index-wrap">
			<div class="zrl-index-scroll">

		<div class="lzg_box">
			<div class="lzg_top_box">
				<div class="lzg_top_title">
					<div class="lzg_dianzan">
						<a href="index.php?m=index&f=wode&a=setting">
							<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_shezhi.png"/>
						</a>
					</div>
					<div class="lzg_fenxiang">
						<a href="index.php?m=index&f=wode&a=person">
							<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_bianjixinxi.png" alt="" />
						</a>

					</div>
				</div>
				
				<!--头像-->
				<div class="lzg_person_box">
					<div class="lzg_person">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_4touxiang.png" alt="" />
						
					</div>
					<div class="lzg_person_name">
							<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_any.png"/>
					</div>
					<div class="lzg_huangguan">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_hg.png"/>
					</div>
				</div>
				<!--头像结束-->
				
				<!--功能分类-->
				<div class="lzg_cotegory">
					<div class="lzg_haoyou">
						<a href="index.php?m=index&f=wode&a=friend">
							<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_haoyou.png"/>
						<span>我的好友</span>
						</a>
					</div>
					<div class="lzg_qinmidu">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_zhanghao.png"/>
						<span>我的训练</span>
					</div>
					<!--<div class="lzg_rongyao">
						<img src="img/lzg_qiandao.png"/>
						<span>我的签到</span>
					</div>
					<div class="lzg_xunlian">
						<img src="img/lzg_qianbao.png"/>
						<span>我的积分</span>
					</div>-->
					<div class="lzg_shangchuan">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_shangchuan.png"/>
						<span>我的上传</span>
					</div>
					
				</div>
				<!--功能分类结束-->	
				
				<!--<div class="lzg_zhuangshi">
					<img src="img/lzg_zhuangshi.png"/>
				</div>-->
			</div>
			
			<!--时间轴-->
			<!--<div class="lzg_shijian_box">
				<div class="lzg_shijian_left">
					<div>
						<img src="img/lzg_am.png"/>
					</div>
					<div>
						<img src="img/lzg_pm.png"/>
					</div>
				</div>
				<div class="lzg_shijian_cen">
					
				</div>
				<div class="lzg_shijian_right">
					<img src="img/lzg_duihua1.png" alt="" />
					<img src="img/lzg_duihua2.png" alt="" />
				</div>
			</div>-->
			<!--时间轴结束-->
			
			<!--轮播图-->
			
			<!--<div class="lzg_content_box">
				<div class="swiper-container">
				    <div class="swiper-wrapper">
				        <div class="swiper-slide">
				        	<img src="img/lzg_lunbo.png"/>
				        </div>
				        <div class="swiper-slide">
				        	<img src="img/lzg_lunbo.png"/>
				        </div>
				        <div class="swiper-slide">
				        	<img src="img/lzg_lunbo.png"/>
				        </div>
				    </div>
				    <div class="swiper-pagination"></div>
				</div>
				
				<div class="lzg_jieshao">
					<img src="img/lzg_jieshao.png" alt="" />
				</div>
			</div>-->
			<!--轮播图结束-->
			
			<div class="lzg_bot_box">
				<div class="lzg_bot_1">
					<div class="lzg_yonghu">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_yonghu.png"/>
					</div>
					<div class="lzg_yonghu_name">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_AB.png" alt="" />
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_huangguan2.png" alt="" />
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_cn.png"/>
					</div>
					<div class="lzg_yonghu_shijian">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_shijian.png" alt="" />
					</div>
				</div>
				<div class="lzg_bot_2">
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_tupian.png" alt="" />
				</div>
				<div class="lzg_bot_3">
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_yukuai.png"/>
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_cot.png"/>
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_hot.png"/>
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_meihao.png"/>
				</div>
				<div class="lzg_bot_4">
					<div class="lzg_bot_4_left">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_tubiao1.png" alt="" />
					</div>
					<!--<div class="lzg_bot_4_con">
						<img src="img/lzg_tubiao.png"/>
					</div>-->
					<div class="lzg_bot_4_right">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_more.png"/>
					</div>
				</div>
			</div>
			
			<div class="lzg_bot_box">
				<div class="lzg_bot_1">
					<div class="lzg_yonghu">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_yonghu.png"/>
					</div>
					<div class="lzg_yonghu_name">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_AB.png" alt="" />
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_huangguan2.png" alt="" />
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_cn.png"/>
					</div>
					<div class="lzg_yonghu_shijian">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_shijian.png" alt="" />
					</div>
				</div>
				<div class="lzg_bot_2">
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_tupian.png" alt="" />
				</div>
				<div class="lzg_bot_3">
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_yukuai.png"/>
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_cot.png"/>
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_hot.png"/>
					<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_meihao.png"/>
				</div>
				<div class="lzg_bot_4">
					<div class="lzg_bot_4_left">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_tubiao1.png" alt="" />
					</div>
					<!--<div class="lzg_bot_4_con">
						<img src="img/lzg_tubiao.png"/>
					</div>-->
					<div class="lzg_bot_4_right">
						<img src="<?php echo IMG_PATH;?>
/index/wode/lzg_more.png"/>
					</div>
				</div>
			</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:index/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
