function saveData(){
	$.ajax({
		type:"post",
		url:"/tp/CookeryManageSystem/Goods/saveData",
		data:{'Name':$("#Name").val(),'Cost':$("#Cost").val(),'Material':$("#Material").val(),'Type':$("#Type").val(),'briefIntroduction':$("#briefIntroduction").val(),'PicUrl':$("#PicUrl").val(),'MakeContent':$("#MakeContent").val(),'ID':$("#dataID").val()},
		async:true,
		success:function(data){
			alert(data);
			window.location.href="/tp/CookeryManageSystem/Goods/index";
		},
		error:function(data){
			
		}
	});
}
