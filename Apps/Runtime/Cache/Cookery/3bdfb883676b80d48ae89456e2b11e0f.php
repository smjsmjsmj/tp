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

<!--content-->
<div class="blog">
	<div class="container">
		<div class="menu-top">
			<div class="col-md-4 menu-left">
				<h3>Blog</h3>
				<label><i class="glyphicon glyphicon-menu-up"></i></label>
				<span>美食之家</span>
				<input type="hidden" value="<?php echo ($serverUrl); ?>" id="hiddenUrl"/>
			</div>
			<div class="col-md-8 menu-right">
				<!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>-->
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-9 blog-header" id="findData">

			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 3 );++$i; if(($mod) == "0"): ?><div class=" blog-head"><?php endif; ?>
				<div class="col-md-4 blog-top">
					<div class="blog-in">
						<a href="http://<?php echo ($serverUrl); ?>/<?php echo ($val["PicUrl"]); ?>" target="_blank"><img class="img-responsive" src="http://<?php echo ($serverUrl); ?>/<?php echo ($val["PicUrl"]); ?>" alt=" "></a>
						<div class="blog-grid">
							<h3><a href="#"onclick="singleData(<?php echo ($val["ID"]); ?>)"><?php echo ($val["Name"]); ?></a></h3>
							<div class="date">
								<span class="date-in"><i class="glyphicon glyphicon-calendar"> </i><?php echo ($val["CreationTime"]); ?></span>
								<a href="#" onclick="singleData(<?php echo ($val["ID"]); ?>)" class="comments"><i class="glyphicon glyphicon-comment"></i><?php echo ($val["commentCount"]); ?></a>
								<div class="clearfix"> </div>
							</div>
							<!--<p><?php echo ($val["MakeContent"]); ?></p>-->
							<div class="more">
								<a class="link link-yaku" href="#" onclick="singleData(<?php echo ($val["ID"]); ?>)">
									<span>R</span><span>e</span><span>a</span><span>d</span> <span>M</span><span>o</span><span>r</span><span>e</span>
								</a>
							</div>
							
						</div>
					</div>
				</div>

				<?php if(($mod) == "2"): ?><div class="clearfix"> </div>
					</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
		</div>
	</div>
	<div class="col-md-3 categories-grid">
		<div class="search-in animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h4>寻找美食</h4>
			<div class="search">
			
					<input type="text" placeholder="Search" required="" id="search">
					<input type="submit" value="" onclick="findData(null)">
			
			</div>
		</div>
		<div class="grid-categories animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h4>筛选</h4>
			<ul class="popular">
				<li>
					<a href="#" onclick="findData(0)"><i class="glyphicon glyphicon-menu-right"> </i>Breakfast</a>
				</li>
				<li>
					<a href="#" onclick="findData(1)"><i class="glyphicon glyphicon-menu-right"> </i>Lunch</a>
				</li>
				<li>
					<a href="#" onclick="findData(2)"><i class="glyphicon glyphicon-menu-right"> </i>Dinner</a>
				</li>
				<li>
					<a href="#" onclick="findData(3)"><i class="glyphicon glyphicon-menu-right"> </i>Dessert</a>
				</li>

			</ul>
		</div>
		<div class="blog-bottom animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h4>Recent Posts</h4>
			
			<?php if(is_array($data)): $i = 0; $__LIST__ = array_slice($data,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="product-go">
					<a href="#" class="fashion"><img class="img-responsive " src="http://<?php echo ($serverUrl); ?>/<?php echo ($vo["PicUrl"]); ?>" alt=""></a>
					<div class="grid-product">
						<a href="#" class="elit" onclick="singleData(<?php echo ($vo["ID"]); ?>)"><?php echo ($vo["Name"]); ?></a>
						<p>一起来学习吧!</p>
					</div>
					<div class="clearfix"> </div>
		   		</div><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>

	</div>
	<div class="clearfix"> </div>
</div>
</div>
<!--//content-->
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