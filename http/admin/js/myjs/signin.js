// 管理员登录验证JS

//登录检验
function signin()
{
    var username = $("#username").val();
    var password = $("#password").val();
    if (username == "" || username == null)
    {
        alert("请输入用户名");
        return false;
    }
    if (password == null || password == "")
    {
        alert("请输入密码");
        return false;
    }
    return true;
}

// 注册检验
function signup(){  
    var userName = $("#username").val();
    var pwd = $("#password").val();
    var repwd = $("#re-password").val();
    var name = $("#name").val();
    var position = $("#position").val();
    var userid = $("#userid").val();

    if(userName==""||pwd==""||repwd==""||name==""||position==""||userid==""){  
          alert("请确认是否有空缺项！");  
          return false
    }else if(userName.length<3||userName.length>20){  
          alert("用户名长度应在3到20个字符之间！");  
          return false
    }else if(userName==pwd||userName==repwd){  
          alert("密码或重复密码不能和用户名相同！");  
          return false
    }else if(pwd.length<6||pwd.length>20||repwd.length<6||repwd.length>20){  
          alert("密码或重复密码长度应在6到20个字符之间！");  
          return false
    }else if(pwd!=repwd){  
          alert("密码和重复密码不同，请重新输入！");  
          return false
    }else if(position.length>10){  
          alert("职位格式不正确！");  
          return false
    }else if(name.length<2||name.length>6){  
        alert("真实姓名不正确！");  
        return false
    }else if(userid.length!=18){  
        alert("身份证号不正确！");  
        return false
    }else if(userName.charAt(0)>=0&&userName.charAt(0)<=9){
        alert("用户名不能以数字字符开始！");  
              return false
    }

    return true;  
   }  

