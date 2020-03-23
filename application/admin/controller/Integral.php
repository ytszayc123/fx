<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/19
 * Time: 10:06
 */

namespace app\admin\controller;


class Integral extends System{

    //商品列表页
    public function integralgoods(){
        return $this->fetch();
    }

    //商品添加页面
    public function integralgoodsadd(){
        return $this->fetch();
    }

    //商品编辑页面
    public function updateintegralgoods(){
        return $this->fetch();
    }

    //积分类型
    public function integraltype(){
        return $this->fetch();
    }

    //积分类型添加页面
    public function integraltypeadd(){
        return $this->fetch();
    }

    //积分类型修改页面
    public function updateintegraltype(){
        return $this->fetch();
    }

    //积分规格
    public function integralsize(){
        return $this->fetch();
    }

    //积分规格添加页面
    public function integralsizeadd(){
        return $this->fetch();
    }

    //积分规格编辑页面
    public function updateintegralsize(){
        return $this->fetch();
    }


    //订单列表页
    public function integralorder(){
        return $this->fetch();
    }
}
