<?php 
namespace CookeryManageSystem\Controller;
use Think\Controller;

class IndexController extends Controller
{
	public function index()
	{
		session('loginUser','');
		$this->display();
	}
	
	public function login()
	{
		$User=M('Users');
		$userName=$_POST['userName'];
		$passWord=$_POST['passWord'];
		$result=$User->where('Name="'.$userName.'" and passWord="'.$passWord.'"')->find();
		if(count($result)>0)
		{
			session('loginUser',$result);
			return $this->ajaxReturn("成功!!!");
		}else
		{
		    return $this->ajaxReturn("失败!");
		}
		
	}
		public function registerUser()
		{
			$Users=M('Users');
			$data['Name']=$_POST['Name'];
			$UserName=$Users->where('Name="'.$_POST['Name'].'"')->select();
			if(count($UserName)>0){
				$this->ajaxReturn("该用户已注册！"); 
			}
			$data['Phone']=$_POST['Phone'];
			$data['Email']=$_POST['Email'];
			$data['PassWord']=$_POST['PassWord'];
			$data['CreationTime']=date('y-m-d h:i:s',time());
			$Users->data($data)->add();
			$this->ajaxReturn("注册成功！您可以登陆啦！！！"); 
		}

}
?>