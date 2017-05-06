<?php
class category extends main{ 
	
	function category(){
		parent::__construct();
		$this->checkLogin();
		$this->db=new db("shicategory");
	}
	
	function cateadd(){
		//显示cateadd页面，用函数完善页面option内容
		$infi=new infinite();
		$re=$infi->tree(0,0,$this->db->connect,"shicategory");
		$this->smarty->assign("tree",$re);
		$this->smarty->display("admin/cateadd.html");
	}
	
	function cateshow(){
		//显示cateshow页面
		$res=$this->db->select();
		$this->smarty->assign("res",$res);
		$this->smarty->display("admin/cateshow.html");
	}
	
	function add(){
		$spid=P("pid");
		$scname=P("cname");
		$result=$this->db->insert("spid='$spid';scname='$scname'");
		if($result>0){
			$this->jump("index.php?m=admin&f=category&a=cateadd","添加成功");
		}else{
			$this->jump("index.php?m=admin&f=category&a=cateadd","添加失败");
		}	
	}
	
	function del(){
		$id=G("id");
		//查找有无子分类，有子，不能删除
		if($this->db->where("spid=".$id)->select()){
			$this->jump("index.php?m=admin&f=category&a=cateshow","有子分类，无法删除");
		}else{
			//无子，再看是否删除成功
			if($this->db->where("scid=".$id)->delete()>0){
				$this->jump("index.php?m=admin&f=category&a=cateshow","删除成功");
			}else{
				$this->jump("index.php?m=admin&f=category&a=cateshow","删除失败");
			}
		}
	}
	
	function edit(){
		//编辑页的跳转
		$id=G("id");
		$infi=new infinite();
		$this->smarty->assign("id",$id);
		$re=$infi->tree(0,0,$this->db->connect,"shicategory",$id);
		$this->smarty->assign("re",$re);
		$ree=$this->db->where("scid=".$id)->select();
		$this->smarty->assign("ree",$ree[0]);
		$this->smarty->display("admin/cateEdit.html");	
	}
	
	function update(){
		$id=P("cid");
		$pid=P("pid");
		$cname=P("cname");
		$reu=$this->db->filed("spid='$pid',scname='$cname'")->where("scid=".$id)->update();
		if($reu>0){
			$this->jump("index.php?m=admin&f=category&a=cateshow","编辑成功");
		}else{
			$this->jump("index.php?m=admin&f=category&a=cateshow","编辑成功");
		}
	}
	
}

?>

