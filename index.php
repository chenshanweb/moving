<?php	
//var_dump($_SERVER);//打印服务器的信息，在哪个服务器运行，检测哪个服务器的信息
//	echo (__DIR__);C:\wamp\www\170228mvc
	define("MVC","yes");//确保都是从这个入口进
	
	define("ROOT_URL",__DIR__);//C:\wamp\www\170228mvc
	define("LIBS_URL",ROOT_URL."/libs");
	
	define("TPL_INDEX_URL",ROOT_URL."/template/index");
	define("TPL_ADMIN_URL",ROOT_URL."/template/admin");

	define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/")));
	//http://127.0.0.1/170228mvc
	define("FILE_URL","http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]); 
	
	define("CSS_PATH",HTTP_URL."/static/css");
	define("IMG_PATH",HTTP_URL."/static/img");
	define("JS_PATH",HTTP_URL."/static/js");
	define("FONT_PATH",ROOT_URL."/static/font");
	define("EDIT_PATH",HTTP_URL."/static/edit");
	define("VIDEO_PATH",HTTP_URL."/static/video");
	
	include LIBS_URL."/db.class.php";
	include LIBS_URL."/session.class.php";
	
	include LIBS_URL."/code.class.php";
	require LIBS_URL."/functions.php";
	require LIBS_URL."/function.class.php";
	
	include LIBS_URL."/main.class.php";
	include LIBS_URL."/indexMain.class.php";
	
	require LIBS_URL."/pages.class.php";
	include LIBS_URL."/route.class.php";
	require (LIBS_URL."/smarty/Smarty.class.php");
	$route=new route();
	$route->init();
?>