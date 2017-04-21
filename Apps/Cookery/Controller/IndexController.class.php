<?php 
namespace Cookery\Controller;
use Think\Controller;

class IndexController extends Controller
{
	public function index()
	{
		$Cookery=M('Cookery');
		$Comment=M('Comment');
		//查询前三条数据
		//$Data=$Cookery->order('Id desc')->limit(3)->select();
		$Data=$Cookery->field('Cookery.* ,(SELECT COUNT(*) FROM COMMENT WHERE comment.`CookId`=Cookery.`ID`) AS commentCount')->order('Id desc')->limit(3)->select();
		$ServerName=$_SERVER['HTTP_HOST'];
	    $this->assign('serverUrl',$ServerName);
	    //查询前四条数据，进行展示
	    $Data1=$Cookery->field('Cookery.* ,(SELECT COUNT(*) FROM COMMENT WHERE comment.`CookId`=Cookery.`ID`) AS commentCount')->order('Id desc')->limit(4)->select();
	    $this->assign('data1',$Data1);
		$this->assign('data',$Data);
		$this->display();
	}
	

}
?>