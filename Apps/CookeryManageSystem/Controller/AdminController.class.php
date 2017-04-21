<?php
namespace CookeryManageSystem\Controller;
use Think\Controller;

class AdminController extends Controller
{
	
		public function index()
		{
			$value =session('loginUser');
			$this->assign('userName',$value['Name']);
			$this->assign('userID',$value['ID']);
			$this->display();
		}
	
}


?>