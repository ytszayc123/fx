<?php /*a:1:{s:68:"F:\phpstudy_pro\WWW\jsh\application\admin\view\login\login_view.html";i:1584751014;}*/ ?>
<!doctype html>
<html  class="x-admin-sm">
<head>
	<meta charset="UTF-8">
	<title>后台登录-X-admin2.2</title>
	<meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8,target-densitydpi=low-dpi" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/static/css/font.css">
    <link rel="stylesheet" href="/static/css/login.css">
	  <link rel="stylesheet" href="/static/css/xadmin.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="/static/lib/layui/layui.js" charset="utf-8"></script>
    <!--[if lt IE 9]>
      <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
      <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-bg">
    
    <div class="login layui-anim layui-anim-up">
        <div class="message">分销商城智慧管理平台登陆页面</div>
        <div id="darkbannerwrap"></div>
        
        <form method="post" class="layui-form" >
            <input name="username" placeholder="用户名"  type="text" lay-verify="required" class="layui-input" >
            <hr class="hr15">
            <input name="password" lay-verify="required" placeholder="密码"  type="password" class="layui-input">
            <hr class="hr15">
            <input name="code" lay-verify="required" placeholder="验证码" style="float:left;width: 49%" type="text" class="layui-input">
            <img src="<?php echo captcha_src(); ?>" style="float:right;height:50px;width: 49%" onclick="this.src=this.src.split('?')[0] + '?'+new Date().getTime()"/>
            <hr class="hr15">
            <input value="登录" lay-submit lay-filter="login" style="width:100%;border-radius: 48px;" type="submit">
            <hr class="hr20" >
        </form>
    </div>

    <script>
        $(function  () {
            layui.use('form', function(){
                let form = layui.form;
                form.on('submit(login)', function(data){
                    console.log($(".layui-form").serialize());
                    console.log(data);
                    $.post(
                        //"<?php echo url('login'); ?>",
                        "/login",
                        $(".layui-form").serialize(),
                        function(res){
                            if(res.state==200){
                                layer.open({
                                    title:"提示",
                                    content:res.msg,
                                    //time:1000,
                                    end:function(){
                                        location.href='/admin'
                                    }
                                })
                            }else{
                                layer.open({
                                    title:"提示",
                                    content:res.msg,
                                    //time:3000
                                })
                            }
                            //location.href='index.html'
                        }
                    );
                    return false;
                });
            });
        })
    </script>
    <!-- 底部结束 -->
</body>
</html>