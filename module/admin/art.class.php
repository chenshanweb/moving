<?php
	class art extends indexMain{
		function __construct(){
			parent::__construct();
			$this->db=new db("shicategory");
			$this->db1=new db("shishows");
		}
		function show(){
			$obj=new infinite();
	    	$obj->tree(0,0,$this->db->connect,"shicategory");
	    	$this->smarty->assign("tree",$obj->str);
//	    	if($this->checkLogin()){
//	    		echo 1;
	    		$this->smarty->display("admin/shipin/1.html");
//	    	}
		}
		function add(){
			$ssname=$_POST["ssname"];
			$ssrc=$_POST["imgurl"];
			$sscon=$_POST["sscon"];
			$scid=$_POST["scid"];

			echo $ssname;
			if($this->db->insert("insert into shishows (ssname,ssrc,scid,sscon) values ('$ssname','$ssrc',$scid,'$sscon')")){
            	$this->jump("index.php?m=admin&f=art&a=show","保存成功");
	        }else{
	            $this->jump("index.php?m=admin&f=art&a=show","保存失败");
	        }
		}
//		function file(){
//				$fileInfo=$_FILES["file"];
//				echo $fileInfo;
//				exit;
//				date_default_timezone_set("Asia/Shanghai");
//				if(is_uploaded_file($fileInfo["tmp_name"])){
//					if(!file_exists(VIDEO_PATH."/upload")){
//						mkdir(VIDEO_PATH."/upload/",0777,true);
//					}
//					$dirname=date("y-m-d");
//					if(!file_exists(VIDEO_PATH."/upload/".$dirname)){
//						mkdir(VIDEO_PATH."/upload/".$dirname."/",0777,true);
//					}
//				$filename=time().$fileInfo["name"];
//				$path=VIDEO_PATH."upload/".$dirname."/".$filename;
//				move_uploaded_file($fileInfo["tmp_name"],$path);
//				echo VIDEO_PATH."/upload/".$dirname."/".$filename;
//			}
//		}
		function file(){
				$fileInfo=$_FILES["file"];
				date_default_timezone_set("Asia/shanghai");
				if(is_uploaded_file($fileInfo["tmp_name"])){
					if(!file_exists("static/video/")){
						mkdir("static/video/",0777,true);
					}
					$dirname=date("y-m-d");
					if(!file_exists("static/video/".$dirname)){
						mkdir("static/video/".$dirname."/",0777,true);
					}
					$filename=time().$fileInfo["name"];
					$path="static/video/".$dirname."/".$filename;
					move_uploaded_file($fileInfo["tmp_name"],$path);
					echo VIDEO_PATH."/".$dirname."/".$filename;
				}
		}
	}
?>