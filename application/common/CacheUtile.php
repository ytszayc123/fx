<?php
namespace app\common;

use app\admin\model\Admin;

class CacheUtile
{
    public static function getInstace($cache)
    {
        switch (strtolower($cache)){
            case "admin" :
                return new AdminCache();
            case "user":
                return new UserCache();
            default:
                return new Admin();
        }
    }
}