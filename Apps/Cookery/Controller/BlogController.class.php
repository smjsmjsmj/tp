<?php
	namespace Cookery\Controller;
	use Think\Controller;
	class BlogController extends Controller
	{
		public function index()
		{
			
			$Cookery=M('Cookery');
			//查询前三条数据
			$Data=$Cookery->field('Cookery.* ,(SELECT COUNT(*) FROM COMMENT WHERE comment.`CookId`=Cookery.`ID`) AS commentCount')->order('Id desc')->select();
			$ServerName=$_SERVER['HTTP_HOST'];
		    $this->assign('serverUrl',$ServerName);
			$this->assign('data',$Data);			
			$this->display();
		}
		public function findData()
		{
			$Cookery=M('Cookery');
			$map['Name']=array('like','%'.$_POST['key'].'%');
			$id=($_POST['id']==null||$_POST['id']=='')?"-":$_POST['id'];
			$key=($_POST['key']==null||$_POST['key']=='')?"+":$_POST['key'];
            if($id!='-'){
            	
            	$Data=$Cookery->where("type=".$_POST['id'])->order('Id desc')->select();
			    $this->ajaxReturn($Data); 
            }else if($key!='+'){
            
            	$Data=$Cookery->where($map)->order('Id desc')->select();
			    $this->ajaxReturn($Data); 
            }else{
            	
            	$Data=$Cookery->order('Id desc')->select();
			    $this->ajaxReturn($Data); 
            }
	
			
		}
		
		
		
		
		
		
	}

?>