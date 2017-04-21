function saveUser(){
	$.ajax({
		type:"post",
		url:"registerUser",
		async:true,
		data:{"Name":$("#Name").val(),"Phone":$("#Phone").val(),"Email":$("#Email").val(),"PassWord":$("#PassWord").val(),"#Remark":$("#Remark").val()},
		success:function(data){
			alert(data);
			$("#resetData").trigger("click");
		},
		error:function(data){
			
		}
	});
}
