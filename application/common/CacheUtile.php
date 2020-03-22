<?php
namespace app\common;

class CacheUtile
{
    public static function getInstace($cache)
    {
        switch (strtolower($cache)){
            case "admin" :
                return new AdminCache();
            case "user":
                return new UserCache();
        }
    }
}