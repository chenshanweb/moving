<?php
class index extends main{
	
		function init(){
			//默认函数
			//用户名密码正确---链接到后台的主页
			//检查是否有权限登录
			//原：include "template/admin/index.html";

			if($this->checkLogin()){//检查登录状态是否可以登录，除了从单入口进，还有用户名密码正确
				//把用户名传到页面中，让显示后台首页，然后设置进入首页的状态
				$this->smarty->assign("aname",$this->session->get("aname"));
				$this->smarty->display("admin/index.html");
				$this->session->set("coming","yes");
			}
		}
		
		function login(){
			//测试登录页，后台给模拟数据。想让一进来给个后台的账户名和密码install
			
			//链接到登录页
			//处理：如果已经有过登录到主页，除非退出，不然不能再进入登录页
			if($this->session->get("coming")){
				header("location:index.php?m=admin&f=index");
				exit;
			}
			$this->smarty->display("admin/login.html");
			//原：include "template/admin/login.html";
		}
		
		function code(){
			//创建验证码图片 创建成功后把验证码的值保存在session上
			$img=new code();
			$img->width=120;
			$img->height=50;
			$img->fonturl=FONT_PATH."/aa.ttf";								
			$img->output();	

			$this->session->set("code",$img->curLet);
		}
		
		function check(){
			
			//检查后台用户名密码是否匹配
			$aname=P("aname");
			$apass=P("apass");
			$db=new db("adminuser");
			$result=$db->select();
			foreach($result as $v){
				if($v["aname"]==$aname){
					if($v["apass"]==$apass){
						//用户名和密码相同，也就是登录成功，保存成功的状态\用户名\当前的id
						$this->session->set("login","yes");
						$this->session->set("aname",$aname);
						$this->session->set("aid",$v["aid"]);
						$this->jump("index.php?m=admin&f=index","登陆成功");
						exit;	
					}
				}
			}
			$this->jump("index.php?m=admin&a=login","登录失败");
		}
		
		function logout(){
			//点击退出，消除所有的session信息，返回登录页
			$this->session->clear();
			$this->jump("index.php?m=admin&a=login","退出成功");
		}
		
	}

?>