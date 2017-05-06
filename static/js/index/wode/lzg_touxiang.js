
function upload(url,selecter,progressObj,success){
    var selecter=selecter||{};//传进来的input 即上传文件器
    if(typeof(selecter)=="string"){
        this.obj=document.querySelector(selecter);
    }else if(selecter.nodeName=="INPUT"){
        this.obj=selecter;
    }
    var progressObj=progressObj||{};//进度条
    if(typeof(progressObj)=="string"){
        this.progressObj=document.querySelector(progressObj);
    }else if(progressObj.nodeName=="DIV"){
        this.progressObj=progressObj;
    }
//	var imgObj=imgObj||{};//图片缓存
//	if(typeof(imgObj)=="string"){
//		this.imgObj=document.querySelector(imgObj);
//	}else if(imgObj.nodeName=="IMG"){
//		this.imgObj=imgObj;
//	}
    this.success=success;
    this.url=url;//后台地址
    this.data;//获取input中的数据
    this.types;//即文件类型
    this.size=1024*1024*20;//预设的文件最大值
    this.type=["jpg","jpeg","png","gif"];//预设的文件类型
}
upload.prototype={
    //主函数
    upload:function(){
        if(this.url){
            this.getCon();//运行获取内容
        }else{
            alert("请输入正确的地址");
        }
    },
    //获取内容
    getCon:function(){
        that=this;
        this.obj.onchange=function(){
            that.data=this.files[0];//获取第一个file文件
            var index=that.data.name.lastIndexOf(".")+1;//后缀名下标
            that.types=that.data.name.substr(index);//后缀名
            that.ajax();//执行ajax
        }
    },
    //判定符合条件
    check:function(){
        var flag=true;//开关
        for(var i=0;i<this.type.length;i++){
            if(this.type[i]==this.types){
                flag=false;//判定是否有该类型
                break;
            }
        }
        if(flag){
            alert("文件格式不对！");
            return false;
        }
        if(this.data.size>this.size){
            alert("文件过大!");
            return false;
        }
        return true;
    },
    //调用ajax
    ajax:function(){
        var that=this;
        if(this.check()){
            var formobj=new FormData();//创建表单
            formobj.append("file",this.data);
            var ajax=new XMLHttpRequest();
            ajax.open("post",this.url);//url
            ajax.send(formobj);
            // ajax.upload.onprogress=function(e){
            //     var loaded=e.loaded;
            //     var total=e.total;
            //     var scale=loaded/total*100;
            //     that.progressObj.style.width=scale.toFixed(2)+"%";
            //     that.progressObj.style.backgroundColor="greenyellow";
            //     that.progressObj.innerHTML=scale.toFixed(2)+"%";
            // }
            ajax.onload=function(){
                that.success(ajax.response);
            }
            //图片的缓存
//			var read=new FileReader();
//			read.readAsDataURL(that.data);//将文件的url解析给read
//			read.onload=function(e){
//				that.imgObj.src=e.target.result;//将图片文件复制给src
//			}
        }
    }
}














// window.onload=function(){
// 	//获取上传按钮
// 	var input1 = document.getElementById("upload");
//
// 	if(typeof FileReader==='undefined'){
// 	     //result.innerHTML = "抱歉，你的浏览器不支持 FileReader";
// 	     input1.setAttribute('disabled','disabled');
// 	}else{
// 	     input1.addEventListener('change',readFile,false);
// 	     /*input1.addEventListener('change',function (e){
// 	     	console.log(this.files);//上传的文件列表
// 	     },false); */
// 	}
// 	function readFile(){
// 		var file = this.files[0];//获取上传文件列表中第一个文件
// 		if(!/image\/\w+/.test(file.type)){
// 		//图片文件的type值为image/png或image/jpg
// 			alert("文件必须为图片！");
// 			return false;
// 		}
// 		// console.log(file);
// 		var reader = new FileReader();//实例一个文件对象
// 		reader.readAsDataURL(file);//把上传的文件转换成url
// 		//当文件读取成功便可以调取上传的接口
// 		// console.log(file)
// 		reader.onload = function(e){
// 			// console.log(this.result);//文件路径
// 			// console.log(e.target.result);//文件路径
// 			var data = e.target.result.split(',');
// 			var tp = (file.type == 'image/png')? 'png': 'jpg';
// 			var imgUrl = data[1];//图片的url，去掉(data:image/png;base64,)
// 			//需要上传到服务器的在这里可以进行ajax请求
//
//             $.ajax({
//                 url:imgUrl,
//                 type: 'POST',
//                 dataType: 'json',
//                 processData: false,
//                 contentType: false,
//                 data: data,
//                 success: function (responseText) {
//                     if(responseText.errorCode == 0){
//                         photo = responseText.result;
//                     }
//                 }
//             });
//
// 			// console.log(imgUrl);
// 			// 创建一个 Image 对象
// 			var image = new Image();
// 			// 创建一个 Image 对象
// 			// image.src = imgUrl;
// 			image.src = e.target.result;
// 			image.onload = function(){
// 				document.body.appendChild(image);
// 			}
//
// 			var image = new Image();
// 			// 设置src属性
// 			image.src = e.target.result;
// 			var max=80;
// 			// 绑定load事件处理器，加载完成后执行，避免同步问题
// 			image.onload = function(){
// 				// 获取 canvas DOM 对象
// 				var canvas = document.getElementById("cvs");
// 				// 如果高度超标 宽度等比例缩放 *=
// 				/*if(image.height > max) {
// 					image.width *= max / image.height;
// 					image.height = max;
// 				} */
// 				// 获取 canvas的 2d 环境对象,
// 				var ctx = canvas.getContext("2d");
// 				// canvas清屏
// 				ctx.clearRect(0, 0, canvas.width, canvas.height);
// 				// 重置canvas宽高
// 				/*canvas.width = image.width;
// 				canvas.height = image.height;
// 				if (canvas.width>max) {canvas.width = max;}*/
// 				// 将图像绘制到canvas上
// 				// ctx.drawImage(image, 0, 0, image.width, image.height);
// 				ctx.drawImage(image, 0, 0, 80, 80);
// 				// 注意，此时image没有加入到dom之中
// 			};
// 		}
// 	};
// };








