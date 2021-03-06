<?php
# 定义命名空间
namespace Test\Client;

# 包含依赖文件
require_once __DIR__ . '/../../application/Auth.php';
require_once __DIR__ . '/../../application/Auth/Oauth.php';

/**
 * 类 Base 提供对微博客户端的基本测试
 * 
 * @package Test\Client
 * @version 0.1
 * @copyright 2010 www.dwenzi.com
 * @author elvis <elvis@dwenzi.com> 
 * @license New BSD License  {@link http://creativecommons.org/licenses/by-nc-sa/2.5/cn/}
 */
class Base extends \PHPUnit_Framework_TestCase
{
    /**
     * 方法 testGetAuth 测试从客户端获取授权接口对象
     * 
     * @access public
     * @return void
     */
    public function testGetAuth()
    {
        $client = $this->_getClient();

        $auth = $client->auth();

        $this->assertInstanceOf('\Ebsdk\Auth', $auth);
        $this->assertInstanceOf('\Ebsdk\Auth\Oauth', $auth);
        $this->_assertAuthObject($auth);
    }

    public function testTimeLine()
    {
        $client = $this->_getClient();

        $time_line = $client->timeLine();

        $this->assertInstanceOf('\Ebsdk\TimeLine', $time_line);
        $this->_assertTimeLine($time_line);
    }
}
