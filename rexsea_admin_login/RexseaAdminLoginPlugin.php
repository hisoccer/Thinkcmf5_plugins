<?php
namespace plugins\rexsea_admin_login;

use cmf\lib\Plugin;

class RexseaAdminLoginPlugin extends Plugin
{

    public $info = [
        'name'        => 'RexseaAdminLogin',
        'title'       => '黑客帝国背景登录页面',
        'description' => '纯JS黑客背景登录页面,JS代码百度出来的~~',
        'status'      => 1,
        'author'      => 'rexsea',
        'version'     => '1.0'
    ];

    public $hasAdmin = 0;

    // 插件安装
    public function install()
    {
        return true;
    }

    // 插件卸载
    public function uninstall()
    {
        return true;
    }

    public function adminLogin()
    {
        return $this->fetch('widget');
    }

}