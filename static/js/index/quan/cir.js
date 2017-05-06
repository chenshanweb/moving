
function drawcir(c,width,height,xianwid,bicolor,x,y,r,xiancolor,bai,fontsize,fontcolor){
		for(var i=0;i<c.length;i++){
			var ctx = c[i].getContext("2d");
			ctx.canvas.width = width;
			ctx.canvas.height = height;
			ctx.beginPath();
			ctx.lineWidth = xianwid; 
			ctx.strokeStyle = bicolor;
			ctx.arc(x, y, r, 0, 2 * Math.PI);
			ctx.stroke();			
			ctx.beginPath();
			ctx.lineWidth =xianwid;
			ctx.strokeStyle = xiancolor;
			ctx.arc(x, y, r, -90 * Math.PI / 180, (bai * 3.6 - 90) * Math.PI / 180);  
			ctx.stroke();
			
			ctx.font = fontsize+'px Arial';
			ctx.fillStyle = fontcolor;
			ctx.textBaseline = 'middle';
			ctx.textAlign = 'center';
			ctx.fillText(bai+'%', x, x);
		}		
	}
