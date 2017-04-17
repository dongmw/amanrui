<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Wycms</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Public/css/common.css" rel="stylesheet">
    
    <style>
        .page2 {
            display: none;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top col-md-10">
    <div class="container-fluid nav_bg">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo U('Index/index');?>">
                        <span class='glyphicon glyphicon-home' aria-hidden='true'></span> 長樂未央
                    </a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        <span class='glyphicon glyphicon-th' aria-hidden='true'></span> 內容管理 <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="<?php echo U('Category/index');?>">分类管理</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo U('Article/index');?>">文章列表</a>
                        </li>
                        <li>
                            <a href="<?php echo U('Article/create');?>">新增文章</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="<?php echo U('File/index');?>">
                        <span class='glyphicon glyphicon-file' aria-hidden='true'></span> 文件管理
                    </a>
                </li>

                <li>
                    <!--路径的写法不同，避免和前面的"/"发生冲突，所以不能使用"U"方法-->
                    <a href="/index.php?m=Admin&c=files">
                        <span class='glyphicon glyphicon-folder-open' aria-hidden='true'></span> 文件设置
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Link/index');?>">
                        <span class='glyphicon glyphicon-link' aria-hidden='true'></span> 友情链接
                    </a>
                </li>
                <li>
                    <a href="<?php echo U('System/config');?>">
                        <span class='glyphicon glyphicon-wrench' aria-hidden='true'></span> 系统设置
                    </a>
                </li>

                <li>
                    <a href="<?php echo U('Recycle/index');?>">
                        <span class='glyphicon glyphicon-floppy-remove' aria-hidden='true'></span> 回收站
                    </a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo (ucfirst($user["username"])); ?> 管理员 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php echo U('User/logout');?>">安全退出</a></li>
                        <li><a href="<?php echo U('System/change_password');?>">修改密码</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="main">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10">

                <div class="page-header">
                    <h1>長樂未央
                        <small>簡明、易用</small>
                    </h1>
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">文件管理</div>

                    <div class="panel-body">

                        <img src="<?php echo ($img_path); ?>" alt="" style="max-width: 100%; max-height: 500px;">

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="/Public/bootstrap/js/bootstrap.min.js"></script>

    <script>

    </script>

</body>
</html>