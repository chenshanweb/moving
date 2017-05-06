<?php
	class index extends indexMain{
		//function init(){		
			//$a=new db("student");
			//$result=$a->filed("name")->select();//用db.class.php里的函数查找一个结果集
			//$this->smarty->assign('result',$result);
			//$this->smarty->assign('CSS_PATH',CSS_PATH);
			
			//$smarty->assign("aaa",$abc); 这时,在smarty类里面就会有一个变量aaa里面保存着$abc的值,这样在模板里就可以像如下的方式显示出他的值 {$aaa}
			//$this->smarty->display("index/index.html");
			//1）assign方法：分配变量到模板文件
			//调用该方法主要主要是为Smarty模板文件中的变量赋值，可以传递一对名称/数值对，也可以包含名称/数值对的关联数组。
			//
			//2）display方法：显示输出模板内容（替换标记）
			//基于smarty的脚本必须使用这个方法，而且一个脚本中只能使用一次，因为它负责获取和显示由Smarty引擎引用的模板。
		//}
		
		function __construct(){
			parent::__construct();
			//$this->db=new db("shows");首页涉及到查多张表，不止一个
		}
		
		//登录首页
		function init(){
			echo $this->session->get("indexLogin")=="yes";
			if($this->session->get("indexLogin")=="yes"){
				$this->smarty->assign("indexLogin","yes");
				$this->smarty->assign("uname",$this->session->get("uname"));
            	$this->session->set("welcome","yes");
            	$this->smarty->assign("yemian","indexfoot");
          	}
          	//$result=$this->db->where("statu=3")->select(); 查找符合条件的内容放在首页
          	//$this->smarty->assign("result",$result);
          	
          	//达人推荐
          	$db=new db("user");
			$result=$db->select("select * from user where utuijian=1");
			//var_dump($result);
			//exit;

			$this->smarty->display("index/index.html");
		}
		
		//登录到注册页
		function reg(){
			$this->smarty->display("index/reg.html");
		}
//		
//		//登录到登录页
		function login(){
			$this->smarty->display("index/login.html");
		}
		
		
		
	}

?>