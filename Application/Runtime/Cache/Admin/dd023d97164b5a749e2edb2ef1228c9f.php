<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style>

        .code {
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>管理员登录</h1>
    <hr>
    <form class="form-horizontal" role="form" action="<?php echo U('do_login');?>" method="post">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="username" placeholder="username">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
        </div>

        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">验证码</label>
            <div class="col-sm-5">
                <input type="text" name="code" class="form-control" id="code" placeholder="code">
            </div>

            <div class="col-sm-5">
                <img src="" alt="" class="code">
            </div>

        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="rem" value="1"> 记住我
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">登 录</button>
            </div>
        </div>


    </form>
    <a href="<?php echo U('register');?>">还没有账号, 立即注册</a>
</div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(function () {
        //网页刷新一次获取一个新的验证码
        var set_code = function(){
            var src = "/Admin/User/verify/?"+Math.random();
            $(".code").attr('src', src);
        }
        set_code();
        //点击一下获取一个新的验证码
        $(".code").click(function () {
            set_code();
        })
    })
</script>
</body>
</html>