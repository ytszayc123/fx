<?php
namespace app\admin\controller;

class User extends System
{
    public function user_list()
    {
        $data = input();
        unset($data["/view/user_list"]);
        if(empty($data)){
            dump(null);die;
        }else{
            dump(array());die;
        }
        return $this->fetch();
    }
}