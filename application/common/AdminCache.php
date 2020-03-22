<?php
namespace app\common;


/*
 * 管理员缓存
 * */

use think\facade\Cache;

class AdminCache implements CacheInterface
{
    private $resource = [
        "id"=>0, //id值
        "aname"=>"", //管理员名
        "rule"=>[],     //角色
        "addtime"=>0,  //添加时间
        "phone"=>"",   //电话
        "email"=>""   //邮箱
    ];

    public function get($key)
    {
        // TODO: Implement get() method.
        $resource = Cache::get($key);
        switch ($resource){
            case false:
                return null;
            default:
                return $resource;
        }
    }

    public function set()
    {
        $resource = Cache::get($this->resource["aname"]);
        if($resource){
            Cache::rm($this->resource["aname"]);
        }
        Cache::set($this->resource["aname"],$this->resource);
    }

    public function setResource($resource)
    {
        // TODO: Implement setResource() method.
//        $this->resource = $resource;
//        dump($this->resource);
        //dump(array_keys($this->resource));
        foreach (array_keys($this->resource) as $key)
        {
            if(array_key_exists($key,$resource) && array_key_exists($key,$this->resource)) {
                $this->resource[$key] = $resource[$key];
            }
        }
    }
}