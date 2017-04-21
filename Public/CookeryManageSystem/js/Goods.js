//initTable();
function searchTable(){
	var url=$("#serverValue").val();
	$.ajax({
		type:"post",
		url:"/tp/CookeryManageSystem/Goods/searchData",
		async:true,
		data:{"startTime":$("#logmin").val(),"endTime":$("#logmax").val(),"key":$("#GoodName").val()},
		success:function(data){
			var str="";
			destroyDataTable();
			$("#tbodyData").empty();
			$.each(data, function(i) {
			str=str+'<tr class="text-c">'+
					'<td><input name="checkValue" type="checkbox" value=""></td>'+
					'<td>'+data[i].ID+'</td>'+
					'<td>'+data[i].Name+'</td>'+
					'<td><a href="javascript:;" target="_blank"><img width="100" class="picture-thumb" src="http://'+url+'/'+data[i].PicUrl+'"></a></td>'+
					'<td class="text-c">'+data[i].Cost+'</td>'+
					'<td>'+data[i].Creator+'</td>'+
					'<td class="td-status"><span class="label label-success radius">'+data[i].CreationTime+'</span></td>'+
					'<td class="td-manage"> <a style="text-decoration:none" class="ml-5" onClick="#" href="/tp/CookeryManageSystem/Goods/addData?ID='+data[i].ID+'" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'+data[i].ID+')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>'+
				'</tr>';
			});
			$("#tbodyData").append(str);
			initDataTable();
		},
		error:function(data){
			
		}
	});
}
