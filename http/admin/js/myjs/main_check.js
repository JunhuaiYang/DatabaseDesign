// 主页面各种检测

//车辆信息录入检测检验

function new_car(){  
  var cplant = $("#cplant").val();
  var cbrand = $("#cbrand").val();
  var cmodel = $("#cmodel").val();
  var cstate = $("#cstate").val();
  var crent  = $("#crent").val();

  if(cplant==""||cbrand==""||cmodel==""||cstate==""||crent==""){  
        alert("请确认是否有空缺项！");  
        return false
  }else if(cplant.length<4||cplant.length>10){  
        alert("请检查车牌号是否正确");  
        return false
  }else if(crent.length<0){  
        alert("请检查租金是否正确");  
        return false
  }else if(cstate<0||cstate>10){  
      alert("车辆状态在0-10间");  
      return false
  }

  return true;  
 }  