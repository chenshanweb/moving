$(function(){
	function size(originwidth){
		var width=document.documentElement.clientHeight;
		var bili=width/originwidth*100+"px";
		$("html").css("font-size",bili);
	}
	size(1334);
	//获取身高，体重
	var val1;
	var val2;
	$(".one").focus(function(){
//		alert(1)
		$(".one").val("");
	})
	$(".one").blur(function(){
//		alert(1)
		val1=$(".one").val();
//		alert(val1)
	})
	$(".two").focus(function(){
//		alert(1)
		$(".two").val("");
	})
	$(".two").blur(function(){
		val2=$(".two").val();
	})
	touch.on(".hu_jx","click",function(e){
		$.ajax({
			type:"post",
			url:"index.php?m=index&f=regmore&a=checkshengao",
			data:{
				uheight:val1,
				uweight:val2
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
	
})