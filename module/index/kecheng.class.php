<?php
class kecheng extends indexMain{
	function __construct(){
		parent::__construct();//继承主类
	}
	function init(){
		$this->smarty->display("index/kecheng/teaching.html");//视频详情
	}
	
	function video(){
		$this->smarty->display("index/kecheng/videoshow.html");//视频播放
	}
	
	function pinglun(){
		$this->smarty->display("index/kecheng/wenzi.html");//视频评论
	}

}
?>