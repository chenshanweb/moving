<?php
/* Smarty version 3.1.30, created on 2017-04-13 17:43:18
  from "C:\wamp\www\moving\template\admin\shipin\showCon.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ef9c96295551_14869209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4996c9062cfa0203f92473c176601b1c5c0930c3' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\shipin\\showCon.html',
      1 => 1492098136,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ef9c96295551_14869209 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
	</head>
	<style>
		th{
			text-align: center;
		}
	</style>
	<body>
		<table class="table text-center table-bordered">
			<tr>
				<th>ssid</th>
				<th>标题</th>
				<th>所属上级</th>
				<th>视频地址</th>
				<th>视屏显示图片地址</th>
				<th>视频时间</th>
				<th>等级</th>
				<th>点击量</th>
				<th>推荐位</th>
				<th>发布时间</th>
				<th>操作</th>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["ssid"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["ssname"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["scid"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["ssrc"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["ssimg"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["sstime"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["ssdengji"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["sshits"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["sstuijianwei"];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['v']->value["ssstime"];?>
</td>
				<td>
					<a href="index.php?m=admin&f=art1&a=info&ssid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ssid'];?>
">查看</a>
					<a href="index.php?m=admin&f=art1&a=del&ssid=<?php echo $_smarty_tpl->tpl_vars['v']->value['ssid'];?>
">删除</a>				
				</td>
			</tr>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
		<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>

	</body>
</html>-->
<?php }
}
