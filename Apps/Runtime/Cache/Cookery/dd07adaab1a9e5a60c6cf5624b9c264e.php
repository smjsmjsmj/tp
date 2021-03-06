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
<!--content-->
	<div class="menu">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>关于</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>有许多美食</span>
				</div>
				<div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>-->
				</div>
				<div class="clearfix"> </div>
			</div>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 3 );++$i; if(($mod) == "0"): ?><div class="menu-bottom animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms"><?php endif; ?>
			 	<div class="col-md-4 menu-bottom1">
					<div class="btm-right">
						<a href="#" onclick="hrefEvent(<?php echo ($val["ID"]); ?>)">
							<img src="http://<?php echo ($serverUrl); ?>/<?php echo ($val["PicUrl"]); ?>" alt="" class="img-responsive">
							<div class="captn">
								<h4><?php echo ($val["Name"]); ?></h4>
								<p>$<?php echo ($val["Cost"]); ?></p>				
							</div>
						</a>						
					</div>
				</div>
				<?php if(($mod) == "2"): ?><div class="clearfix"> </div>				
			</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<script>
		function hrefEvent(id){
			window.location.href="/tp/Cookery/Events/index?id="+id;
		}
	</script>
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