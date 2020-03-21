<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/19
 * Time: 10:06
 */

namespace app\admin\controller;

use think\Controller;

class System extends Controller
{
    public function initialize(){
        if(!session('admin_id')){
            $this->redirect("http://www.jsh.com/view/login");
        }
    }
}