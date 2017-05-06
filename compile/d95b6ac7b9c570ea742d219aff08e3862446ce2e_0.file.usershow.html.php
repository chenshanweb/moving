<?php
/* Smarty version 3.1.30, created on 2017-04-09 16:08:57
  from "C:\wamp\www\moving\template\admin\usershow.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea4079edc606_69897391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd95b6ac7b9c570ea742d219aff08e3862446ce2e' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\usershow.html',
      1 => 1491746934,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea4079edc606_69897391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css">
</head>
<body>
   <table class="table table-bordered text-center">
       <tr>
           <th class="text-center">id</th>
           <th class="text-center">用户名</th>
           <th class="text-center">操作</th>
       </tr>
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
       <tr>
           <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uid"];?>
</td>
           <td><?php echo $_smarty_tpl->tpl_vars['v']->value["uname"];?>
</td>
           <td>
               <a class="btn btn-default" href="index.php?m=admin&f=user&a=del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" role="button">删除</a>
               <!--<a class="btn btn-default" href="index.php?m=admin&f=user&a=edit&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['uid'];?>
" role="button">编辑</a>-->
           </td>
       </tr>
       <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


   </table>
</body>
</html><?php }
}
