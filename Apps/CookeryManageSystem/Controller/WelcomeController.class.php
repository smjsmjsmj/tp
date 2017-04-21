<?php
namespace CookeryManageSystem\Controller;
use Think\Controller;

class WelcomeController extends Controller
{
	
		public function index()
		{
			$value =session('loginUser');
			$this->assign('userName',$value['Name']);
			$this->display();
		}
	
}


?>