function login(){
	if($("#userName").val()==null || $("#userName").val()=="" || $("#passWord").val()=="" || $("#passWord").val()==null){
		alert("请完整填写登陆账号密码!");
		return ;
		
	}
	if(!validateCode()){
		return;
	}
	$.ajax({
		type:"post",
		url:"/tp/CookeryManageSystem/Index/login",
		async:true,
		data:{"userName":$("#userName").val(),"passWord":$("#passWord").val()},
		success:function(data){
			//alert(JSON.stringify(data));
			window,location.href="/tp/CookeryManageSystem/Admin/index";
			//$("#userName").val("");
			
		},
		error:function(data){
			alert(JSON.stringify(data));
			$("#passWord").val("");
		}
	});
}


function registerUser(){
	if($("#pwd").val()!=$("#passwd2").val()){
		alert("两次密码输入不一致！");
		return;
	}
	if($("#pwd").val()=="" || $("#pwd").val()==null || $("#passwd2").val()=="" || $("#passwd2").val()==null || $("#name").val()=="" || $("#name").val()==null){
		alert("请完整填写信息！");
		return;
	}
	$.ajax({
		type:"post",
		url:"/tp/CookeryManageSystem/Index/registerUser",
		async:true,
		data:{"Name":$("#name").val(),"PassWord":$("#pwd").val(),"Phone":$("#phone").val(),"Email":$("#email").val()},
		success:function(data){
			alert(JSON.stringify(data));
			window.location.reload();
		},
		error:function(data){
			alert(JSON.stringify(data));
		}
	});
}
