<?php
class sousuo extends indexMain{
	function __construct(){
		parent::__construct();//继承主类
	}
	function init(){
		if($this->session->get("indexLogin")=="yes"){//确定登录状态为yes,分配用户名，后期根据用户名获取内容，整个页面已经分配了uid，可随时获取			
			$this->smarty->assign("uname",$this->session->get("uname"));
        }
        
		$this->smarty->display("index/sousuo/sousuohu.html");//显示搜索页主页
	}
	function success(){
		$this->smarty->display("index/sousuo/sousuofei.html");
	}
	
	function successs(){
		$this->smarty->display("index/sousuo/sousuo10.html");
	}


}
?>