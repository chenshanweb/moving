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
//	收藏点击效果
	function lover(){
		$(".zrl-xq-love").on("touchstart",function(){
//			console.log(1);
			$(this).css({background:"url(../../../img/index/quan/hyxxx.png)",backgroundSize:"100% 100%"});
		})
	}
	lover();
//	获取时间
	function time(){
		//获取系统时间。  
		var dateTime=new Date();  
		var month=dateTime.getMonth();  
		var day=dateTime.getDate();  
		var h=dateTime.getHours();  
		var m=dateTime.getMinutes();   
		$(".zrl-xq-time").html(month+"-"+day+" "+h+":"+m);
	}
	time();
//	关注
	function guanzhu(){
		$(".zrl-xq-guanzhu").on("touchstart",function(){
			$(this).css({background:"#38be81",color:"#fff"}).html("关注成功");
		})
	}
	guanzhu();

})
