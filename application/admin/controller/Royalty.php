<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/22
 * Time: 17:04
 */

namespace app\admin\controller;

use app\admin\model\Type;


class Royalty extends System
{

//    级别列表
    public function level_list(){
        $list = Type::type_list();
              $this->assign('list',$list);
        return $this->fetch();
    }

//    添加级别
    public function level_add(){

        return $this->fetch();
    }

//    修改级别
    public function level_edit(){
        $id = input('id');
         $type = Type::type_find($id);
         $this->assign('edit',$type);
        return $this->fetch();
    }

//    执行添加级别
    public function save_add(){
       $data['type'] = input('type');
       $data['money'] = input('money');
       $res =  Type::type_add($data);
       return $res;
    }

//    执行修改
    public function save_edit(){
        $data['id'] = input('id');
        $data['type'] = input('type');
        $data['money'] = input('money');
        $res =  Type::type_edit($data);
        return $res;
    }

//    删除
    public function level_del(){
        $id = input('id');
        return Type::type_del($id);
    }


//  配置列表
    public function royalty_list(){

        return $this->fetch();
    }


//    添加配置
    public function royalty_add(){

        return $this->fetch();
    }

//   修改配置
    public function royalty_edit(){

        return $this->fetch();
    }





}