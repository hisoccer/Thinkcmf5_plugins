<?php
// +----------------------------------------------------------------------
// | ThinkCMF [ WE CAN DO IT MORE SIMPLE ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013-2018 http://www.thinkcmf.com All rights reserved.
// +----------------------------------------------------------------------
// | Author: Dean <zxxjjforever@163.com>
// +----------------------------------------------------------------------
namespace plugins\mobile_code_demo;//Demo插件英文名，改成你的插件英文就行了
require_once __DIR__ . '/api_sms/SmsDemo.php';
use cmf\lib\Plugin;

/**
 * MobileCodeDemoPlugin
 */
class MobileCodeDemoPlugin extends Plugin
{

    public $info = [
        'name'        => 'MobileCodeDemo',
        'title'       => 'aly手机验证码插件',
        'description' => 'aly手机验证码插件',
        'status'      => 1,
        'author'      => '陈飞',
        'version'     => '1.0'
    ];

    public $has_admin = 0;//插件是否有后台管理界面

    public function install() //安装方法必须实现
    {
        return true;//安装成功返回true，失败false
    }

    public function uninstall() //卸载方法必须实现
    {
        return true;//卸载成功返回true，失败false
    }

    //实现的send_mobile_verification_code钩子方法
    public function sendMobileVerificationCode($param)
    {
        $mobile        = $param['mobile'];//手机号
        $code          = $param['code'];//验证码
        $config        = $this->getConfig();

        switch ($config['accessKeyId']) {
        	case '1':
        		$result = [
            	'error'     => 1,
            	'message' => "手机注册暂时关闭"
        		];
        		return $result;
        		break;
        	case '2':
        		$result = [
            	'error'     => 1,
            	'message' => "请告知管理员配置短信参数"
        		];
        		return $result;
        		break;
        	default:
        		# code...
        		break;
        }
        switch (intval($config['expire_minute'])) {//获取到value值，为1表示5分钟具体在config中表现
            case '1':
                $expire_minute=5;
                break;
            default:
                # code...
                break;
        }
        $expire_minute = intval($config['expire_minute']);
        $expire_minute = empty($expire_minute) ? 5 : $expire_minute;
        $expire_time   = time() + $expire_minute * 60;

		$response = sendsms($mobile,$code,$config['accessKeyId'],$config['accessKeySecret'],$config['SignName'],$config['template_id'],$expire_minute);//调用smsDemo类中的方法，传递参数,返回值类型为sreclass

        switch ($response->Code) {
            case 'OK':
                $result = [
                    'error'     => 0,
                    'message' => "验证码发送成功，开放注册时间至2月11日",
                    'expire_time' => $expire_time
                ];
                return $result;
                break;
            case 'isv.MOBILE_NUMBER_ILLEGAL':
                $result = [
                    'error'     => 1,
                    'message' => $mobile."为非法手机号",
                    'expire_time' => $expire_time
                ];
                return $result;
                break;
            case 'isv.AMOUNT_NOT_ENOUGH':
                $result = [
                    'error'     => 1,
                    'message' => "暂时无法提供服务",
                    'expire_time' => $expire_time
                ];
                return $result;
                break;
            case 'isv.BUSINESS_LIMIT_CONTROL':
                $result = [
                    'error'     => 1,
                    'message' => "今日发送次数超出限制，请明天来试",
                    'expire_time' => $expire_time
                ];
                return $result;
                break;
            default:
                $result = [
                    'error'     => 1,
                    'message' => $response,
                    'expire_time' => $expire_time
                ];
                return $result;
                break;
        }
    }

}