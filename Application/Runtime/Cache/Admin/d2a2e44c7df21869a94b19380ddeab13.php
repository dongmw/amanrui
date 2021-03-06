<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <h1>管理员注册</h1>
    <hr>
    <form class="form-horizontal" role="form" action="<?php echo U('do_register');?>" method="post">
        <div class="form-group">
            <label for="username" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
                <input type="text"  name="username" class="form-control" id="username" placeholder="username">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="password" placeholder="password">
            </div>
        </div>

        <div class="form-group">
            <label for="check_password" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
                <input type="password" name="check_password" class="form-control" id="check_password" placeholder="check_password">
            </div>
        </div>
        <!--<div class="form-group">-->
            <!--<div class="col-sm-offset-2 col-sm-10">-->
                <!--<div class="checkbox">-->
                    <!--<label>-->
                        <!--<input type="checkbox"> Remember me-->
                    <!--</label>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">注 册</button>
            </div>
        </div>
    </form>
    <a href="<?php echo U('login');?>">已有账号, 立即登录</a>
</div>

<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>