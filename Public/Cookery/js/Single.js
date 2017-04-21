
    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('editor');
function submitData(){
	$.ajax({
		type:"post",
		url:"saveData",
		async:true,
		data:{"UserName":$("#UserName").val(),
		      "Email":$("#Email").val(),
		      "Content":$("#Content").val(),
		      "CookId":$("#hiddValue").val()},
		success:function(data){
			var txt=$("#commentCount").text();
			var strr=txt.split(' ');
			$("#commentCount").text((parseInt(strr[1])+1)+" 评论");
     		alert("留言成功 !");
			var str=
			'<div class="media wow fadeInLeft animated" data-wow-delay=".5s">'+
			'<div class="code-in">'+
							'<p class="smith">'+
								'<a href="#">'+data.UserName+'</a> <span>'+data.CreationTime+'</span></p>'+
							'<p class="reply">'+
								'<a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a>'+
							'</p>'+
							'<div class="clearfix"> </div>'+
						'</div>'+
						'<div class="media-left">'+
							'<a href="#">'+
									'<img src="/tp/public/cookery/images/si1.jpg" alt="">'+
							'</a>'+
						'</div>'+
						'<div class="media-body">'+
							'<p>'+data.Content+'</p>'+
						'</div>'+
						'</div>';
			$("#commentDataList").append(str);
			$("#resetdata").trigger("click");
			UE.getEditor('editor').setContent("");
			$("#Content").val("");
			
		},
		error:function(data){
		}
	});
}


function details(id){
	window.location.href="/tp/cookery/Events/index?id="+id;
}

function initContent(){
	var str=UE.getEditor('editor').getContent();
	str=str.replace('<table>','<table border="1" cellpadding="0" cellspacing="0" style="width: 500px;">');
	$("#Content").val(str);
}


