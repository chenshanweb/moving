$(function(){
		var value;
		var val;
		touch.on('.hu_xingbie li','click',function(e){
			var nan=$(".hu_xingbie li").css({"background":"transparent","color":"#000"}).addClass("nan");
			value=nan.html();
			$(this).css({"background":"#584f60","color":"#fff"});
			
		})
		$(".hu_date").blur(function(){
			val=$(".hu_date").val();
		})
		touch.on(".hu_jx","click",function(e){
			$.ajax({
				type:"post",
				url:"index.php?m=index&f=regmore&a=checkxingbie",
				data:{
					usex:value,
					uage:val,
				},
				success:function(e){
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
