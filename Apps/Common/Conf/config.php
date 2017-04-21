<?php
return array(
	'DEFAULT_MODULE'	=>	'Cookery',//默认模块
	'LOAD_EXT_CONFIG'	=>	'db,tags',
	'TMPL_L_DELIM'		=>	'{',
	'TMPL_R_DELIM'		=>	'}',
	'URL_MODEL'			=>	2,
	'LANG_SWITCH_ON'   =>   true,// 开启语言包功能
	'LANG_AUTO_DETECT' =>   true, // 自动侦测语言 开启多语言功能后有效
	'LANG_LIST'        =>   'zh-cn', // 允许切换的语言列表 用逗号分隔
	'VAR_LANGUAGE'     =>   'l', // 默认语言切换变量
    'TMPL_ACTION_ERROR'     => 'Public:error',//失败重写页面
    'TMPL_ACTION_SUCCESS'   => 'Public:success',//成功重新页面
	'SHOW_PAGE_TRACE'	=> true,
  

	//'MULTI_MODULE'		=>	false,//关闭多模块访问
	//'MODULE_DENY_LIST'      =>  array('Common','Runtime','Api'),//禁止访问的模块
	//'MODULE_ALLOW_LIST'    =>    array('Home','Admin','User'),//允许访问的模块
);