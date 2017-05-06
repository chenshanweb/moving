//页面以x轴等比缩放
function resize(originW,type){
	var type=type||"x";
	if(type=="x"){
		var width=document.documentElement.clientWidth;
		var fontSize=width/originW*100+"px";
		document.documentElement.style.fontSize=fontSize;
	}else if(type=="y"){
		var width=document.documentElement.clientHeight;
		var fontSize=width/originW*100+"px";
		document.documentElement.style.fontSize=fontSize;
	}
}
document.addEventListener("DOMContentLoaded",function(){
	resize(750,"x");
})
$(function(){
//	获取时间
	function time(){
		//获取系统时间。  
		var dateTime=new Date();  
		var month=dateTime.getMonth();  
		var day=dateTime.getDate();  
		var h=dateTime.getHours();  
		var m=dateTime.getMinutes();   
		$(".zrl-pl-time").html(month+"-"+day+" "+h+":"+m);
	}
	time();
	
})
