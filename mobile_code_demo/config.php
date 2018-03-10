<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
return array (
	'accessKeyId' => array (// 在后台插件配置表单中的键名 ,会是config[text]
		'title' => 'accessKeyId', // 表单的label标题
		'type' => 'text',// 表单的类型：text,password,textarea,checkbox,radio,select等
		'value' => '',// 表单的默认值
		'tip' => '登录阿里云查看accessKeyId，最好使用子用户的accessKeyId' //表单的帮助提示
	),
    'accessKeySecret' => array (// 在后台插件配置表单中的键名 ,会是config[text]
        'title' => 'accessKeySecret', // 表单的label标题
        'type' => 'text',// 表单的类型：text,password,textarea,checkbox,radio,select等
        'value' => '',// 表单的默认值
        'tip' => '登录阿里云查看accessKeyId对应的accessKeySecret，最好使用子用户的accessKeySecret' //表单的帮助提示
    ),
    'SignName' => array (// 在后台插件配置表单中的键名 ,会是config[text]
        'title' => '短信签名名称', // 表单的label标题
        'type' => 'text',// 表单的类型：text,password,textarea,checkbox,radio,select等
        'value' => '',// 表单的默认值
        'tip' => '登录阿里云消息服务，输入短信签名，严格的短信签名名称' //表单的帮助提示
    ),
    'template_id' => array (// 在后台插件配置表单中的键名 ,会是config[text]
        'title' => '模版CODE', // 表单的label标题
        'type' => 'text',// 表单的类型：text,password,textarea,checkbox,radio,select等
        'value' => '',// 表单的默认值
        'tip' => '填写已申请审核通过的模板CODE' //表单的帮助提示
    ),
    'expire_minute' => array (// 在后台插件配置表单中的键名 ,会是config[text]
        'title' => '有效期', // 表单的label标题
        'type' => 'select',// 表单的类型：text,password,textarea,checkbox,radio,select等
        'options' => [//select 和radio,checkbox的子选项
            '1' => '5分钟',// 值=>显示
        ],
        'value' => '1',// 表单的默认值
        'tip' => '短信验证码过期时间，单位分钟' //表单的帮助提示
    ),
);