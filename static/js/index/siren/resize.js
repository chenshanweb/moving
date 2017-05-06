$(function(){
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
resize(750,"x");
window.onresize=resize;


//选项卡
$(".hyx-left li").on("touchstart",function(){
	var index=$(this).index(".hyx-left li");
	$(".hyx-left li").css("background","none");
	$(this).css("background","#fff").css(".color", "#ad2ff0");
})
	

})
