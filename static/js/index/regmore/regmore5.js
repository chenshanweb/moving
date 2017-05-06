$(function(){
		
//		训练推荐
		touch.on('.hu_circle','click',function(e){
			$(this).css({"background":"#1be3a2","color":"#fff"});
		});
		touch.on('.hu_qx','click',function(e){
			$(".hu_circle").css({"background":"#1be3a2","color":"#fff"});
		});
		touch.on('.hu_zc','touchstart',function(){
			var index=$(this).attr("data");
			$(".hu_circle").eq(index).css({"background":"#fff","color":"#1be3a2"});
		});
		
		function size(originwidth){
			var width=document.documentElement.clientHeight;
			var bili=width/originwidth*100+"px";
			$("html").css("font-size",bili);
		}
		size(1334);
})