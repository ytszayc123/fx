<?php
namespace app\admin\model;

use app\common\CacheUtile;
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
    public static function modelLogin($username ,$password)
    {
        $admin = new Admin();
        $admin->aname = $username;
        $admin->apassword = sha1("YTSZAYC".md5($username).md5($password));
        return Admin::where($admin)->find();
    }

    /*管理员添加*/
    public function AdminAdd($username,$password,$rule=0)
    {
        $admin = new Admin();
        $admin->aname = $username;
        $admin->apassword = sha1("YTSZAYC".md5($username).md5($password));
        $admin->addtime = time();
        self::save($this->Admin);
    }

    /*
     * 管理员列表
     * */
    public static function findAdminList()
    {
        $admin_list = [];
        $adminList = Admin::all();
        foreach ($adminList as $admin)
        {
            if($admin->aname !== "admin"){
                $admin->apassword = "************";
                $admin_list = array_merge($admin_list,$admin);
            }
        }
        return $admin_list;
    }

}