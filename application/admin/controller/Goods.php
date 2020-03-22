<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/19
 * Time: 10:06
 */

namespace app\admin\controller;


class goods extends System
{
    //商品管理
    public function index()
    {

       return $this->fetch();
    }
    //添加商品
    public function add(){

        return $this->fetch();
    }
    //修改商品
    public function xgadd(){

        return $this->fetch();
    }


    //添加规格首页
    public function spec(){

        return $this->fetch();
    }
    //添加规格
    public function specadd(){

        return $this->fetch();
    }
    //修改规格
    public function xgspec(){

        return $this->fetch();
    }


    //添加类型首页
    public function type(){

        return $this->fetch();
    }
    //添加类型
    public function typeadd(){

        return $this->fetch();
    }
    //修改类型
    public function xgtype(){

        return $this->fetch();
    }


    //订单管理
    public function order(){

        return $this->fetch();
    }

}