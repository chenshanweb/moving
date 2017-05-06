<?php
/* Smarty version 3.1.30, created on 2017-04-09 15:37:34
  from "C:\wamp\www\moving\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ea391e401217_65318531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19e0cae27d2ef7936312b22186cd08c07bab02c' => 
    array (
      0 => 'C:\\wamp\\www\\moving\\template\\admin\\login.html',
      1 => 1491745043,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ea391e401217_65318531 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/base.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/admin/reg.css" />
	</head>
	<body>
		<div class="admin-form">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="widget">
							<div class="widget-header">
								 Login
							</div>
							<div class="widget-content">
								<div class="padd">
									<form action="index.php?m=admin&f=index&a=check" class="form-horizontal" method="post">
										<div class="form-group">
											<lable class="control-label col-lg-3">Username</lable>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="aname"/>
											</div>
										</div>
										<div class="form-group">
											<lable class="control-label col-lg-3">Password</lable>
											<div class="col-lg-9">
												<input type="text" class="form-control" name="apass"/>
											</div>
										</div>
										<div class="form-group">	
											<div class="col-lg-9 col-lg-offset-3">
												<div class="checkbox">
													<lable>
														<input type="checkbox" />
														<font>
															<font>记住密码</font>
														</font>
													</lable>
												</div>
												<br>
												<input type="submit" class="btn btn-danger" value="Login"/>
												<input type="reset" class="btn btn-default" value="Reset"/>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="widget-footer">还没注册?<a href="javascript:;">Reg</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<?php }
}
