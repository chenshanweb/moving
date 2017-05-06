<?php
 class login extends indexMain{
     function __construct(){
         parent::__construct();
         $this->db=new db("user");
     }
     // 登陆处理
     function init(){
          if($this->session->get("welcome")=="yes"){
            header("location:index.php");
          }else{
            $this->smarty->display("index/login.html");
          }
     }

     //检查登录的用户名密码
     function check(){
         $uname=P("uname");
         $upass=md5(P("upass"));
         $result=$this->db->select();  
         foreach ($result as $v){
             if($v["uname"]==$uname){
                 if($v["upass"]==$upass){
                     $this->session->set("indexLogin","yes");
                     $this->session->set("uname",$uname);
                     	$this->session->set("uid",$v["uid"]);
                     //$this->jump("index.php?m=index&f=index","登陆成功");
                     $this->smarty->display("index/index.html");
                     exit;
                 }
             }
         }
         $this->smarty->display("index/login.html");
         //登录失败返回登录页
         //$this->jump("index.php?m=index&f=login","账户或密码错误");
         //echo "index.php?m=index&f=login";
     }
     //注册页面
     function reg(){
     	//如已经登录过，不能进入注册页
         if($this->session->get("welcome")=="yes"){
             header("location:index.php");
         }else {
             $this->smarty->display("index/reg.html");
         }
     }
     //异步验证用户名
     function ajax(){
           $uname=P("uname");
           $result=$this->db->select();
           foreach ($result as $v){
                if($v["uname"]==$uname){
                    echo "false";
                    exit;
                }
           }
           echo "true";
     }
	//异步验证 验证码
//   function ajaxCode(){
//       $code=P("code");
//       if(strcasecmp($code,$this->session->get("code"))!==0){
//          echo "false";
//       }else{
//          echo "true";
//       }
//   }
     //注册，添加用户
    function addReg(){
        $uname=P("uname");
        $upass=md5(P("upass"));
        if($this->db->insert("uname='$uname';upass='$upass'")>0){
        	$uid=$this->db->connect->insert_id; //获取当前插入成功的用户名的id       	
        	$this->session->set("uid",$uid);//放在session中,要获取在方法中写$this->session->get("uid");即可获取
        	$this->smarty->display("index/regsucc.html");//注册成功后跳转到个人信息填写页面
        	
            //$this->jump("index.php?m=index&f=login","注册成功");
        }else{//失败跳转回注册页
            $this->jump("index.php?m=index&f=login&a=reg","注册失败");
        }
     }
     //退出登陆
    function logout(){
         $this->session->clear();
         $this->jump("index.php","退出成功");
    }
    //ajax检查用户名
    function checkuse(){
    	$uname=P("uname");
    	$result=$this->db->select();
    	foreach ($result as $v){
            if($v["uname"]==$uname){
            	echo "ok";
            	exit;
            }
       	}
       	echo "no";
    }
    //检查用户名和密码
    function checkmima(){
    	$uname=P("uname");
        $upass=md5(P("upass"));
        $result=$this->db->select();
        foreach ($result as $v){
            if($v["uname"]==$uname){
                if($v["upass"]==$upass){
           			echo "ok";
           			exit;
                 }
             }
        }
    	echo "no";
    }
    //登录后续个人信息界面
    
    
    
 }

?>