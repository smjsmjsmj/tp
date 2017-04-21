//initTable();
function searchTable(){
	var url=$("#serverValue").val();
	
	$.ajax({
		type:"post",
		url:"/tp/CookeryManageSystem/Comment/searchData",
		async:true,
		data:{"startTime":$("#datemin").val(),"endTime":$("#datemax").val(),"key":$("#CommentName").val()},
		success:function(data){
			var str="";
			destroyDataTable();
			$("#tbodyData").empty();
			$.each(data, function(i) {
				str=str+
					'<tr class="text-c">'+
						'<td><input type="checkbox" value="1" name=""></td>'+
						'<td>'+data[i].ComId+'</td>'+
						'<td><a href="javascript:;"><i class="avatar size-L radius"><img alt="" src="http://'+url+'/'+data[i].PicUrl+'"/></i></br><span>'+data[i].Name+'</span></a></td>'+
						'<td class="text-l"><div>'+data[i].Content+'</div></td>'+
						'<td>'+data[i].UserName+'</td>'+
						'<td>'+data[i].ComEmail+'</td>'+
						'<td>'+data[i].ComCreationTime+'</td>'+
						'<td class="td-manage"><a title="删除" href="javascript:;" onclick="member_del(this,'+data[i].ComId+')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>'+
					'</tr>';
			});
			$("#tbodyData").append(str);
			initDataTable();
		},
		error:function(data){
			
		}
	});
}
