<?php
namespace app\admin\controller;


use app\common\CacheUtile;
use think\Controller;
use think\facade\Cache;
use think\model\Admin as A;

class Admin extends Controller
{
    public function admin_list()
    {
        //$adminCache = CacheUtile::getInstace("admin");
        //dump($adminCache->get("admin"));die;
        dump(\app\admin\model\Admin::findAdminList());die;
        $this->assign("list",\app\admin\model\Admin::findAdminList());
        return $this->fetch();
    }
}