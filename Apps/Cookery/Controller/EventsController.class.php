<?php
	namespace Cookery\Controller;
	use Think\Controller;
	class EventsController extends Controller
	{
		public function index($id)
		{
			  $Cookery=M('Cookery');
			  //查询前三条数据
			  $dataList=$Cookery->field('Cookery.* ,(SELECT COUNT(*) FROM COMMENT WHERE comment.`CookId`=Cookery.`ID`) AS commentCount')->find($id);
			  $ServerName=$_SERVER['HTTP_HOST'];
			  $this->assign('serverUrl',$ServerName);
			  $this->assign('data1',$dataList);
		      $this->display();
		}
	}

?>