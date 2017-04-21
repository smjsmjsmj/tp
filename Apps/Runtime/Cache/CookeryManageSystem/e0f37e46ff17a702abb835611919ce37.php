<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="renderer" content="webkit|ie-comp|ie-stand">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<LINK rel="Bookmark" href="/tp/Public/cookeryManageSystem/favicon.ico">
		<LINK rel="Shortcut Icon" href="/favicon.ico" />
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
		<title>美食之家</title>
	</head>

	<body>
		<header class="navbar-wrapper">
			<div class="navbar navbar-fixed-top">
				<div class="container-fluid cl">
					<a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">美食之家</a>
					<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml"></a> <span class="logo navbar-slogan f-l mr-10 hidden-xs"></span>
					<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>

					<nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
						<ul class="cl">
							<li class="dropDown dropDown_hover">
								<a href="#" class="dropDown_A"><?php echo ($userName); ?> <i class="Hui-iconfont">&#xe6d5;</i></a>
								<ul class="dropDown-menu menu radius box-shadow">
									<li>
										<a href="#" onclick="member_edit('编辑','/tp/CookeryManageSystem/Users/addData?ID=<?php echo ($userID); ?>','4','','510')">个人信息</a>
									</li>
									<li>
										<a href="#" onclick="login()">切换账户</a>
									</li>
									<li>
										<a href="#" onclick="logout()">退出</a>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<aside class="Hui-aside">
			<input runat="server" id="divScrollValue" type="hidden" value="" />
			<div class="menu_dropdown bk_2">
				<dl id="menu-picture">
					<dt><i class="Hui-iconfont">&#xe613;</i> 美食管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<li>
								<a _href="/tp/CookeryManageSystem/Goods/index" data-title="美食管理" href="javascript:void(0)">美食管理</a>
							</li>
						</ul>
					</dd>
				</dl>
				<?php if(($userID == 3)): ?><dl id="menu-comments">
					<dt><i class="Hui-iconfont">&#xe622;</i> 评论管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<li>
								<a _href="/tp/CookeryManageSystem/Comment/index" data-title="评论列表" href="javascript:;">评论列表</a>
							</li>
							<!--<li>
								<a _href="feedback-list.html" data-title="意见反馈" href="javascript:void(0)">意见反馈</a>
							</li>-->
						</ul>
					</dd>
				</dl>
				<dl id="menu-admin">
					<dt><i class="Hui-iconfont">&#xe62d;</i> 系统管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
					<dd>
						<ul>
							<!--<li><a _href="admin-role.html" data-title="角色管理" href="javascript:void(0)">角色管理</a></li>
					<li><a _href="admin-permission.html" data-title="权限管理" href="javascript:void(0)">权限管理</a></li>-->
							<li>
								<a _href="/tp/CookeryManageSystem/Users/index" id="userLink"data-title="人员列表" href="javascript:void(0)">人员列表</a>
							</li>
						</ul>
					</dd>
				 </dl>
				<?php else: endif; ?>
				
			</div>
		</aside>
		<div class="dislpayArrow hidden-xs">
			<a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a>
		</div>
		<section class="Hui-article-box">
			<div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
				<div class="Hui-tabNav-wp">
					<ul id="min_title_list" class="acrossTab cl">
						<li class="active"><span title="我的桌面" data-href="/tp/CookeryManageSystem/Welcome/index">我的桌面</span><em></em></li>
					</ul>
				</div>
				<div class="Hui-tabNav-more btn-group">
					<a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d4;</i></a>
					<a id="js-tabNav-next" class="btn radius btn-default size-S" href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a>
				</div>
			</div>
			<div id="iframe_box" class="Hui-article">
				<div class="show_iframe">
					<div style="display:none" class="loading"></div>
					<iframe scrolling="yes" frameborder="0" src="/tp/CookeryManageSystem/Welcome/index"></iframe>
				</div>
			</div>
		</section>
		<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="/tp/Public/cookeryManageSystem/lib/layer/2.1/layer.js"></script>
		<script type="text/javascript" src="/tp/Public/cookeryManageSystem/static/h-ui/js/H-ui.js"></script>
		<script type="text/javascript" src="/tp/Public/cookeryManageSystem/static/h-ui.admin/js/H-ui.admin.js"></script>
		<script type="text/javascript">
			/*资讯-添加*/
			function article_add(title, url) {
				var index = layer.open({
					type: 2,
					title: title,
					content: url
				});
				layer.full(index);
			}
			/*图片-添加*/
			function picture_add(title, url) {
				var index = layer.open({
					type: 2,
					title: title,
					content: url
				});
				layer.full(index);
			}
			/*产品-添加*/
			function product_add(title, url) {
				var index = layer.open({
					type: 2,
					title: title,
					content: url
				});
				layer.full(index);
			}
			/*用户-添加*/
			function member_add(title, url, w, h) {
				layer_show(title, url, w, h);
			}
		</script>
		<script type="text/javascript">
			var _hmt = _hmt || [];
			(function() {
				var hm = document.createElement("script");
				hm.src = "//hm.baidu.com/hm.js?080836300300be57b7f34f4b3e97d911";
				var s = document.getElementsByTagName("script")[0];
				s.parentNode.insertBefore(hm, s)
			})();
			var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
			document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F080836300300be57b7f34f4b3e97d911' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script>
			function logout() {
				if(confirm("您确定要关闭本页吗？")) {
					window.location.href = "/tp/CookeryManageSystem/Index/index";
				} else {}
			}

			function login() {
				window.location.href = "/tp/CookeryManageSystem/Index/index";
			}
			
			/*用户-编辑*/
			function member_edit(title,url,id,w,h){
				layer_show(title,url,w,h);
			}
		</script>
	</body>

</html>