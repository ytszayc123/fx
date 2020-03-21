<?php
namespace app\admin\controller;


use think\Controller;
use think\model\Admin as A;

class Admin extends Controller
{
    public function admin_list()
    {
        //dump(\app\admin\model\Admin::findAdminList());die;
        $this->assign("list",\app\admin\model\Admin::findAdminList());
        return $this->fetch();
    }
}