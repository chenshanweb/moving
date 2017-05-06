<?php
/* Smarty version 3.1.30, created on 2017-05-06 13:37:05
  from "C:\wamp\www\moving\template\index\footer.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590db561eda451_88028356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1afb7f495578c6350b7a4a0aa0e8081d0f7c99ef' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\index\\footer.html',
      1 => 1494070563,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_590db561eda451_88028356 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!--底部开始-->	
		<div class="zrl-footer">
			<a href="index.php?m=index&f=index" class="zrl-foot zrl-foot-tab1 zrl-foot-show indexfoot">
			</a>
			<a href="index.php?m=index&f=siren" class="zrl-foot zrl-foot-tab2 zrl-foot-show sirenfoot">
			</a>
			<a href="index.php?m=index&f=ping" class="zrl-foot zrl-foot-tab3">
			</a>
			<a href="index.php?m=index&f=quan" class="zrl-foot zrl-foot-tab4 zrl-foot-show quanfoot">
			</a>
			<a href="index.php?m=index&f=wode" class="zrl-foot zrl-foot-tab5 zrl-foot-show wodefoot">
			</a>
			<div style="display: none;" class="hidfoot"><?php echo $_smarty_tpl->tpl_vars['yemian']->value;?>
</div>
		</div>
		<!--底部结束-->
	</div>	
</body>

	
<?php echo '<script'; ?>
> 
	//底部touch事件
   	var footchoose= $(".hidfoot").html(); 
   	$(".zrl-foot").css("box-shadow","none");
   	$("."+footchoose).eq(0).css("box-shadow","0 0 0.3rem #bbbaba");	
<?php echo '</script'; ?>
>  
	
</html><?php }
}
