$(function(){
	var lis=document.querySelectorAll(".lis h5");
	var mune=document.querySelectorAll(".mune");
	for(var i =0;i<lis.length;i++){
		lis[i].index=i;
		lis[i].onclick=function(){
			$(".mune").toggle();
		}
		
	}
})
