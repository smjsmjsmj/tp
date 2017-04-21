//initTable();
function searchTable(){
	
	$.ajax({
		type:"post",
		url:"/tp/CookeryManageSystem/Users/searchData",
		async:true,
		data:{"startTime":$("#logmin").val(),"endTime":$("#logmax").val(),"key":$("#UserName").val()},
		success:function(data){
			var str="";
			destroyDataTable();
			$("#tbodyData").empty();
			$.each(data, function(i) {
				str=str+'<tr class="text-c">'+
						'<td><input type="checkbox" value="" name="checkValue"></td>'+
						'<td>'+data[i].ID+'</td>'+
						'<td>'+data[i].Name+'</td>'+
						'<td>'+data[i].Phone+'</td>'+
						'<td>'+data[i].Email+'</td>'+
						'<td>'+data[i].CreationTime+'</td>'+
						'<td class="td-manage"> <a title="编辑" href="#" onclick=member_edit("编辑","/tp/CookeryManageSystem/Users/addData?ID='+data[i].ID
						+'","4","","510") class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick=change_password("修改密码","/tp/CookeryManageSystem/Users/updatePassWord?ID='+data[i].ID
						  +'","10001","600","270") href="javascript:;" title="修改密码"><i class="Hui-iconfont">&#xe63f;</i></a> <a title="删除" href="javascript:;" onclick="member_del(this,'+data[i].ID+')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>'+
						'</tr>';
			});
			$("#tbodyData").append(str);
			initDataTable();
		},
		error:function(data){
			
		}
	});
}
