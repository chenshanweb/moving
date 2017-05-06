<?php
class quan extends indexMain{
	function __construct(){
		parent::__construct();//继承主类
	}
	function init(){
		if($this->session->get("indexLogin")=="yes"){//确定登录状态为yes,分配用户名，后期根据用户名获取内容			
			$this->smarty->assign("uname",$this->session->get("uname"));
        }
        $this->smarty->assign("yemian","sirenfoot");
		$this->smarty->display("index/quan/world.html");//显示世界圈
	}
	function friend(){
		$this->smarty->display("index/quan/friend3.html");//显示好友圈
	}
	function xiangqingye(){
		$this->smarty->display("index/quan/xiangqing.html");//跳转详情页
	}
	function pinglun(){
		$this->smarty->display("index/quan/pinglun.html");//显示评论页
	}
	function wenzi(){
		$this->smarty->display("index/quan/wenzi.html");//显示详情页评论
	}


}
?>