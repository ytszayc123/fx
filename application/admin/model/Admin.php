<?php
namespace app\admin\model;

use app\common\CacheUtile;
use think\Db;
use think\Model;

/*管理员表模型*/
class Admin extends Model
{
    /*管理员登录*/
    public static function modelLogin($username,$password)
    {
        return self::where(["aname"=>$username,"apassword"=>md5(sha1("YTSZAYC".md5($username).md5($password)))])
            ->find();
    }

    /*管理员添加*/
    public static function AdminAdd($username,$password,$rule=0)
    {
        $admin = new Admin();
        $admin->aname = $username;
        $admin->apassword = md5(sha1("YTSZAYC".md5($username).md5($password)));
        $admin->addtime = time();
        $admin->status = 1;
        $admin->rule = 0;
        return $admin->save();
    }

    /*
     * 管理员列表
     * */
    public static function findAdminList()
    {
        return Admin::where("aname" ,"neq","admin")
            ->where("status","eq",1)
            ->paginate(10);
    }

    /*管理员状态修改*/
    public static function reviseAdminStatus($id,$status)
    {
        return self::where(["id"=>$id])->update(["status"=>$status]);
    }

    /*按要求查询管理员列表*/
    public static function sreachAdminList($start="",$end="",$username="",$status="")
    {
        $admin = Db::name("admin")->where("aname","neq","admin");
        if($start != ""){
            $admin = $admin->where("addtime","gt",strtotime($start));
        }
        if($end != ""){
            $admin = $admin->where("addtime","lt",strtotime($end));
        }
        if($username != ""){
            $admin = $admin->where("aname","eq",$username);
        }
        if($status !=""){
            $admin = $admin->where("status","eq",$status);
        }
        return $admin->paginate(10,false,["query"=>request()->param()]);
    }

}