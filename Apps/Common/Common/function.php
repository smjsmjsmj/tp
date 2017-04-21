<?php 
/**
*	循环删除目录和目录中的文件
*	@param string $dir 目录名称
*/
function deldir($dir)
{
	if(is_dir($dir)) die('不是一个目录');

	while($filename = readdir($file))
	{
		if($filename != '.' && $filename != '..')
		{
			$fullfile=$dir.'/'.$filename;
			if(!is_dir($fullfile))
			{
				unlink($fullfile);
			}
			else
			{
				deldir($fullfile);
			}
		}
	}
	closedir($file);
	if(rmdir($dir))
	{
		return true;
	}
	else
	{
		return false;
	}	

}
?>