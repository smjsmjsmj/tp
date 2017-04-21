function saveData(){
	$.ajax({
		type:"post",
		url:"/tp/CookeryManageSystem/users/saveData",
		data:{'Name':$("#username").val(),'Phone':$("#mobile").val(),'Email':$("#email").val(),'ID':$("#ID").val(),'Remark':$("#remark").val()},
		async:true,
		success:function(data){
			alert(data);
			var index = parent.layer.getFrameIndex(window.name);
			parent.location.reload();//="/tp/CookeryManageSystem/users/index";
			parent.layer.close(index);
		   var index = parent.layer.getFrameIndex(window.name);
		   parent.layer.close(index);
		},
		error:function(data){
			
		}
	});
}
