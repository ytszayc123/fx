<?php
namespace app\api\controller;


use think\Controller;

class User extends Controller
{

    /*
     * 用户登录
     * */
    public function login()
    {

    }

    /*
     * 用户注册
     * */
    public function register()
    {
        if(request()->isPost()){
            return input();
        }else{
            return toJson(400,"非法请求");
        }
    }

    /*
     * 调用短信接口
     * */
    public function sms()
    {
        return "123123";
    }
}