<?php
class siren extends indexMain{
	function __construct(){
		parent::__construct();//继承主类
	}
	function init(){
		if($this->session->get("indexLogin")=="yes"){//确定登录状态为yes,分配用户名，后期根据用户名获取内容			
			$this->smarty->assign("uname",$this->session->get("uname"));
        }
        $this->smarty->assign("yemian","sirenfoot");
		$this->smarty->display("index/siren/siIndex.html");//显示私人订制的主页
	}

}
?>