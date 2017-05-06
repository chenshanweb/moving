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
resize(750)
window.onresize=resize;