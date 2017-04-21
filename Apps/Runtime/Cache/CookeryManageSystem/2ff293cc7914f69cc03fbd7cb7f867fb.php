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
<title>美食列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 美食管理 <span class="c-gray en">&gt;</span> 美食列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c"> 日期范围：
		<!--<input type="text" onfocus=@"WdatePicker({maxDate:'#F{$dp.$D('logmax')||'%y-%M-%d'}'})"id="logmin" class="input-text Wdate" style="width:120px;"/>-->
		<input type="text" onfocus="WdatePicker()"id="logmin" class="input-text Wdate" style="width:120px;"/>
		-
		<!--<input type="text" onfocus="WdatePicker({minDate:'#F{$dp.$D('logmin')}',maxDate:'%y-%M-%d'})" id="logmax" class="input-text Wdate" style="width:120px;"/>-->
		<input type="text" onfocus="WdatePicker()" id="logmax" class="input-text Wdate" style="width:120px;"/>
		<input type="text" name="" id="GoodName" placeholder="美食名称" style="width:250px" class="input-text"/>
		<button name="" id="" class="btn btn-success" type="button" onclick="searchTable()"><i class="Hui-iconfont">&#xe665;</i> 搜美食</button>
	</div>
	<input type="hidden" id="serverValue" value="<?php echo ($serverUrl); ?>"/>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="pic_ManyDel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" href="/tp/CookeryManageSystem/Goods/addData"><i class="Hui-iconfont">&#xe600;</i> 添加美食</a></span></div>
	<div class="mt-20">
		<table class="table table-border table-bordered table-bg table-hover table-sort" id="table1">
			<thead>
				<tr class="text-c">
					<th width="40"><input name="" type="checkbox" value=""></th>
					<th width="80">ID</th>
					<th width="100">名称</th>
					<th width="100">图片</th>
					<th>花费</th>
					<th width="150">上传人</th>
					<th width="150">上传时间</th>
					<th width="100">操作</th>
				</tr>
			</thead>
			<tbody id="tbodyData">
				<?php if(is_array($dataList)): $i = 0; $__LIST__ = $dataList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td><input id="" name="checkValue" type="checkbox" value="<?php echo ($vo["ID"]); ?>"></td>
					<td><?php echo ($vo["ID"]); ?></td>
					<td><?php echo ($vo["Name"]); ?></td>
					<td><a href="javascript:;" target="_blank"><img width="100" class="picture-thumb" src="http://<?php echo ($serverUrl); ?>/<?php echo ($vo["PicUrl"]); ?>"></a></td>
					<td class="text-c"><?php echo ($vo["Cost"]); ?></td>
					<td><?php echo ($vo["userNames"]); ?></td>
					<td class="td-status"><span class="label label-success radius"><?php echo ($vo["CreationTime"]); ?></span></td>
					<td class="td-manage"> <a style="text-decoration:none" class="ml-5"  href="/tp/CookeryManageSystem/Goods/addData?ID=<?php echo ($vo["ID"]); ?>" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,<?php echo ($vo["ID"]); ?>)" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/static/h-ui/js/H-ui.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/static/h-ui.admin/js/H-ui.admin.js"></script> 
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/js/Goods.js"></script> 
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
	//  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});
}
function destroyDataTable(){
	if(dataTable1!=null){
		dataTable1.fnDestroy();
	}
}

/*图片-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-查看*/
function picture_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-审核*/
function picture_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}
/*图片-下架*/
function picture_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*图片-发布*/
function picture_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}
/*图片-申请上线*/
function picture_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}
/*图片-编辑*/
function picture_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}
/*图片-删除*/
function picture_del(obj,id){
	layer.confirm('确认要删除吗？',function(index){
		$(obj).parents("tr").remove();
		
		layer.msg('已删除!',{icon:1,time:1000});
		$.ajax({
			type:"post",
			url:"/tp/CookeryManageSystem/Goods/delData",
			async:true,
			data:{"ID":id}
		});
	});
}

function pic_ManyDel(){
	layer.confirm('确认要全部删除吗？',function(index){
	$('input:checkbox[name=checkValue]:checked').each(function(i){
		$(this).parents("tr").remove();
		$.ajax({
			type:"post",
			url:"/tp/CookeryManageSystem/Goods/delData",
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