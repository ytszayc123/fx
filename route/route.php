<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\facade\Route;

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

/*贺命雄页面路由*/
Route::get("view/admin","admin/view/system");
Route::get("view/login","admin/Login/login_view");
Route::get("view/admin_list","admin/admin/admin_list");
Route::get("view/admin_add","admin/admin/admin_add");
Route::get("view/user_list","admin/user/user_list");
/*贺命雄接口路由*/
//Route::post("login/login","admin/login/login");
Route::rule('login','admin/login/login','POST');
Route::rule('quit','admin/login/quit','GET');
Route::rule("user_login","api/user/login","POST");
Route::rule("user_register","api/user/register","POST");
//Route::get("sms","api/user/sms");
Route::rule("sms","api/user/sms","GET");//需要修改
Route::rule("admin/add","api/admin/add","POST");
Route::rule("admin/status","api/admin/status","POST");
/*王赛雄路由*/
/*会员商城*/
Route::get("view/goods","admin/goods/index");//商品列表页
Route::get("view/addgoods","admin/goods/add");//商品添加页
Route::get("view/updategoods","admin/goods/xgadd");//商品编辑页
Route::get("view/sizelist",'admin/goods/spec');//规格列表页
Route::get("view/addsize",'admin/goods/specadd');//规格添加页
Route::get("view/updatesize",'admin/goods/xgspec');//规格编辑页
Route::get("view/typelist",'admin/goods/type');//类型列表页
Route::get("view/addtype",'admin/goods/typeadd');//类型添加页
Route::get("view/updatelist",'admin/goods/xgtype');//类型编辑页
Route::get("view/orderlist",'admin/goods/order');//订单页面

/*王赛雄路由*/
/*积分商城*/
Route::get("view/integralgoods","admin/integral/integralgoods");//商品列表页
Route::get("view/integralgoodsadd","admin/integral/integralgoodsadd");//商品添加页
Route::get("view/updateintegralgoods","admin/integral/updateintegralgoods");//商品编辑页
Route::get("view/integralsize",'admin/integral/integralsize');//规格列表页
Route::get("view/integralsizeadd",'admin/integral/integralsizeadd');//规格添加页
Route::get("view/updateintegralsize",'admin/integral/updateintegralsize');//规格编辑页
Route::get("view/integraltype",'admin/integral/integraltype');//类型列表页
Route::get("view/integraltypeadd",'admin/integral/integraltypeadd');//类型添加页
Route::get("view/updateintegraltype",'admin/integral/updateintegraltype');//类型编辑页
Route::get("view/integralorder",'admin/integral/integralorder');//订单页面


return [

];
