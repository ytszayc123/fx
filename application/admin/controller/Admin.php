<?php
namespace app\admin\controller;


use app\common\CacheUtile;
use think\Controller;
use think\model\Admin as A;

class Admin extends Controller
{
    public function admin_list()
    {
        $adminCache = CacheUtile::getInstace("admin");
        dump($adminCache->getResource());die;
        //dump(\app\admin\model\Admin::findAdminList());die;
        $this->assign("list",\app\admin\model\Admin::findAdminList());
        return $this->fetch();
    }
}