<?php
namespace app\admin\controller;


use app\common\CacheUtile;
use think\Controller;
use think\facade\Cache;
use think\model\Admin as A;

class Admin extends Controller
{

    /*管理员列表*/
    public function admin_list()
    {
        $data = input();
        unset($data["/view/admin_list"]);
        if(empty($data)){
            $list = \app\admin\model\Admin::findAdminList();
        }else{
            $list = \app\admin\model\Admin::sreachAdminList($data["start"],$data["end"],$data["username"],$data["status"]);
        }
        $this->assign("list",$list);//分页数据
        $this->assign("count",$list->total());//总条数
        return $this->fetch();
    }

    /*管理员添加*/
    public function admin_add()
    {
        return $this->fetch();
    }
}