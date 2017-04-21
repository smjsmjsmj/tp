<?php
namespace CookeryManageSystem\Controller;
use Think\Controller;

class GoodsController extends Controller
{
	
		public function index()
		{
			$value =session('loginUser');
			$this->assign('userName',$value['Name']);
			$Cookery=M('Cookery');
			$result='';
			if($value['ID']==3){
				
		    $result=$Cookery->field('Cookery.*,users.Name as userNames')->join('left join users on cookery.Creator=users.ID')->select();
			}else{
		    $result=$Cookery->field('Cookery.*,users.Name as userNames')->join('left join users on cookery.Creator=users.ID')->where('Creator='.$value['ID'])->select();
			}
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
			$where=$startTime==''?'':'Cookery.CreationTime>=\''.$startTime.'\' and ';
			$where = $where.($endTime==''?'':'Cookery.CreationTime<=\''.$endTime.'\' and ');
			$where = $where.($key==''?' 1=1 ':' Cookery.Name like \'%'.$key.'%\'');
			$result='';
			if($value['ID']==3){
				$result=$Cookery->field('Cookery.*,users.Name as userNames')->join('left join users on cookery.Creator=users.ID')->where($where)->select();
			}else{
		       $result=$Cookery->field('Cookery.*,users.Name as userNames')->join('left join users on cookery.Creator=users.ID')->where($where.' and cookery.Creator='.$value['ID'])->select();
			}
		    
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
				
				$Cookery=M('Cookery');
				$result=$Cookery->find($Id);
				$this->assign('dataCookery',$result);
				$ServerName=$_SERVER['HTTP_HOST'];
			    $this->assign('serverUrl',$ServerName);
				$this->display();
				
			}
			
			
		}
		public function uploadPic()
		{
			$picname = $_FILES['file']['name']; 
		    $picsize = $_FILES['file']['size']; 
		    $ServerName=$_SERVER['HTTP_HOST'];
		    if ($picname != "") { //Public/cookery/files/5843c28629c93.jpg
		        if ($picsize > 2014000) { //限制上传大小 
		            echo '{"status":0,"content":"图片大小不能超过2M"}';
		            exit; 
		        } 
		        $type = strstr($picname, '.'); //限制上传格式 
		        if ($type != ".gif" && $type != ".jpg" && $type != "png") {
		            echo '{"status":2,"content":"图片格式不对！"}';
		            exit; 
		        }
		        $rand = rand(100, 999); 
		        $pics = uniqid() . $type; //命名图片名称 
		        //上传路径 

		        $pic_path = "Public/Cookery/files/". $pics; 
		        move_uploaded_file($_FILES['file']['tmp_name'], $pic_path); 
		    } 
		    $size = round($picsize/1024,2); //转换成kb 
			$this->ajaxReturn('/tp/'.$pic_path,'json');
		}
		public function saveData()
		{
			$Cookery=M('Cookery');
			$Id=isset($_POST['ID'])?$_POST['ID']:'';
		    $picUrl=isset($_POST['PicUrl'])?$_POST['PicUrl']:"";
			$data['Name']=$_POST['Name'];
			$data['Cost']=$_POST['Cost'];
			$data['Material']=$_POST['Material'];
			$data['Type']=$_POST['Type'];
			$data['briefIntroduction']=$_POST['briefIntroduction'];
			$data['PicUrl']=$picUrl==""?"tp/Public/cookery/files/error.jpg":$picUrl;
			$data['MakeContent']=$_POST['MakeContent'];
			$user=session('loginUser');
			$data['Creator'] =$user['ID'];
			$data['CreationTime']=date('y-m-d h:i:s',time());
			if($Id==''){
				$Cookery->data($data)->add();
				$this->ajaxReturn('新增成功！');
			}else{
				$Cookery->where('id='.$Id)->save($data);
				$this->ajaxReturn('更新成功！');
			}
		}
		public function delData()
		{
			$Cookery=M('Cookery');
			$Id=$_POST['ID'];
			$Cookery->where('id='.$Id)->delete();
		}
		

		function resizejpg($imgsrc,$imgdst,$imgwidth,$imgheight) 
		{ 
			//$imgsrc jpg格式图像路径 $imgdst jpg格式图像保存文件名 $imgwidth要改变的宽度 $imgheight要改变的高度 
			//取得图片的宽度,高度值 
			$arr = getimagesize($imgsrc); 
			header("Content-type: image/jpg"); 
			$imgWidth = $imgwidth; 
			$imgHeight = $imgheight; 
			// Create image and define colors 
			$imgsrc = imagecreatefromjpeg($imgsrc); 
			$image = imagecreatetruecolor($imgWidth, $imgHeight); //创建一个彩色的底图 
			imagecopyresampled($image, $imgsrc, 0, 0, 0, 0,$imgWidth,$imgHeight,$arr[0], $arr[1]);
			imagepng($image); 
			imagedestroy($image); 
		} 
	
		
}


?>