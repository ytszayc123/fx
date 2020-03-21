<?php
namespace app\admin\model;

use think\Model;

/*管理员表模型*/
class Admin extends Model
{
    private $Admin = [
        "aname"=>"",
        "apassword"=>"",
        "addtime"=>0,
        "rule"=>"0",
    ];

    /*管理员登录*/
    public function modelLogin($username,$password)
    {
        $this->Admin["aname"] = $username;
        $this->Admin["apassword"] = sha1("YTSZAYC".md5($username).md5($password));
        return Admin::where($this->Admin)->find();
    }

    /*管理员添加*/
    public function AdminAdd($username,$password="123456")
    {
        $this->Admin["aname"] = $username;
        $this->Admin["apassword"] = sha1("YTSZAYC".md5($username).md5($password));
        $this->Admin["addtime"] = time();
        self::save($this->Admin);
    }

}