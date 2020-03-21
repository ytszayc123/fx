<?php
namespace app\common;

/*注册器*/
class Registry
{
    /**
     * Registry实例
     * @var object
     */
    private static $instance = null;

    /**
     * 取得Registry实例
     * @note 单件模式
     * @return object
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 保存一项内容到注册表中
     * @param string $name 索引
     * @param mixed $value 数据
     * @return void
     */
    public static function set($name, $value)
    {
        self::$instance[$name] =  $value;
    }

    /**
     * 取得注册表中某项内容的值
     * @param string $name 索引
     * @return mixed
     */
    public static function get($name)
    {
        return self::$instance[$name];
    }

    /**
     * 检查一个索引是否存在
     * @param string $name 索引
     * @return boolean
     */
    public static function isRegistered($name)
    {
        return self::$instance[$name];
    }

    /**
     * 删除注册表中的指定项
     * @param string $name 索引
     * @return void
     */
    public static function remove($name)
    {
        unset(self::$instance[$name]);
    }
}