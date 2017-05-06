//页面以x轴等比缩放
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
document.addEventListener("DOMContentLoaded",function(){
	resize(750,"x");
})

    
$(function(){
//	功能区圆点旋转
	function circle(){
		$(".zrl-circle1").on("touchstart",function(){
			$(".zrl-circle1").find(".zrl-circle2").css("transform","scale(1)");
			$(this).find(".zrl-circle2").css("transform","scale(2)");
		})
    }
	circle();


//	私人订制圆圈
	function cir(){
		function drawcir(c,width,height,xianwid,bicolor,x,y,r,xiancolor,bai,fontsize,fontcolor){
			for(var i=0;i<c.length;i++){
				var ctx = c[i].getContext("2d");
				ctx.canvas.width = width;
				ctx.canvas.height = height;
				ctx.beginPath();
				ctx.lineWidth = xianwid; //10px
				ctx.strokeStyle = bicolor;
				ctx.arc(x, y, r, 0, 2 * Math.PI);
				ctx.stroke();			
				ctx.beginPath();
				ctx.lineWidth =xianwid;
				ctx.strokeStyle = xiancolor;
				ctx.arc(x, y, r, -90 * Math.PI / 180, (bai * 3.6 - 90) * Math.PI / 180);  
				ctx.stroke();			
				ctx.font = fontsize+'rem Arial';
				ctx.fillStyle = fontcolor;
				ctx.textBaseline = 'middle';
				ctx.textAlign = 'center';
				ctx.fillText(bai+'%', x, x);
			}	
		}
		var canvas=$("canvas").eq(0);
		var width=Math.floor($(".zrl-srdz-pragress").width()-1);
		var x=width/2;
		var r=x-2;
		drawcir(canvas,width,width,2,"#f4e718",x,x,r,"#26c70a",80,0.16,"#000");
		//第二个圆
		var canvas=$("canvas").eq(1);
		drawcir(canvas,width,width,2,"#f4e718",x,x,r,"#26c70a",20,0.16,"#000");
	}
	cir();

})
