<?php
class wode extends indexMain{
	function __construct(){
		parent::__construct();//继承主类
		$this->db=new db("user");
	}
	function init(){
		if($this->session->get("indexLogin")=="yes"){//确定登录状态为yes,分配用户名，后期根据用户名获取内容			
			$this->smarty->assign("uname",$this->session->get("uname"));
        }
        $this->smarty->assign("yemian","wodefoot");
		$this->smarty->display("index/wode/wodeIndex.html");//显示我的主页
	}
	function setting(){
		$this->smarty->display("index/wode/setting.html");//显示我的设置
	}
	function friend(){
		$this->smarty->display("index/wode/friend.html");//显示我的好友
	}
	function hemoving(){
		$this->smarty->display("index/wode/hemoving.html");//显示他的好友
	}
	function person(){
        if($this->session->get("indexLogin")=="yes"){//确定登录状态为yes,分配用户名，后期根据用户名获取内容
            $result=$this->db->select("select * from user where uid=".$this->session->get("uid"));
            $this->smarty->assign("result",$result);
        }

        $this->smarty->display("index/wode/person.html");//显示我的个人中心
	}
	function update(){

        $unicheng=$_POST["unicheng"];
        $uheight=$_POST["uheight"];
        $uweight=$_POST["uweight"];
        $usex=$_POST["usex"];
        $uage=$_POST["uage"];
        $utouxiang=$_POST["utouxiang"];

        if($this->db->update("update user set uage='$uage',utouxiang='$utouxiang',usex='$usex',unicheng='$unicheng',uheight='$uheight',uweight='$uweight' where uid=".$this->session->get("uid"))>0){

            $this->jump("index.php?m=index&f=wode&a=person","修改成功");


        }
//        if($this->db->connect->affected_rows>0){
////            jump("index.php?m=index&f=wode&a=person","修改成功");
//            $this->smarty->display("index/wode/person.html");
//        }

//        if($this->db->where("uid=".$this->session->get("uid"))->update("uname='$uname',uage='$uage',uheight=$uheight,uweight=$uweight,imgurl=$imgurl")){
////            jump("index.php?m=index&f=wode&a=person","修改成功");
//            $this->smarty->display("index/wode/person.html");
//        }

    }


}
?>