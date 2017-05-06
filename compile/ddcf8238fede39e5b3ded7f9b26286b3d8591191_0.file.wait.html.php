<?php
/* Smarty version 3.1.30, created on 2017-04-11 16:57:49
  from "C:\wamp\www\moving\template\admin\wait.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eceeed92b045_79674054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddcf8238fede39e5b3ded7f9b26286b3d8591191' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\wait.html',
      1 => 1491922667,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eceeed92b045_79674054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/admin/wait.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/wait.css">
</head>
<body>
  <div class="box">
      <div class="title">
      	提示信息：请耐心等待!
      </div>
      <div class="con">
      		<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

          <span>3</span>秒后跳转<br>
          没有跳转，请 <a href=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
>点击</a>
      </div>
  </div>
</body>
</html><?php }
}
