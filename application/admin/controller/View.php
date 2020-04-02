<?php
namespace app\admin\controller;

class View extends System
{
    /*后端主控页面*/
    public function system()
    {
        return $this->fetch();
    }

    /*后端首页*/
    public function welcome()
    {
        $d['t'] =round(@disk_total_space(".")/(1024*1024*1024),3);
        $d['f'] =round(@disk_free_space(".")/(1024*1024*1024),3);
        $d['u'] =$d['t']-$d['f'];
        $d['PCT'] = (floatval($d['t'])!=0)?round($d['u']/$d['t']*100,2):0;
        dump($d);
        $this->assign("d",$d);
        return $this->fetch();
    }
}
