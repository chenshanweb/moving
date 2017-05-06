<?php
/* Smarty version 3.1.30, created on 2017-04-13 16:59:48
  from "C:\wamp\www\moving\template\admin\shipin\1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef9264a2dbe2_36789921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '716788bdb769fc399cc706b3b340cff6a4543277' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\shipin\\1.html',
      1 => 1492095578,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef9264a2dbe2_36789921 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
		<?php echo '<script'; ?>
 charset="utf-8" src="<?php echo JS_PATH;?>
/admin/shipin/upload.js"><?php echo '</script'; ?>
>
	</head>
	<style>
			form {
				margin: 0;
			}
			textarea {
				display: block;
			}
			.box{
			width: 300px;
			height: 200px;
			border: 1px solid #000000;
			position: relative;
		}
		.img{
			width: 300px;
			height: 180px;
		}
		.img img{
			width: 100%;
			height: 100%;
		}
		.progress{
			width: 0%;
			height:15px;
			position: absolute;
			bottom: 0;
			left: 0;
			background: red;
			font-size: 12px;
			text-align: center;
			line-height: 15px;			
		}
		</style>
	<body>
	<form action="index.php?m=admin&f=art&a=add" method="post">

    <div class="form-group">
        <label for="cid">选择分类</label>
        <select class="form-control" name="scid" id="scid">
            <!--<option value="0">一级分类</option>-->
            <?php echo $_smarty_tpl->tpl_vars['tree']->value;?>

        </select>
    </div>
    <div class="form-group">
        <label for="stitle">文章标题</label>
        <input type="text" class="form-control" id="ssname" name="ssname" placeholder="标题">
    </div>

    <div class="form-group">
        <label for="scon">视频说明</label>
       <!-- <?php echo '<script'; ?>
 id="editor" type="text/plain" style="width:1024px;height:500px;" name="scon"><?php echo '</script'; ?>
>-->
       <!--<form>-->
			<textarea name="sscon" style="width:800px;height:200px; "></textarea>
			
			<input type="file" name="file" multiple="multiple" class="one" />
			<div class="box">
				<div class="img">
					<img src="" alt="">
				</div>
				<div class="progress"></div>
			</div><br />
		<!--<!--</form>-->
    </div>
    <button type="submit" class="btn btn-default ok">Submit</button>
    <input type="hidden" class="hid" name="imgurl"/>
</form>
<?php echo '<script'; ?>
>

	window.onload=function(){
		var sub=document.querySelector(".ok");
		var val=document.querySelector(".hid");
		var obj=new upload("index.php?m=admin&f=art&a=file",".one",".progress","img");
		obj.up(function(e){
			console.log(e);
			obj.start=function(){
				val.value=e;
				sub.removeAttribute("disabled");
			}
			obj.start();
		})
	}

//  var ue = UE.getEditor('editor');
//  KindEditor.ready(function(K) {
//		K.create('textarea[name="content"]', {
//			autoHeightMode : true,
//			afterCreate : function() {
//				this.loadPlugin('autoheight');
//			}
//		});
//	});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
