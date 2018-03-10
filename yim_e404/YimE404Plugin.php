<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Yim <yeminch@qq.com>
// +----------------------------------------------------------------------
namespace plugins\yim_e404;

use cmf\lib\Plugin;

class YimE404Plugin extends Plugin
{

    public $info = [
        'name'        => 'YimE404',
        'title'       => '404错误页面插件',
        'description' => '自定义的404错误页面',
        'status'      => 1,
        'author'      => 'Yim',
        'version'     => '1.0'
    ];

    public $hasAdmin = 0;//插件是否有后台管理界面

    // 插件安装
    public function install()
    {
        return true;//安装成功返回true，失败false
    }

    // 插件卸载
    public function uninstall()
    {
		return true;//卸载成功返回true，失败false
    }
	public function appBegin()
	{
		config('exception_tmpl',PLUGINS_PATH.'yim_e404/404.html');
	}
}