<?php
namespace CookeryManageSystem\Controller;
use Think\Controller;

class UsersController extends Controller
{
	
		public function index()
		{
			$value =session('loginUser');
			$this->assign('userName',$value['Name']);
			$Users=M('Users');
		    $result=$Users->select();
			$this->assign('dataList',$result);
			$this->display();
		}
		public function searchData()
		{
			$value =session('loginUser');
			$this->assign('userName',$value['Name']);
			$startTime=isset($_POST['startTime'])?$_POST['startTime']:'';
			$endTime=isset($_POST['endTime'])?$_POST['endTime']:'';
			$key=isset($_POST['key'])?$_POST['key']:'';
			$Users=M('Users');
			$where=$startTime==''?'':'CreationTime>=\''.$startTime.'\' and ';
			$where = $where.($endTime==''?'':'CreationTime<=\''.$endTime.'\' and ');
			$where = $where.($key==''?' 1=1 ':' Name like \'%'.$key.'%\'');
		    $result=$Users->where($where)->select();
		    $this->ajaxReturn($result);
		}
		public function addData()
		{
			$Id=isset($_GET['ID'])?$_GET['ID']:'';
			if($Id==''){
				$ServerName=$_SERVER['HTTP_HOST'];
			    $this->assign('serverUrl',$ServerName);
				$this->display();
			}else{
				
				$Users=M('Users');
				$result=$Users->find($Id);
				$this->assign('dataUsers',$result);
				$this->display();
			}
			
			
		}
		public function saveData()
		{
			$Users=M('users');
			$Id=isset($_POST['ID'])?$_POST['ID']:'';
		
			$data['Name']=$_POST['Name'];
			$data['Phone']=$_POST['Phone'];
			$data['Email']=$_POST['Email'];
			$data['Remark']=$_POST['Remark'];
			$data['CreationTime']=date('y-m-d h:i:s',time());
			if($Id==''){
				$Users->data($data)->add();
				$this->ajaxReturn('新增成功！');
			}else{
				$Users->where('id='.$Id)->save($data);
				$this->ajaxReturn('更新成功！');
			}
			
			
		}
		public function delData()
		{
			$users=M('Users');
			$Id=$_POST['ID'];
			$users->where('id='.$Id)->delete();
		}
		
		public function updatePassWord()
		{
			$users=M('Users');
			$Id=$_GET['ID'];
			$result=$users->where('id='.$Id)->find();
			$this->assign('userName',$result['Name']);
			$this->assign('ID',$Id);
			$this->display();
		}
		public function updatePwd()
		{
		   $users=M('Users');
		   $ID=isset($_POST['ID'])?$_POST['ID']:'';
		   if($ID==''){
		   	$this->ajaxReturn('修改失败！');
		   }
		   $data['ID']=$ID;
		   $data['PassWord']=$_POST['pwd'];
		   $users->where('id='.$ID)->save($data);
		   $this->ajaxReturn('修改成功！');
		}

		
	
		
}


?>