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
            echo'<span class="layui-btn layui-btn-normal layui-btn-mini\">已启用</span>';
            break;
        case 1:
            echo '<span class="layui-btn layui-btn-normal layui-btn-mini\">已停用</span>';
            break;
    }
}


