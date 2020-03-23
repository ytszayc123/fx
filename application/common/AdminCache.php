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
        /*查询缓存*/
        $resource = Cache::get($this->resource["aname"]);
        if($resource){//缓存已存在,删除
            Cache::rm($this->resource["aname"]);
        }
        //存储缓存数据
        Cache::set($this->resource["aname"],$this->resource);
    }

    public function setResource($resource)
    {
        // TODO: Implement setResource() method.

        /*遍历类数组变量*/
        foreach (array_keys($this->resource) as $key)
        {
            /*获取缓存数据*/
            $this->resource[$key] = $resource[$key];
        }
    }
}