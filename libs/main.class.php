<?php
	class main{
		function __construct(){
			$this->smarty=new Smarty();
			$this->smarty->setTemplateDir("template");//默认模板目录的设置
			$this->smarty->setCompileDir("compile");//存模板编译文件的目录名称。
			//默认是./templates_c， 这意味着Smarty将进入templates_c/目录来执行已编译的PHP文件。 该目录必须可写入
			
			//$smarty->setConfigDir("configs");
			//设置存储 配置文件的目录。 默认是./configs，意味着Smarty将查询configs/并读取配置。
			//$smarty->setCacheDir("cache");
			//保存模板缓存文件的目录名称，默认是./cache。 这 意味着Smarty将进入cache/目录查找缓存文件并把缓存文件当作PHP来执行。 该目录必须可写入
			$this->session=new session();
		}
		
		function checkLogin(){
			//检查登录
			$session=$this->session;
			//如果条件不成立，退回登录页，成立返回真，可以进入主页
			if(!($session->get("login"))&&MVC=="yes"){
				$this->jump("index.php?m=admin&f=index&a=login","请登录");
				exit;	
			}else{
				return true;
			}
		}
		
		function jump($url,$message){
			//页面跳转提示
			$this->smarty->assign("url",$url);
			$this->smarty->assign("message",$message);
			$this->smarty->display("admin/wait.html");
		}
		
		
		
	}

?>
