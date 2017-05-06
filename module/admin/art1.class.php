<?php
	class art1 extends main{
		function __construct(){
			parent::__construct();
			$this->db=new db("shishows");
		}
		
		function show(){
			$result=$this->db->select();
//			var_dump ($result);
//			exit;
			$obj=new pages(count($result),3);//count就是返回数组的数目
            $this->smarty->assign("pages",$obj->out());
			$currentResult=$this->db->select("select * from shishows ".$obj->limit);
//			$currentResult=$this->db->query("select * from shishows ".$obj->limit);
//			$currentResult=$this->db->select("select * from shishows,user where shishows.uid=user.uid ".$obj->limit);
			$this->smarty->assign("result",$currentResult);
			$this->smarty->display("admin/shipin/showCon.html");
		}
		function info(){
			$sid=$_GET["ssid"];
			$result=$this->db->where("ssid=$sid")->select();
			$this->smarty->assign("result",$result);
			$this->smarty->display("admin/shipin/content.html");
	    }
	    function editinfo(){
	    	$sid=$_POST["sid"];
	    	$statu=$_POST["statu"];
	    	if($this->db->where("sid=$sid")->update("statu='$statu'")){
	    		$this->jump("index.php?m=admin&f=art&a=show","审核完成");
	    	}else{
	    		$this->jump("index.php?m=admin&f=art&a=show","审核失败");
	    	}
	    }
	    function del(){
			$ssid=$_GET["ssid"];
			if($this->db->where("ssid=".$ssid)->delete()>0){
				$this->jump("index.php?m=admin&f=art1&a=show","删除成功");
			}else{
				$this->jump("index.php?m=admin&f=art1&a=show","删除失败");
			}
		}
	}
?>