<?php

/*时间戳转年月日时分秒*/
function datatime($time)
{
    return date("Y-m-d h:i:s",$time);
}

/*管理员状态显示*/
function admin_status($status)
{
    switch ($status){
        case 0:
            echo '<span class="layui-btn layui-btn-disabled layui-btn-mini">停用</span>';
            break;
        case 1:
            echo'<span class="layui-btn layui-btn-normal layui-btn-mini">启用</span>';
            break;
    }
}

/*管理员状态*/
function getAdminStatus($status)
{
    switch ($status){
        case 0:
            echo "禁用";
            break;
        case 1:
            echo "启用";
            break;
    }
}

/*管理员状态修改摁扭*/
function Twist($status)
{
    switch ($status){
        case 0:
            echo "<i class=\"layui-icon\">&#xe62f;</i>";
            break;
        case 1:
            echo "<i class=\"layui-icon\">&#xe601;</i>";
            break;
    }
}

///*将年-月-日转换成时间戳*/
//function strtotime($str)
//{
//    $arr = date_parse_from_format('Y年m月d日',$str);
//    return mktime(0,0,0,$arr['month'],$arr['day'],$arr['year']);
//}


