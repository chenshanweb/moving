$(function(){
		
//		运动三项选择
		var value;
		touch.on('.la','click',function(e){
			$(".la").css({"background":"transparent","color":"#000"});
			value=$(this).css({"background":"#584f60","color":"#fff"}).html();
		});
		touch.on(".hu_jx","click",function(e){
		$.ajax({
			type:"post",
			url:"index.php?m=index&f=regmore&a=checkyundongmubiao",
			data:{
				utarget:value,
				
			},
			success:function(e){
				console.log(e)
					if(e){
						
						location.href=e;
					}else{
						alert("添加失败，请重新输入")
					}

				}
		})
		})
		function size(originwidth){
			var width=document.documentElement.clientHeight;
			var bili=width/originwidth*100+"px";
			$("html").css("font-size",bili);
		}
		size(1334);
})