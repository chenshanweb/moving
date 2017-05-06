<?php
class user extends main{
    function __construct(){
        parent::__construct();
        $this->db=new db("user");
    }
    //查询所有用户
    function select(){
         $result=$this->db->select();
         $this->smarty->assign("result",$result);
         $this->smarty->display("admin/usershow.html");
    }
    //删除用户名
    function del(){
        $uid=$_GET["id"];
        if($this->db->where("uid=".$uid)->delete()>0){
            $this->jump("index.php?m=admin&f=user&a=select","删除成功");
        }else{
            $this->jump("index.php?m=admin&f=user&a=select","删除失败");
        }
    }
    //添加用户
    function add(){
         $this->smarty->display("admin/useradd.html");
    }
    //添加到数据库
    function adds(){
		$uname=P("uname");
        $upass=md5(P("upass"));
        $result=$this->db->insert("uname='$uname';upass='$upass'");
        if($result>0){
        	$this->jump("index.php?m=admin&f=user&a=add","添加成功");
        }else{
        	$this->jump("index.php?m=admin&f=user&a=add","添加失败");
        }
	}
   
}
?>
