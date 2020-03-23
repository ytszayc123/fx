<?php
namespace app\api\controller;

use app\admin\controller\System;

class Admin extends System
{
    /*管理员添加*/
    public function add()
    {
        $data = input();
        $res = \app\admin\model\Admin::AdminAdd($data["username"],$data["password"]);
        switch ($res){
            case true:
                return toJson(200,"添加成功");
            default:
                return toJson(400,"添加失败");
        }
    }

    /*管理员状态修改*/
    public function status()
    {
        $data = input();
        if(\app\admin\model\Admin::reviseAdminStatus($data["id"],$data["status"])){
            return toJson(200,"成功");
        }else{
            return toJson(400,"失败");
        }
    }
}