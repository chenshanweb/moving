// function ajax(obj){
// 	if(typeof(obj)!=="object"){
// 		console.error("请输入正确的参数");
// 		return false;
// 	}
// 	var url=obj.url;
// 	if(url==undefined){
// 		console.error("页面找不到");
// 	}
// 	var type=obj.type||"get";
// 	var data=obj.data||"";
// 	if(typeof(data)=="object"){
// 		for(var i in data){
// 			data+=i+"="+data[i]+"&";
// 		}
// 		// console.log(data)
// 		data=data.slice(0,-1);
// 	}
// 	var asynch=obj.asynch==undefined?true:obj.asynch;
// 	var datatype=obj.datetype||"text";
// 	var success=obj.success;
// 	var error=obj.error;
// 	var xmlobj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
// 	xmlobj.onreadystatechange=function(){
// 		if(xmlobj.readyState==4){
// 			if(xmlobj.status==200){
// 				var result;
// 				if(datatype=="xml"){
// 					result=xmlobj.responseXML;
// 				}else{
// 					result=xmlobj.response;
// 				}
// 				success(result);
// 			}else if(xmlobj.status==404){
// 				var cuo="页面不存在";
// 				error(cuo);
// 			}
// 		}

// 	}
// 	if(type=="get"){
// 		xmlobj.open(type,url+"?"+data,asynch);
// 		xmlobj.responseType=datetype;
// 		xmlobj.send();

// 	}else if(type=="post"){
// 		xmlobj.open(type,url,asynch);
// 		xmlobj.responseType=datetype;
// 		xmlobj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// 		xmlobj.send(data);
// 	}
// }




// 封装函数
// function ajax(obj){
// 	if(typeof(obj)!=="object"){
// 		console.error("请输入正确的参数");
// 		return false;
// 	}
// 	var url=obj.url;
// 	if(url==undefined){
// 		console.error("没有找到地址");
// 	}
// 	var type=obj.type||"get";
// 	var data=obj.data||"";
// 	if(typeof data=="object"){
// 		for(var i in data){
// 			data+=i+"="+data[i]+"&";
// 		}
// 		console.log(data);
// 		data=data.slice(0,-1);
// 	}
// 	var datatype=obj.datatype||"text";
// 	var asynch=obj.asynch==undefined?true:obj.asynch;
// 	var success=obj.success;
// 	var error=obj.error;
// 	var xmlobj=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
// 	xmlobj.onreadystatechange=function(){
// 		if(xmlobj.readyState==4){
// 			if(xmlobj.status==200){
// 				if(datatype=="xml"){
// 					var result=xmlobj.responseXML;
// 				}else{
// 					var result=xmlobj.response;
// 				}
// 				success(result);
// 			}else if(xmlobj.status==404){
// 				var cuo="页面不存在";
// 				error(cuo);
// 			}
// 		}
// 	}
// 	if(type=="get"){
// 		xmlobj.open(type,url+"?"+data,asynch);
// 		if(datatype!=="xml"){
// 			xmlobj.responseType=datatype;
// 		}
// 		xmlobj.send();
// 	}else if(type=="post"){
// 		xmlobj.open(type,url,asynch);
// 		xmlobj.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
// 		if(datatype!=="xml"){
// 			xmlobj.responseType=datatype;
// 		}
// 		xmlobj.send(data);
// 	}
// }






function ajax(obj) {
    if(typeof obj!=="object"){
        console.error("请输入正确的参数");
        return;
    }
    if (typeof obj.url!=="string")  {
        console.error("请输入正确的地址");
        return;
    }
    var url=obj.url;
    var data=obj.data||"";
    if(typeof data=="object"){
        var str="";
        for(var i in data){
            str+=i+"="+data[i]+"&";
        }
        data=str.slice(0,-1);
    }
    var type=obj.type||"get";
    var bool=obj.bool===undefined?true:obj.bool;
    var datatype=obj.dataType||"text";
    var success=obj.success;
    var error=obj.error;
    var xml=new XMLHttpRequest();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            if (xml.status==200){
                var result;
                if(datatype==="xml"){
                    result=xml.responseXML;
                }else{
                    result=xml.response;
                }
                success(result);
            }else if(xml.status==404){
                var info="页面未找到";
                error(info);
            }
        }
    }
    if (type=="get"){
        xml.open(type,url+"?"+data,bool);
        if(datatype!="xml") {
            xml.responseType = datatype;
        }
        xml.send();
    }
    if (type=="post"){
        xml.open(type,url,bool);
        xml.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        if(datatype!="xml") {
            xml.responseType = datatype;
        }
        xml.send(data)
    }

}