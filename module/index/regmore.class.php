<?php
class regmore extends indexMain{
	function __construct(){
		parent::__construct();
		$this->db=new db("user");
	}
	//性别
	function xingbie(){
		$this->smarty->display("index/regmore/regmore1.html");
	}
	function checkxingbie(){
		$usex=P("usex");
		$uage=P("uage");
		$uid=$this->session->get("uid");
		if($this->db->update("update user set usex='$usex',uage='$uage' where uid=".$uid)>0){
			echo "index.php?m=index&f=regmore&a=shengao";
		}
	}
	//身高
	function shengao(){
		$this->smarty->display("index/regmore/regmore2.html");
	}
	
	function checkshengao(){
		$uheight=P("uheight");
		$uweight=P("uweight");
		$uid=$this->session->get("uid");
		if($this->db->update("update user set uheight='$uheight',uweight='$uweight' where uid=".$uid)>0){
			echo "index.php?m=index&f=regmore&a=yundong";
		}
	}
	//运动
	function yundong(){
		$this->smarty->display("index/regmore/regmore3.html");
	}
	function checkyundong(){
		$ujichu=P("ujichu");
		$uid=$this->session->get("uid");
		if($this->db->update("update user set ujichu='$ujichu' where uid=".$uid)>0){
			echo "index.php?m=index&f=regmore&a=yundongmubiao";
		}
	}
	//运动目标
	function yundongmubiao(){
		$this->smarty->display("index/regmore/regmore4.html");
	}
	function checkyundongmubiao(){
		$utarget=P("utarget");
		$uid=$this->session->get("uid");
		if($this->db->update("update user set utarget='$utarget' where uid=".$uid)>0){
			echo "index.php?m=index&f=regmore&a=xunlian";
		}
	}
	//训练
	function xunlian(){
		$uid=$this->session->get("uid");
		$result=$this->db->where("uid=".$uid)->select();
		foreach($result as $v){
			//echo $v["uweight"],$v["uheight"];
			if($v["uweight"]/(($v["uheight"]/100)*($v["uheight"]/100))<18.5){
				$a="过轻";
			}else if($v["uweight"]/(($v["uheight"]/100)*($v["uheight"]/100))>18.5&&$v["uweight"]/(($v["uheight"]/100)*($v["uheight"]/100))<23.9){
				$a="正常";
			}else if($v["uweight"]/(($v["uheight"]/100)*($v["uheight"]/100))>24&&$v["uweight"]/(($v["uheight"]/100)*($v["uheight"]/100))<27){
				$a="过重";
			}else if($v["uweight"]/(($v["uheight"]/100)*($v["uheight"]/100))>28&&$v["uweight"]/(($v["uheight"]/100)*($v["uheight"]/100))<41){
				$a="肥胖";
			}
		}	
		if($this->db->update("update user set ushenti='$a' where uid=".$uid)>0){
//			echo "ok";
			$this->smarty->assign("a",$a);
			$this->smarty->display("index/regmore/regmore5.html");
			exit;	
		}else{
			echo "身体质量指数计算失败，请重新输入";
			$this->smarty->display("index/regmore/regmore2.html");	
		}
		
		
		
	}
	function jixu(){
		//$this->jump("index.php?m=index&f=login","请成功");
		$this->smarty->display("index/login.html");
	}
}

?>