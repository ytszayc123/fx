<?php
namespace app\index\controller;

use app\common\UserCache;
use Util\Curl;
use think\facade\Debug;

class Index
{
    public function index()
    {
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

}
