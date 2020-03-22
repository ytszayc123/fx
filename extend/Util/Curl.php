<?php
namespace Util;


class Curl
{
    private $ch = null;
    private $url = null;

    //初始化
    private function __construct($url)
    {
        $this->url = $url;
        if($url == null){
            $this->ch = curl_init();
        }else{
            $this->ch = curl_init($url);
        }
    }

    //对外暴露初始化接口
    //单例模式
    public static function getInstance($url = null)
    {
        return new Curl($url);
    }

    /*XML数据*/
    public function curlXml($xml, $url, $second = 30)
    {
        //$this->ch = curl_init();
        //设置超时
        curl_setopt($this->ch, CURLOPT_TIMEOUT, $second);
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, FALSE); //严格校验
        //设置header
        curl_setopt($this->ch, CURLOPT_HEADER, FALSE);
        //要求结果为字符串且输出到屏幕上
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, TRUE);
        //post提交方式
        curl_setopt($this->ch, CURLOPT_POST, TRUE);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $xml);
        curl_setopt($this->ch, CURLOPT_CONNECTTIMEOUT, 20);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 40);
        set_time_limit(0);
        //运行curl
        $data = curl_exec($this->ch);
        //返回结果
        if ($data) {
            curl_close($this->ch);
            return $data;
        } else {
            $error = curl_errno($this->ch);
            curl_close($this->ch);
            throw new WxPayException("curl出错，错误码:$error");
        }
    }

    /*带证书请求*/
    public function curlPost($url = '', $postData = '', $options = array())
    {
        if (is_array($postData)) {
            $postData = http_build_query($postData);
        }
        //$this->ch = curl_init();
        curl_setopt($this->ch, CURLOPT_URL, $url);
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, 30); //设置cURL允许执行的最长秒数
        if (!empty($options)) {
            curl_setopt_array($this->ch, $options);
        }
        //https请求 不验证证书和host
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYHOST, false);
        $data = curl_exec($this->ch);
        curl_close($this->ch);
        return $data;
    }

    /*普通request请求*/
    public function curlRequest($method='get',$data=null,$https=true)
    {
        if($this->url == null){
            throw new \Exception("该方法调用,需要在初始化时赋值Url");
        }
        // 初识化curl
        //$this->ch=curl_init($url);
        //根据实际请求需求进行参数封装
        //返回数据不直接输出
        curl_setopt($this->ch,CURLOPT_RETURNTRANSFER,true);
        //如果是HTTPS请求
        if($https==true){
            curl_setopt($this->ch,CURLOPT_SSL_VERIFYPEER,false);
            curl_setopt($this->ch,CURLOPT_SSL_VERIFYHOST,false);
        }
        //如果是POST请求
        if($method=='post'){
            curl_setopt($this->ch,CURLOPT_POST,true);
            curl_setopt($this->ch,CURLOPT_POSTFIELDS,$data);
        }
        //发起请求
        $result=curl_exec($this->ch);
        //返回值关闭连接
        curl_close($this->ch);
        return $result;
    }
}