<?php
	namespace Cookery\Controller;
	use Think\Controller;
	class ContactController extends Controller
	{
		public function index()
		{
			$this->display();
		}
		public function registerUser()
		{
			$Users=M('Users');
			$data['Name']=$_POST['Name'];
			$data['Phone']=$_POST['Phone'];
			$data['Email']=$_POST['Email'];
			$data['PassWord']=$_POST['PassWord'];
			$data['Remark']=$_POST['Remark'];
			$data['CreationTime']=date('y-m-d h:i:s',time());
			$Users->data($data)->add();
			$this->ajaxReturn("注册成功！您可以去管理后台进行分享自己喜爱的美食啦！！！"); 
		}
	}

?>