<?php
namespace app\admin\controller;


class User extends System
{
    public function user_list()
    {
        return $this->fetch();
    }
}