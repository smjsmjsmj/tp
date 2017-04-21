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
<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="/tp/Public/cookery/js/move-top.js"></script>
		<script type="text/javascript" src="/tp/Public/cookery/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
	<!-- start-smoth-scrolling -->
<link href="/tp/Public/cookery/css/styles.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/tp/Public/cookery/css/component.css" />
	<!-- animation-effect -->
<link href="/tp/Public/cookery/css/animate.min.css" rel="stylesheet"> 
<script src="/tp/Public/cookery/js/wow.min.js"></script>
<script src="/tp/Public/cookery/js/Index.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
 <div class="header">
	<div class="container">
		<div class="logo animated wow pulse" data-wow-duration="1000ms" data-wow-delay="500ms">
			<h1><a href="index.html"><span>C</span><img src="/tp/Public/cookery/images/oo.png" alt=""><img src="/tp/Public/cookery/images/oo.png" alt="">kery</a></h1>
			<a href="/tp/CookeryManageSystem/Index/index">跳转到管理后台</a>
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
						<li><a  href="<?php echo u('Contact/index');?>">加入我们</a></li>
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
		<div class="banner">
			<p class="animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">一起来迎接美食的诱惑</p>
			<label></label>
			<h4 class="animated wow fadeInTop" data-wow-duration="1000ms" data-wow-delay="500ms">欢迎来到美食之家</h4>
			<a class="scroll down" href="#content-down"><img src="/tp/Public/cookery/images/down.png" alt=""></a>
		</div>
</div>
<!--content-->
<div class="content" id="content-down">
	<div class="content-top-top">
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
			<div class="content-mid">					
			   <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class="col-md-4 food-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
							<div class=" hover-fold">
							  <h4><?php echo ($val["Name"]); ?></h4>
							  <div class="top" >
							  	<!--//style="background: url(http://<?php echo ($serverUrl); ?>/<?php echo ($val["PicUrl"]); ?>) top ;background-size:cover;"-->
								<div class="front face"></div>
								<div class="back face">
								<p><?php echo ($val["briefIntroduction"]); ?></p>
								</div>
							  </div>
							  <div class="bottom" ></div>
							  <!--//style="background: url(http://<?php echo ($serverUrl); ?>/<?php echo ($val["PicUrl"]); ?>) bottom ;background-size:cover;"-->
							</div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>		
									
				
				<!--<div class="col-md-4 food-grid animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>FOOD</h4>
					  <div class="top">
						<div class="front face front1"></div>
						<div class="back face">
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
						</div>
					  </div>
					  <div class="bottom bottom1"></div>
					</div>
				</div>
				<div class="col-md-4 food-grid animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class=" hover-fold">
					  <h4>FOOD</h4>
					  <div class="top">
						<div class="front face front2"></div>
						<div class="back face">
						<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour</p>
						</div>
					  </div>
					  <div class="bottom bottom2"></div>
					</div>
				</div>-->
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--services-->
<div class="services">
	<div class="container">
		<div class="services-top">		
			<div class="col-md-8 services-right animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p>这里有各种各样的美食，在浏览之余，您还可以选择跟随着进行操作，学习</p>
			</div>
			<div class="col-md-4 services-left animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>精品推荐</h3>
				<label><i class="glyphicon glyphicon-menu-up"></i></label>
				<span></span>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="service-top">
			<div class="col-md-5 service-top animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class=" service-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-leaf"></a>
						</div>
					</div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-star-empty"></a>
						</div>					
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class=" service-grid">
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-folder-open"></a>
						</div>					
						</div>
					<div class="col-md-6 service-grid1">
						<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
							<a href="#" class="hi-icon hi-icon-mobile glyphicon glyphicon-home"></a>
						</div>					
						</div>
					<div class="clearfix"> </div>
				</div>
				
			</div>
			<div class="col-md-7 service-bottom animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms" id="cookeryData">
		   <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><div class=" service-bottom1">
					<div class="ser-bottom">
						<img src="http://<?php echo ($serverUrl); ?>/<?php echo ($val["PicUrl"]); ?>" style="background:  no-repeat;background-size:cover;" class="img-responsive" alt="">
					</div>
					<div class="ser-top " >
						<h5><?php echo ($val["Name"]); ?></h5>
						<p><?php echo ($val["briefIntroduction"]); ?></p>
					</div>
					<div class="clearfix"> </div>
			</div><?php endforeach; endif; else: echo "" ;endif; ?>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!--//services-->
<!--news-->
	<div class="content-top-top">
		<div class="container">
			<div class="content-top">
				<div class="col-md-4 content-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>展示</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>精美推荐</span>
				</div>
				<div class="col-md-8 content-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<p></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="news-bottom">
			<!--	<div class="news-bot">-->
					
			<?php if(is_array($data1)): $i = 0; $__LIST__ = $data1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val1): $mod = ($i % 2 );++$i; if(($mod) == "0"): ?><div class="news-bot"><?php endif; ?>
		            <div class="col-md-6 news-bottom1 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
						<a href="#" onclick="singleData(<?php echo ($val1["ID"]); ?>)">
							<div class="content-item" style="background: url(http://<?php echo ($serverUrl); ?>/<?php echo ($val1["PicUrl"]); ?>) no-repeat;background-size:cover;">
								<div class="overlay"></div>
								<div class=" news-bottom2">
									<ul class="grid-news">
										<li><span><i class="glyphicon glyphicon-calendar"> </i><?php echo ($val1["CreationTime"]); ?></span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-comment"> </i><?php echo ($val1["commentCount"]); ?>  Comment</span><b>/</b></li>
										<li><span><i class="glyphicon glyphicon-share"> </i>Share</span></li>
									</ul>
									<p><?php echo ($val1["briefIntroduction"]); ?></p>
								</div>
							</div>
						</a>
					</div>
					<?php if(($mod) == "1"): ?><div class="clearfix"> </div>
				</div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			
			</div>
		</div>
	</div>
<!--//news-->
</div>
<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a href="index.html">主页</a></li>
						<li><a  href="menu.html">菜单</a></li>
						<li><a  href="blog.html">博客</a></li>
						<li><a  href="events.html">操作</a></li>
						<li><a  href="contact.html">联系我</a></li>
					</ul>					
						<span>美食之家</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>跟随我们</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
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
	<script>
		function singleData(id){
	 window.location.href="/tp/Cookery/Single/index?id="+id;
}
	</script>
</body>
</html>