<?php
/**
 * 自动生成数据词典插件
 * User: rexsea
 * Date: 2017-10-19
 * Time: 9:02
 */
namespace plugins\rexsea_dictionary;

use cmf\lib\Plugin;

class RexseaDictionaryPlugin extends Plugin
{
    public $info = [
        'name'        => 'RexseaDictionary',
        'title'       => '自动生成数据词典插件',
        'description' => '自动生成数据词典插件',
        'status'      => 1,
        'author'      => 'rexsea',
        'version'     => '1.0'
    ];

    public $hasAdmin = 1;//插件是否有后台管理界面

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
}