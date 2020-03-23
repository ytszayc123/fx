<?php
namespace app\admin\model;


use think\Model;


/*
 * 类型表模型
 * */
class Type extends Model
{

//    增
    public static function type_add($data){
        $type = new Type;
        if(is_array($data)){
            $row = $type->save($data);
            if($row){
                return json(['code'=>1,'msg'=>'添加成功','id'=>$type->id]);
            }
        }else{
            return json(['code'=>0,'msg'=>'传入参数错误']);
        }

    }

//    查
    public static function type_list(){
        $list = Type::all();
        if($list){
            return $list;
        }else{
            return "查询失败";
        }
    }

//    查单个
    public static function type_find($id){
        if($id){
            $type = Type::get($id);
                return $type;
        }else{
            return "没有参数";
        }

    }

//    修改（要传入ID）
    public static function type_edit($data){
        if(is_array($data)){
            $row = Type::update($data);
            if($row){
                return json(['code'=>1,'msg'=>'修改成功']);
            }
        }else{
            return json(['code'=>0,'msg'=>'传入参数错误']);
        }
    }

//    删除
    public static function type_del($id){
        if($id>0){
            return Type::destroy($id);
        }else{
            return "请传入正确的参数ID";
        }
    }


}