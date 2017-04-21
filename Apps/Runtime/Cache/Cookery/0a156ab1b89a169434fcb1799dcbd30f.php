<?php if (!defined('THINK_PATH')) exit();?><!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>美食之家</title>
<link href="/tp/Public/cookery/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/tp/Public/cookery/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="/tp/Public/cookery/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="/tp/Public/cookery/css/styles.css" rel="stylesheet">
<!-- animation-effect -->
<link href="/tp/Public/cookery/css/animate.min.css" rel="stylesheet"> 
<script src="/tp/Public/cookery/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><span>C</span><img src="/tp/Public/cookery/images/oo.png" alt=""><img src="/tp/Public/cookery/images/oo.png" alt="">kery</a></h1>
		</div>
		<div class="nav-icon">		
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a class="active" href="<?php echo u('Index/index');?>">主页</a></li>
						<li><a  href="<?php echo u('Menu/index');?>">菜单</a></li>
						<li><a  href="<?php echo u('Blog/index');?>">博客</a></li>
						<!--<li><a  href="typo.html">代码</a></li>-->
						<!--<li><a  href="<?php echo u('Events/index');?>">操作</a></li>-->
						<li><a  href="<?php echo u('Contact/index');?>">联系我</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->	
		
</div>
<script src="/tp/Public/Cookery/js/Blog.js"></script>

<!-- 引入sns.js -->
<link rel="stylesheet" href="/tp/Public/cookery/css/share.css">

<!--
	ueditor
-->
<script src="/tp/Public/Cookery/js/ueditor/ueditor.config.js"></script>
<script src="/tp/Public/Cookery/js/ueditor/ueditor.all.min.js"></script>
<script src="/tp/Public/Cookery/js/ueditor/zh-cn.js"></script>
<!--content-->
<div class="blog">
	<div class="container">
		<input type="hidden" value="<?php echo ($CookId); ?>" id="hiddValue" />
		<div class="col-md-9 ">
			<!--content-->
			<div class="single">
				<div class="single-top">
					<img class="img-responsive wow fadeInUp animated" data-wow-delay=".5s" src="http://<?php echo ($serverUrl); ?>/<?php echo ($singleData["PicUrl"]); ?>" alt="" />
					<div class="lone-line">
						<h4><?php echo ($singleData["Name"]); ?></h4>
						<ul class="grid-blog">
							<li><span><i class="glyphicon glyphicon-time"> </i><?php echo ($singleData["CreationTime"]); ?></span></li>
							<li>
								<a href="#div1" id="commentCount"><i class="glyphicon glyphicon-comment"> </i><?php echo ($singleData["commentCount"]); ?> 评论</a>
							</li>
							<li>
								<a href="#" onclick="details(<?php echo ($singleData["ID"]); ?>)"><i class="glyphicon glyphicon-th"> </i>详情</a>
							</li>
							<span>分享到：</span>
							<div class="sns-share" style="margin-top: -27px;margin-left: 333px;">
								<a href="" class="qzone"><i class="icon iconfont icon-qzone"></i></a>
								<a href="" class="qq"><i class="icon iconfont icon-qq"></i></a>
								<a href="" class="weibo"><i class="icon iconfont icon-weibo"></i></a>
								<a href="" class="wechat"><i class="icon iconfont icon-wechat"></i></a>
								<a href="" class="douban"><i class="icon iconfont icon-douban"></i></a>
							</div>
						</ul>
						<p class="wow fadeInLeft animated" data-wow-delay=".5s"><?php echo ($singleData["briefIntroduction"]); ?></span>
						</p>
					</div>
				</div>
				<div class="comment" id="commentDataList">
					<h3>评论</h3>

					<?php if(is_array($commentList)): $i = 0; $__LIST__ = $commentList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="media wow fadeInLeft animated" data-wow-delay=".5s"><?php endif; ?>
						<?php if(($mod) == "1"): ?><div class="media media-1 wow fadeInUp animated" data-wow-delay=".5s"><?php endif; ?>
						<div class="code-in">
							<p class="smith">
								<a href="#"><?php echo ($vo["UserName"]); ?></a> <span><?php echo ($vo["CreationTime"]); ?></span></p>
							<!--<p class="reply">
								<a href="#"><i class="glyphicon glyphicon-repeat"> </i>REPLY</a>
							</p>-->
							<div class="clearfix"> </div>
						</div>
						<div class="media-left">
							<a href="#">
								<?php if(($mod) == "0"): ?><img src="/tp/Public/cookery/images/si1.jpg" alt=""><?php endif; ?>
								<?php if(($mod) == "1"): ?><img src="/tp/Public/cookery/images/si.jpg" alt=""><?php endif; ?>
							</a>
						</div>
						<div class="media-body">
							<p><?php echo ($vo["Content"]); ?></p>
						</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>
					</div>
				</div>
				<div class="leave" id="div1">
					<h3>您的看法</h3>
					<form action="" method="post" id="form1">
						<div class="single-grid wow fadeInLeft animated" data-wow-delay=".5s">

							<input type="text" id="UserName" name="UserName" value="姓名" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '姓名';}">

							<input type="text" id="Email" name="Email" value="邮箱" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '邮箱';}">

							<!--<input type="text" value="Web site" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Web site';}">-->
							<!--<textarea value=" " id="Content" name="Content" onfocus="this.value='';" onblur="if (this.value == '') {this.value = '您的看法是...';}">您的看法</textarea>-->
							<label style="color: #000000;">留言内容:</label>
							<input type="hidden" id="Content" />
							<div onmousemove="initContent()" style="  margin-top: 10px;">
								<textarea id="editor"></textarea>
							</div>

							<label class="hvr-rectangle-out">
								<input type="button" value="发布" onclick="submitData()">
								<input type="reset" id="resetdata" value="重置"/>
						</label>
						</div>
					</form>
				</div>

			</div>
			<!---->

			<!--//content-->
		</div>
	</div>
