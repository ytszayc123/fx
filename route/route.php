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
/*贺命雄接口路由*/
//Route::post("login/login","admin/login/login");
Route::rule('login','admin/login/login','POST');
Route::rule('quit','admin/login/quit','GET');


return [

];
