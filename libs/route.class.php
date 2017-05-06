<?php
////路由：不同的请求分发路径
////前台-》数据
////$_REQUEST[""]（可以接收get/post）;

class route{
	private static $moudel;
	private static $file;  
	private static  $action;
	function init(){
		$this->getinfo();
	}
	function getinfo(){
		self::$moudel=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
		//前后台路由器默认不同
		if(self::$moudel=="index"){
			self::$file=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"login";
		}else if(self::$moudel=="admin"){
			self::$file=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
		}
		
		self::$action=isset($_REQUEST["a"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
		$file="module/".self::$moudel."/".self::$file.".class.php";
		if(is_file($file)){
			include $file;
			if(class_exists(self::$file)){
				$obj=new self::$file();
				if(method_exists(self::$file,self::$action)){
					$method=self::$action;
					$obj->$method();
				}else{
					echo self::$action."方法不存在";
				}			
			}else{
				echo self::$file."类不存在";
			}
		}else{
			echo $file."文件不存在";
		}	
	}	
}
?>
