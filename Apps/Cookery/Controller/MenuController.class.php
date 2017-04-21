<?php

namespace Cookery\Controller;
use Think\Controller;
class MenuController extends Controller
{
	public function index()
	{
	    $Cookery=M('Cookery');
		//$Comment=M('Comment');
		//查询前三条数据
		$Data=$Cookery->order('Id desc')->select();
		$ServerName=$_SERVER['HTTP_HOST'];
	    $this->assign('serverUrl',$ServerName);
	    $this->assign('data',$Data);
		$this->display();
	
	}
}

?>