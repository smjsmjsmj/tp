//initData();
function findData(id){
	//alert($_SERVER['HTTP_HOST']);
	var key=$("#search").val();
	$.ajax({
		type:"post",
		url:"findData",
		data:{"id":id,"key":key},
		async:true,
		success:function(data){
			
			var url=$("#hiddenUrl").val();
			$("#findData").empty();
			var str="";
			$.each(data,function(i){				
				if(i%3==0){
					str=str+'<div class=" blog-head">';
				}
				str=str+'<div class="col-md-4 blog-top">'+
					'<div class="blog-in">'+
						'<a href="#" onclick="'+singleData(data[i].ID)+'"><img class="img-responsive" src="http://'+url+'/'+data[i].PicUrl+'" alt=" "></a>'+
						'<div class="blog-grid">'+
							'<h3><a href="#" onclick="'+singleData(data[i].ID)+'">'+data[i].Name+'</a></h3>'+
							'<div class="date">'+
								'<span class="date-in"><i class="glyphicon glyphicon-calendar"> </i>'+data[i].CreationTime+'</span>'+
							  ' <a href="single.html" class="comments"><i class="glyphicon glyphicon-comment"></i>24</a>'+
								'<div singleDataclass="clearfix"> </div>'+
							'</div>'+
							'<!--<p>{$val.MakeContent}</p>-->'+
							'<div class="more">'+
								'<a class="link link-yaku" href="#" onclick="'+singleData(data[i].ID)+'">'+
									'<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>'+
								'</a>'+
							'</div>'+
						'</div>'+
					'</div>'+
				'</div>';
				if((i+1)%3==0){
					str=str+'<div class="clearfix"> </div>'+
					'</div>';
				}
				
			});	
			$("#findData").append(str);
		},
		error:function(data){
			alert(JSON.stringify(data));
		}
	});
	
}

function singleData(id){
	 window.location.href="/tp/Cookery/Single/index?id="+id;
}
