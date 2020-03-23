<?php
namespace app\common;

class UserCache
{
    private $resurce = [
        "username"=>"", //用户名
        "token"=>"", //用户加密串
        "SuperiorUser"=>"",//用户上级用户id
        "Subordinate"=>[],//用户下级列表
        "RealName"=>"",//用户真实姓名
        "InvitationCode"=>"", //用户唯一邀请码
        "Commission"=>null,//用户佣金
        "Integral" =>0,//用户积分
    ];

//    /*
//     * 内部私有化
//     * */
//    public function __construct($username)
//    {
//        $this->resurce = Cache::get($username);
//        if(!$this->resurce){
//            $this->resurce = [
//                "username" =>$username
//            ];
//            Cache::set($username,$this->resurce);
//        }
//    }
//
//    /*批量写入/更新数据*/
//    /**
//     * @param $resource
//     * @throws Exception
//     */
//    public function UpdateCache($resource)
//    {
//        $line = __LINE__;
//        switch ($resource["username"]){
//            case $this->resurce["username"]:
//                foreach (array_keys($this->resurce) as $key) {
//                    if ($this->resurce[$key] != $resource[$key]) {
//                        $this->resurce[$key] = $resource[$key];
//                    }
//                }
//                Cache::rm($this->resurce["username"]);
//                Cache::set($this->resurce["username"],$this->resurce);
//                break;
//            default:
//                throw new Exception("错误代码所在文件:".__DIR__."\\UserCache.php"."\n"
//                                        ."错误出现行数:第".$line."行"."\n"
//                                        ."错误原因:传入参数不是预期参数");
//        }
//    }
//
//    /*
//     * 对外暴露初始化接口
//     * */
//    /**
//     * @param $username
//     * @return UserCache
//     */
//    public static function getInstance($username)
//    {
//        return new UserCache($username);
//    }
//
//    /**
//     * 设置用户的token值
//     * @param $token 用户加密字符串
//     */
//    public function setToken($token)
//    {
//        $this->resurce["token"] = $token;
//    }
//
//    /**
//     * 设置上级用户id
//     * @param $SuperiorUser 上级用户id
//     */
//    public function setSuperiorUser($SuperiorUser)
//    {
//        $this->resurce["SuperiorUser"] = $SuperiorUser;
//    }
//
//    /**
//     * 设置用户下级用户列表
//     * @param $Subordinate 下级用户列表
//     */
//    public function setSubordinate($Subordinate)
//    {
//        $this->resurce["Subordinate"] = $Subordinate;
//    }
//
//    /*
//     * 设置用户真实姓名
//     * @param string $RealName
//     */
//    public function setRealName(string $RealName)
//    {
//        $this->resurce["RealName"] = $RealName;
//    }
//
//    /*
//     * 设置用户唯一二维码
//     * @param $InvitationCode
//     * */
//    public function setInvitationCode($InvitationCode)
//    {
//        $this->resurce["InvitationCode"] = $InvitationCode;
//    }
//
//    /*
//     * 设置用户佣金
//     * */
//    public function setCommission($Commission)
//    {
//        $this->resurce["Commission"] = $Commission;
//    }
//
//    public function getResource()
//    {
//        return $this->resurce;
//    }
//
//    public function setResource(array $resource){
//        //$boo =in_array("username",array_keys($value));//判断传入的参数是否存在username键，
//        $boo = array_key_exists("username",$resource);
//        if($boo){
//            $this->resurce = $resource;
//        }else{
//            throw new \Exception("错误代码所在文件:".__DIR__."\\UserCache.php;\n代码所在行数:".__LINE__."行\n数组中不存在username键");
//        }
//    }
//
//    public function save()
//    {
//        Cache::rm($this->resurce["username"]);
//        Cache::set($this->resurce["username"],$this->resurce);
//    }
//
//    /*
//     * 获取用户的token值
//     * */
//    public function getToken()
//    {
//        return $this->resurce["token"];
//    }
//
//    /**
//     * @return array
//     */
//    public function getResurce()
//    {
//        return $this->resurce;
//    }


}