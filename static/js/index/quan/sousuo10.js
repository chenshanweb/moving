$(function(){
	function dianji(){
		var a=1;
		$(".dzleft").on("click",function(){	
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