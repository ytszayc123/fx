<?php
namespace app\common;

class UserCache implements CacheInterface
{
    private $resurce = [
        "username"=>"", //用户名
        "token"=>"", //用户加密串
        "SuperiorUser"=>"",//用户上级用户id
        "Subordinate"=>[],//用户下级列表
        "RealName"=>"",//用户真实姓名
        "InvitationCode"=>"", //用户唯一邀请码
        "Commission"=>null,//用户佣金
        "Integral" =>0,//用户积分
    ];

    public function get($key)
    {

    }

    private function getKey($key,$valueKey,\Closure $func)
    {
        return $func($key,$valueKey);
    }



    public function set()
    {
        // TODO: Implement set() method.
    }

    public function setResource($resource)
    {
        // TODO: Implement setResource() method.
    }
}