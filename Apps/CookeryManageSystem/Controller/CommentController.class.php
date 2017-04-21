<?php
namespace CookeryManageSystem\Controller;
use Think\Controller;

class CommentController extends Controller
{
	
		public function index()
		{
			$value =session('loginUser');
			$this->assign('userName',$value['Name']);
			$Cookery=M('Cookery');
		    $result=$Cookery->field('Cookery.*,users.Name as userNames,Comment.CreationTime as ComCreationTime,Comment.Email as ComEmail,Comment.ID as ComId,Content,UserName')
		    				->join('left join users on cookery.Creator=users.ID')
		                    ->join('left join Comment on Comment.CookId=Cookery.ID')
		                    ->where('Comment.ID is not null')
		                    ->select();
		    $ServerName=$_SERVER['HTTP_HOST'];
		    $this->assign('serverUrl',$ServerName);
			$this->assign('dataList',$result);
			$this->assign('dataCount',count($result));
			$this->display();
		}
		
		public function searchData()
		{
			$value =session('loginUser');
			$this->assign('userName',$value['Name']);
			$startTime=isset($_POST['startTime'])?$_POST['startTime']:'';
			$endTime=isset($_POST['endTime'])?$_POST['endTime']:'';
			$key=isset($_POST['key'])?$_POST['key']:'';
			$Cookery=M('Cookery');
		//	$Cookery=M('Comment');
			$where=$startTime==''?'':'Comment.CreationTime>=\''.$startTime.'\' and ';
			$where = $where.($endTime==''?'':'Comment.CreationTime<=\''.$endTime.'\' and ');
			$where = $where.($key==''?' 1=1 ':' Content like \'%'.$key.'%\'');
			$where=$where.' and comment.id is not null ';
		   	$result=$Cookery->field('Cookery.*,users.Name as userNames,Comment.CreationTime as ComCreationTime,Comment.Email as ComEmail,Comment.ID as ComId,Content,UserName')
		    				->join('left join users on cookery.Creator=users.ID')
		                    ->join('left join Comment on Comment.CookId=Cookery.ID')
		                    ->where($where)
		                    ->select();
		    $this->ajaxReturn($result);
		}
		
		
		public function delData()
		{
			$Comment=M('Comment');
			$Id=$_POST['ID'];
			$Comment->where('id='.$Id)->delete();
		}
		

	
		
}


?>