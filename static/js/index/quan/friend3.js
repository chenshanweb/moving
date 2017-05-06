$(function(){
	function foot(){
			$(".zrl-foot-show").on("touchstart",function(){
				$(".zrl-foot-show").css("box-shadow","none");
				$(this).css("box-shadow","0 0 0.3rem #bbbaba");
			})
		}
		foot();
		
	function dianji(){
		var a=1;
		$(".dzleft").on("touchstart",function(){	
			if(a==1){
				a=2;
				$(this).find(".alerdy").css("display","none");
				$(this).find(".alerdy1").css("display","block");
			}else{
				a=1;
				$(this).find(".alerdy").css("display","block");
				$(this).find(".alerdy1").css("display","none");
			}			
		})
	}
	dianji();
})

