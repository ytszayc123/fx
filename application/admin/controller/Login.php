<?php
namespace app\admin\controller;

use app\admin\model\Admin;
use think\Controller;
use think\facade\Session;

/*登录功能*/
class Login extends Controller
{
    public function login_view()
    {
        return $this->fetch();
    }

    /**
     * 后端登录
     * @return \think\response\Json
     */
    public function login()
    {
        $data = request()->Post();
        if(!captcha_check($data["code"])){
            return toJson(400,"验证码输入错误");
        }
        //dump($data);die();
        $boo = Admin::modelLogin($data["username"],$data["password"]);
        //dump($boo);die;
        if($boo!=null){
            Session::set("admin_id",$boo["id"]);
            return toJson(200,"登录成功");
        }else{
            return toJson(400,"用户名或密码错误");
        }
    }

    /*退出*/
    public function quit()
    {
        Session::delete("admin_id");
        if(Session::get("admin_id")==null){
            $this->redirect("view/login");
        }
    }

}