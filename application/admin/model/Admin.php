<?php
namespace app\admin\model;

use think\Model;

/*管理员表模型*/
class Admin extends Model
{
    private static $Admin = [
        "aname"=>"",
        "apassword"=>"",
        "addtime"=>0,
        "rule"=>"0",
    ];

    public static function serAdmin($username,$password)
    {
        self::$Admin["aname"] = $username;
        self::$Admin["apassword"] = sha1("YTSZAYC".md5($username).md5($password));
    }

    /*管理员登录*/
    public function modelLogin()
    {
        return Admin::where($this->Admin)->find();
    }

    /*管理员添加*/
    public function AdminAdd()
    {
        $this->Admin["addtime"] = time();
        self::save($this->Admin);
    }

}