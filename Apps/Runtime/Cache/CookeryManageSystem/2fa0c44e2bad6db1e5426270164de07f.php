<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="/tp/Public/cookeryManageSystem/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/tp/Public/cookeryManageSystem/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/tp/Public/cookeryManageSystem/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="/tp/Public/cookeryManageSystem/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="/tp/Public/cookeryManageSystem/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="/tp/Public/cookeryManageSystem/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>评论管理</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 评论管理 <span class="c-gray en">&gt;</span> 意见反馈 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<input type="hidden" value="<?php echo ($serverUrl); ?>" id="serverValue"/>
	<div class="text-c"> 日期范围：
		<input type="text" onfocus="WdatePicker()" id="datemin" class="input-text Wdate" style="width:120px;">
		-
		<input type="text" onfocus="WdatePicker()" id="datemax" class="input-text Wdate" style="width:120px;">
		<input type="text" class="input-text" style="width:250px" placeholder="输入关键词" id="CommentName" name="">
		<button type="button" class="btn btn-success radius" id="" name="" onclick="searchTable()"><i class="Hui-iconfont">&#xe665;</i> 搜意见</button>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="member_ManyDel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> </div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-hover table-bg table-sort">
			<thead>
				<tr class="text-c">
					<th width="25"><input type="checkbox" name="" value=""></th>
					<th width="60">ID</th>
					<th width="60">菜品名称</th>
					<th>留言内容</th>
					<th>留言人</th>
					<th>留言人邮箱</th>
					<th>留言时间</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody id="tbodyData">
				<?php if(is_array($dataList)): $i = 0; $__LIST__ = $dataList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
						<td><input type="checkbox" value="<?php echo ($vo["ComId"]); ?>" name="checkValue"></td>
						<td><?php echo ($vo["ComId"]); ?></td>
						<td><a href="javascript:;"><i class="avatar size-L radius"><img alt="" src="http://<?php echo ($serverUrl); ?>/<?php echo ($vo["PicUrl"]); ?>"/></i></br><span><?php echo ($vo["Name"]); ?></span></a></td>
						<td class="text-l">	<div><?php echo ($vo["Content"]); ?></div></td>
						<td><?php echo ($vo["UserName"]); ?></td>
						<td><?php echo ($vo["ComEmail"]); ?></td>
						<td><?php echo ($vo["ComCreationTime"]); ?></td>
						<td class="td-manage"><a title="删除" href="javascript:;" onclick="member_del(this,<?php echo ($vo["ComId"]); ?>)" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/js/Comment.js"></script>
<script type="text/javascript">

var dataTable1;
initDataTable();
function initDataTable(){
	dataTable1=
   $('.table-sort').dataTable({
		"aaSorting": [[ 1, "desc" ]],//默认第几个排序
		"bStateSave": true,//状态保存
		"aoColumnDefs": [
		  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
		 // {"orderable":false,"aTargets":[0,2,4]}// 制定列不参与排序
		]
	});
	$('.table-sort tbody').on( 'click', 'tr', function () {
		if ( $(this).hasClass('selected') ) {
			$(this).removeClass('selected');
		}
		else {
			table.$('tr.selected').removeClass('selected');
			$(this).addClass('selected');
		}
	});
}
function destroyDataTable(){
	if(dataTable1!=null){
		dataTable1.fnDestroy();
	}
}

/*用户-添加*/
function member_add(title,url,w,h){
	layer_show(title,url,w,h);
}
/*用户-查看*/
function member_show(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*用户-停用*/
function member_stop(obj,id){
	layer.confirm('确认要停用吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_start(this,id)" href="javascript:;" title="启用"><i class="Hui-iconfont">&#xe6e1;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已停用</span>');
		$(obj).remove();
		layer.msg('已停用!',{icon: 5,time:1000});
	});
}

/*用户-启用*/
function member_start(obj,id){
	layer.confirm('确认要启用吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="member_stop(this,id)" href="javascript:;" title="停用"><i class="Hui-iconfont">&#xe631;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已启用</span>');
		$(obj).remove();
		layer.msg('已启用!',{icon: 6,time:1000});
	});
}
/*用户-编辑*/
function member_edit(title,url,id,w,h){
	layer_show(title,url,w,h);
}
/*密码-修改*/
function change_password(title,url,id,w,h){
	layer_show(title,url,w,h);	
}
/*用户-删除*/
function member_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		layer.msg('已删除!',{icon:1,time:1000});
		$.ajax({
			type:"post",
			url:"/tp/CookeryManageSystem/Comment/delData",
			async:true,
			data:{"ID":id}
		});
	});
}


function member_ManyDel(){
	layer.confirm('确认要全部删除吗？',function(index){
	$('input:checkbox[name=checkValue]:checked').each(function(i){
		$(this).parents("tr").remove();
		$.ajax({
			type:"post",
			url:"/tp/CookeryManageSystem/Comment/delData",
			async:true,
			data:{"ID":$(this).val()}
		});
      });
      layer.msg('已删除!',{icon:1,time:1000});
   });
	
}
</script>
</body>
</html>