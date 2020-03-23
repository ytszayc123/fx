<?php
namespace app\common;


interface CacheInterface
{
    /*获取缓存数据*/
    public function get($key);

    /*设置缓存数据*/
    public function set();

    /*设置缓存数据配置*/
    public function setResource($resource);
}