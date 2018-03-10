<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2017 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\admin_login_backstretch;

use cmf\lib\Plugin;
use think\Db;

class AdminLoginBackstretchPlugin extends Plugin
{

    public $info = [
        'name'        => 'AdminLoginBackstretch',
        'title'       => '幻灯后台登陆插件',
        'description' => '幻灯片后台登录页',
        'status'      => 1,
        'author'      => 'UpStream',
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

    public function adminLogin()
    {
        $config = $this->getConfig();
        $this->assign($config);
        return $this->fetch('widget');
    }

}