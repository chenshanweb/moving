
$(function(){
	//1.圆形进度条begin
	//drawcir(parent,width,height,xianwid,bicolor,x,y,r,hucolor,bai,fontsize,fontcolor)
	var canvas=$("canvas").eq(0);
	var width=Math.floor($(".hu_cir").width()-1);
	var height=Math.floor($(".hu_cir").width()-1);
	var x=width/2;
	var r=x-2;
	var fontsize=x/2;
	drawcir(canvas,width,height,2,"#fff",x,x,r,"#d031cc",80,fontsize,"#000");
	var canvas=$("canvas").eq(1);
	drawcir(canvas,width,height,2,"#fff",x,x,r,"#d031cc",20,fontsize,"#000");
	//圆形进度条end
	
	
	
	
	//搜索
	var text2=document.querySelector("#byllb");
 	text2.onfocus=function(){
 		if(text2.value=="Search for..."){
 				text2.value ="";
 				
 		}
 		
 	}
 	text2.onblur=function(){
 		if(text2.value){

 		}else{
 			text2.value = "Search for..."
 		}
 		
 	}
	
	
	
})
