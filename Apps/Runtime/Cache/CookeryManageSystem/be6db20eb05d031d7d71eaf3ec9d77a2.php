<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<title>美食之家管理系统</title> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/images/login.js"></script>
<link href="/tp/Public/cookeryManageSystem/css/login2.css" rel="stylesheet" type="text/css" />
<link href="/tp/Public/cookeryManageSystem/css/Code.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/js/index.js"></script>
<script type="text/javascript" src="/tp/Public/cookeryManageSystem/js/Code.js"></script>
</head>
<body>
<h1>美食之家管理系统<sup>2016</sup></h1>

<div class="login" style="margin-top:50px;">
    <div class="header">
        <div class="switch" id="switch"><a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">快速登录</a>
			<a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">快速注册</a><div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>    
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 283px;">    

            <!--登录-->
            <div class="web_login" id="web_login">
               <div class="login-box">
			<div class="login_form">
				<form action="/tp/CookeryManageSystem/Index/login" method="post" name="loginform" accept-charset="utf-8" id="login_form" class="loginForm" method="post"><input type="hidden" name="did" value="0"/>
               <input type="hidden" name="to" value="log"/>
                <div class="uinArea" id="uinArea">
                <label class="input-tips" for="u">帐号：</label>
                <div class="inputOuter" id="uArea">
                    <input type="text" id="userName" name="userName" class="inputstyle"/>
                </div>
                </div>
                <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">密码：</label> 
               <div class="inputOuter" id="pArea">
                    <input type="password" id="passWord" name="passWord" class="inputstyle"/>
               </div>  
               </div>
                  <div class="pwdArea" id="pwdArea">
               <label class="input-tips" for="p">验证:</label> 
               <div class="inputOuter" id="uArea1" style="width:20%;float: left;">
               <input type="text"  class="inputstyle" style="width:134%;float: left;" id="inputCode"/>
               </div>
               <div class="code" id="checkCode" style="width:40%;float: right;" onclick="createCode()">
                    <!--<input type="password" id="" name="" class="inputstyle"/>-->
               </div>  
               </div>
                <div style="padding-left:50px;margin-top:20px;"><input type="button" onclick="login()" value="登 录" style="width:150px;" class="button_blue"/></div>
              </form>
           </div>
           
            	</div>
               
            </div>
            <!--登录end-->
  </div>

  <!--注册-->
    <div class="qlogin" id="qlogin" style="display: none; ">
    <div class="web_login"><form name="form2" id="regUser" accept-charset="utf-8"  action="" method="post">
	      <input type="hidden" name="to" value="reg"/>
		      		       <input type="hidden" name="did" value="0"/>
        <ul class="reg_form" id="reg-ul">
        		<div id="userCue" class="cue">快速注册请注意格式</div>
                <li>
                	
                    <label for="user"  class="input-tips2">用户名：</label>
                    <div class="inputOuter2">
                        <input type="text" id="name" name="name" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                
                <li>
                <label for="passwd" class="input-tips2">密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="pwd"  name="passWord" maxlength="16" class="inputstyle2"/>
                    </div>
                    
                </li>
                <li>
                <label for="passwd2" class="input-tips2">确认密码：</label>
                    <div class="inputOuter2">
                        <input type="password" id="passwd2" name="" maxlength="16" class="inputstyle2" />
                    </div>
                    
                </li>
                
                <li>
                 <label for="qq" class="input-tips2">邮箱：</label>
                    <div class="inputOuter2">
                       
                        <input type="text" id="email" name="Email" maxlength="10" class="inputstyle2"/>
                    </div>
                   
                </li>
                     <li>
                 <label for="qq" class="input-tips2">手机：</label>
                    <div class="inputOuter2">
                        <input type="text" id="phone" name="phone" maxlength="10" class="inputstyle2"/>
                    </div>
                   
                </li>
                <li>
                    <div class="inputArea">
                        <input type="button" id="reg"  onclick="registerUser()" style="margin-top:10px;margin-left:85px;" class="button_blue" value="同意协议并注册"/> <a href="#" class="zcxy" target="_blank">注册协议</a>
                    </div>
                    
                </li><div class="cl"></div>
            </ul></form>
           <script>
           	createCode();
           </script>
    
    </div>
   
    
    </div>
    <!--注册end-->
</div>
<div class="jianyi">*推荐使用ie8或以上版本ie浏览器或Chrome内核浏览器访问本站</div>
</body></html>