<?php
	namespace Cookery\Controller;
	use Think\Controller;
	class SingleController extends Controller
	{
		public function index($id)
		{
		
			$Cookery=M('Cookery');
		    
			$Data=$Cookery->field('Cookery.* ,(SELECT COUNT(*) FROM COMMENT WHERE comment.`CookId`=Cookery.`ID`) AS commentCount')->find($id);
			$this->assign('singleData',$Data);
			$ServerName=$_SERVER['HTTP_HOST'];
	        $this->assign('serverUrl',$ServerName);
	        //查询前三条数据
			$Data1=$Cookery->field('Cookery.* ,(SELECT COUNT(*) FROM COMMENT WHERE comment.`CookId`=Cookery.`ID`) AS commentCount')->order('Id desc')->select();
			$this->assign('data',$Data1);		
	        $Comment=M('Comment');
	        $CommentList=$Comment->where('cookId='.$id)->order('CreationTime desc')->select();
	        $this->assign('commentList',$CommentList);
	        $this->assign('CookId',$id);
			$this->display();
		}
		
		public function saveData()
		{
		   $Comment=M('Comment');
		   $data['UserName']=$_POST['UserName'];
		   $data['Content']=$_POST['Content'];
		   $data['CreationTime']=date('y-m-d h:i:s',time());
		   $data['Email']=$_POST['Email'];
		   $data['CookId']=$_POST['CookId'];
		   $Comment->data($data)->add();
//		   dump($data);
          $this->ajaxReturn($data); 
         // $this->redirect('Single/index?id='.$CookId);
		}
	}

?>