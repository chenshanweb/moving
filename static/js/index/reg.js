$(function(){
    $("#myform").validate({
        rules:{
            uname:{
                required:true,
                minlength:5
//              remote:{
//                  url:"index.php?m=index&f=login&a=usercheck",
//                  type:"post",
//                  dataType:"json",
//                  data:{
//                      uname:function(){
//                          return $("input[name=uname]").val()
//                      }
//                  }
//              }
            },
            upass:{
                required:true,
                minlength:5
            },
            upass2:{
                required:true,
                minlength:5,
                equalTo:"#upass"
            }
        },
        messages:{
            uname:{
                required:"用户名必填",
                minlength:"用户名不能少于5位",
                remote:"用户名已存在"
            },
            upass:{
                required:"密码必填",
                minlength:"密码不能少于5位"
            },
            upass2:{
                required:"必须确认密码",
                minlength:"密码不能少于5位",
                equalTo:"两次密码不一致"
            }
        }
    })
})