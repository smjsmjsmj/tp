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
<script src="/tp/Public/Cookery/js/Contact.js"></script>
  <link rel="stylesheet" href="http://cache.amap.com/lbs/static/main1119.css"/>
    <script src="http://cache.amap.com/lbs/static/es5.min.js"></script>
    <script src="http://webapi.amap.com/maps?v=1.3&key=您申请的key值"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
<!--content-->
<div class="contact">
	<div class="container">
		<div class="menu-top">
			<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>加入我们</h3>
				<label><i class="glyphicon glyphicon-menu-up"></i></label>
				<span></span>
			</div>
			<div class="col-md-8 menu-right animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
				<!--<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour , or randomised words which don't look even slightly believable.There are many variations by injected humour. There are many variations of passages of Lorem Ipsum available.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour , or randomised words</p>-->
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="contact-top">

			<div class="col-md-5 contact-map">
				<h5>地址</h5>
				<div class="address" style="height: 50%; margin-top: 300px;">
					<h4>负责人：bdxysmj</h4>
					<p>编号：smj</p>
					<p>时间：2016 </p>
					<p>ph :+123 456 789</p>
					<p>Email :
						<a href="mailto:smj@gmail.com">smj@qq.com</a>
					</p>
				</div>
				<div id="container" style="height: 50%;"></div>
			</div>

			<div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h5>注册信息</h5>
				<form>
					<div class="grid-contact">
						<div class="col-md-6 contact-grid">
							<p class="your-para">姓名 </p>
							<input type="text" id="Name"value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
						<div class="col-md-6 contact-grid">
							<p class="your-para">联系方式</p>
							<input type="text" id="Phone"value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="grid-contact">
						<div class="col-md-6 contact-grid">
							<p class="your-para">邮箱</p>
							<input type="text" id="Email"value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
						<div class="col-md-6 contact-grid">
							<p class="your-para">密码</p>
							<input type="Password" id="PassWord" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						</div>
						<div class="clearfix"> </div>
					</div>
					<p class="your-para msg-para">个人信息</p>
					<textarea name="Remark"cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}"></textarea>
					<div class="send">
						<input type="reset" value="重置 " id="resetData">
						<input type="button" value="注册 " onclick="saveUser()">
					</div>
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<script>
	var map = new AMap.Map('container', {
		resizeEnable: true,
		zoom: 11,
		center: [116.397428, 39.90923]

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