</div>

<!--//content-->
<script src="/tp/Public/Cookery/js/Single.js"></script>

<script src="http://apps.bdimg.com/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
<script src="/tp/Public/Cookery/js/share/jquery.qrcode.min.js"></script>
<script src="/tp/Public/Cookery/js/share/share.js"></script>

<script>
	$(function() {
		var $config = {
			url: 'http://www.GoodHome.com', // 网址，默认使用 window.location.href
			site: '', // 来源（QQ空间会用到）, 默认读取head标签：<meta name="site" content="http://overtrue" />
			title: '美食之家', // 标题，默认读取 document.title
			description: '分享美食，就来美食之家吧！！！', // 描述, 默认读取head标签：<meta name="description" content="PHP弱类型的实现原理分析" />
			iamge: '', // 图片, 默认取网页中第一个img标签
			target: '_blank' //打开方式
		};

		$('.sns-share').share($config);
	});
</script>
<!--footer-->
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
					<li><a class="active" href="<?php echo u('Index/index');?>">主页</a></li>
						<li><a  href="<?php echo u('Menu/index');?>">菜单</a></li>
						<li><a  href="<?php echo u('Blog/index');?>">博客</a></li>
						<!--<li><a  href="typo.html">代码</a></li>-->
						<li><a  href="<?php echo u('Events/index');?>">操作</a></li>
						<li><a  href="<?php echo u('Contact/index');?>">联系我</a></li>
					</ul>					
						<span>美食之家</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>跟随我们</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>-->
					<ul class="social-ic">
						<li><a href="#"><i></i></a></li>
						<li><a href="#"><i class="ic"></i></a></li>
						<li><a href="#"><i class="ic1"></i></a></li>
						<li><a href="#"><i class="ic2"></i></a></li>
						<li><a href="#"><i class="ic3"></i></a></li>
					</ul>

				</div>
			<div class="clearfix"> </div>
					
			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Cookery  <a href="#" target="">美食之家</a> </p>
		</div>
	</div>		
	<!--//footer-->
</body>
</html>